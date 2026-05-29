import zipfile
import re
import xml.etree.ElementTree as ET
import sys

NS = {
    'w': 'http://schemas.openxmlformats.org/wordprocessingml/2006/main',
}
W = NS['w']

def qn(tag):
    pre, local = tag.split(':')
    return f'{{{NS[pre]}}}{local}'

def get_text_from_run(run):
    text = ''
    for node in run.iter():
        if node.tag == qn('w:t'):
            text += node.text or ''
        elif node.tag == qn('w:tab'):
            text += '\t'
        elif node.tag == qn('w:br'):
            text += '\n'
    return text

def run_is_bold(run):
    rpr = run.find(qn('w:rPr'))
    if rpr is None:
        return False
    b = rpr.find(qn('w:b'))
    if b is None:
        return False
    val = b.get(qn('w:val'))
    return val not in ('0', 'false', 'none')

def run_is_italic(run):
    rpr = run.find(qn('w:rPr'))
    if rpr is None:
        return False
    i = rpr.find(qn('w:i'))
    if i is None:
        return False
    val = i.get(qn('w:val'))
    return val not in ('0', 'false', 'none')

def para_text_with_formatting(para):
    parts = []
    for run in para.findall(qn('w:r')):
        t = get_text_from_run(run)
        if not t:
            continue
        bold = run_is_bold(run)
        italic = run_is_italic(run)
        # Apply markdown emphasis only to non-whitespace content
        stripped = t.strip()
        if stripped:
            lead = t[:len(t) - len(t.lstrip())]
            trail = t[len(t.rstrip()):]
            wrap = stripped
            if bold and italic:
                wrap = f'***{wrap}***'
            elif bold:
                wrap = f'**{wrap}**'
            elif italic:
                wrap = f'*{wrap}*'
            parts.append(f'{lead}{wrap}{trail}')
        else:
            parts.append(t)
    return ''.join(parts)

def get_para_style(para):
    ppr = para.find(qn('w:pPr'))
    if ppr is None:
        return None, False, 0
    style = None
    pstyle = ppr.find(qn('w:pStyle'))
    if pstyle is not None:
        style = pstyle.get(qn('w:val'))
    numpr = ppr.find(qn('w:numPr'))
    is_list = numpr is not None
    indent = 0
    # Word stores bullet lists as pStyle="ListBullet", "ListBullet2", etc.
    if style:
        m = re.match(r'(?i)list(?:bullet|paragraph|number)(\d*)$', style)
        if m:
            is_list = True
            if m.group(1):
                indent = int(m.group(1)) - 1
    # numPr nesting level (ilvl) also contributes indentation
    if numpr is not None:
        ilvl = numpr.find(qn('w:ilvl'))
        if ilvl is not None:
            try:
                indent = max(indent, int(ilvl.get(qn('w:val')) or 0))
            except ValueError:
                pass
    return style, is_list, indent

def style_to_md_prefix(style):
    if not style:
        return ''
    s = style.lower()
    m = re.search(r'heading(\d)', s)
    if m:
        level = int(m.group(1))
        return '#' * min(level, 6) + ' '
    if s in ('title',):
        return '# '
    if s in ('subtitle',):
        return '## '
    return ''

def render_paragraph(para):
    style, is_list, indent = get_para_style(para)
    text = para_text_with_formatting(para)
    if not text.strip():
        return ''
    prefix = style_to_md_prefix(style)
    if prefix:
        return prefix + text.strip()
    # Convert Word checkbox glyphs (☐ U+2610 / ☑ U+2611 / ☒ U+2612) into
    # idiomatic GitHub task-list items.
    cb = re.match(r'^\**\s*([☐☑☒])\**\s*(.*)$', text.strip())
    if cb:
        mark = 'x' if cb.group(1) in ('☑', '☒') else ' '
        return f'- [{mark}] {cb.group(2).strip()}'
    if is_list:
        return ('  ' * indent) + '- ' + text.strip()
    return text

def render_table(tbl):
    rows = []
    for tr in tbl.findall(qn('w:tr')):
        cells = []
        for tc in tr.findall(qn('w:tc')):
            cell_text = []
            for para in tc.findall(qn('w:p')):
                t = para_text_with_formatting(para)
                if t.strip():
                    cell_text.append(t.strip())
            cells.append(' '.join(cell_text).replace('|', '\\|'))
        rows.append(cells)
    if not rows:
        return ''
    out = []
    ncols = max(len(r) for r in rows)
    rows = [r + [''] * (ncols - len(r)) for r in rows]
    out.append('| ' + ' | '.join(rows[0]) + ' |')
    out.append('| ' + ' | '.join(['---'] * ncols) + ' |')
    for r in rows[1:]:
        out.append('| ' + ' | '.join(r) + ' |')
    return '\n'.join(out)

def main(path):
    with zipfile.ZipFile(path) as z:
        with z.open('word/document.xml') as f:
            xml = f.read()
    root = ET.fromstring(xml)
    body = root.find(qn('w:body'))
    out = []
    for child in body:
        if child.tag == qn('w:p'):
            md = render_paragraph(child)
            out.append(md)
        elif child.tag == qn('w:tbl'):
            out.append('')
            out.append(render_table(child))
            out.append('')
    # Join blocks, keeping consecutive list items tight (single newline)
    def is_list_line(s):
        return bool(re.match(r'^\s*(-|\d+\.)\s', s))
    pieces = []
    prev = None
    for block in out:
        if prev is not None:
            sep = '\n' if (is_list_line(prev) and is_list_line(block)) else '\n\n'
            pieces.append(sep)
        pieces.append(block)
        if block.strip():
            prev = block
    text = ''.join(pieces)
    text = re.sub(r'\n{3,}', '\n\n', text)
    with open(sys.argv[2], 'w', encoding='utf-8') as out_f:
        out_f.write(text)

if __name__ == '__main__':
    main(sys.argv[1])
