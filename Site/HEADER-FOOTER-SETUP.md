# SmarterNerd Header & Footer Setup for Kadence

## Overview

The header and footer are now managed by the WordPress/Kadence theme, NOT included in individual Custom HTML blocks. This ensures consistency across all pages and reduces code duplication.

## Architecture

- **Header:** Logo, navigation menu, CTA button (managed by theme)
- **Custom HTML blocks:** Only page body content (no header, no footer)
- **Footer:** Managed by Kadence theme (standard footer)

## Implementation Steps

### Step 1: Add Header to Kadence Theme

**Option A: Using Kadence Custom Header**
1. Go to **WordPress Dashboard → Appearance → Customize**
2. Look for "Header" or "Navigation" settings in Kadence
3. Copy the content from `kadence-header-template.html` (the HTML and styles)
4. Add it to your custom header section

**Option B: Edit theme's header.php directly**
1. Go to **Appearance → Theme File Editor**
2. Find `header.php` in your Kadence theme
3. Add the header HTML and styles from `kadence-header-template.html`
4. Make sure it appears before the main content area

### Step 2: Custom HTML Block Content

All Custom HTML blocks on all pages now contain **ONLY the body content**, starting with:

```html
<div class="progress"></div>

<!-- HERO or first section -->
<section>
  ...
</section>
```

**NOT included in blocks:**
- `<header>` (handled by theme)
- `<footer>` (handled by theme)
- `<style>` tags (not allowed in Custom HTML)
- `<script>` tags (not allowed in Custom HTML)

### Step 3: Verify All Pages Follow Pattern

**Pages that should be updated:**
- ✅ homepage-body-wp.html (header removed)
- ✅ All service pages (never had header/footer)
- ✅ Main pages (never had header/footer)

All Custom HTML block files should now:
- Start with `<div class="progress"></div>`
- End with the final `</section>` (no footer)
- Contain only body content

## Files

- `kadence-header-template.html` — Complete header HTML + CSS (add to theme)
- All `-body-wp.html` files — Ready to paste into Custom HTML blocks

## CSS Variables Used

The header uses these CSS variables from neonspec-styles.css:
- `--text` — Primary text color
- `--t2` — Secondary text color
- `--cyan` — Primary accent color
- `--mag` — Secondary accent color
- `--line` — Border color
- `--trans` — Transition duration

These are already loaded globally in your Kadence theme, so no additional CSS needed.

## Testing Checklist

After implementation:
- [ ] Header displays on all pages
- [ ] Navigation links work correctly
- [ ] "Free growth plan" CTA button is styled (cyan background)
- [ ] Logo/brand link works
- [ ] Responsive menu works on mobile
- [ ] Footer displays consistently at bottom of all pages
- [ ] No style/script errors in browser console

## Notes

- The header is sticky/fixed at the top
- It has a semi-transparent background with backdrop blur
- Mobile menu hides nav links (you may want to add a hamburger menu)
- All styling uses CSS variables from neonspec theme

---

This ensures your header and footer are maintained in one place (the theme), making updates much easier!
