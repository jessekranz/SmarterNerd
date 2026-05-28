# SmarterNerd Child Theme — Implementation Guide

## File Map

```
smarternerd-child/
├── style.css                  ← All CSS + design tokens (only hex file)
├── functions.php              ← Fonts, scripts, LocalBusiness + WebSite schema
├── theme.json                 ← Kadence/block editor overrides
├── js/
│   ├── interactions.js        ← Scroll progress, reveal, typewriter, cipher, FAQ
│   └── counters.js            ← Stat counter animations
├── pages/
│   ├── home.html              ← Homepage (paste into WP)
│   ├── portfolio.html
│   ├── ai-services.html
│   ├── seo-services.html
│   ├── about.html
│   └── contact.html
├── rankmath/
│   └── rankmath-settings.json ← Import via Rank Math > Status & Tools
└── docs/
    └── implementation-guide.md ← This file
```

---

## Step 1 — Upload Child Theme

1. Zip the entire `smarternerd-child/` folder
2. WordPress Admin → **Appearance → Themes → Add New → Upload Theme**
3. Upload zip → **Install Now → Activate**
4. Verify parent Kadence theme is installed (child requires it)

---

## Step 2 — Upload JS Files

The `js/` folder must live inside the child theme:

```
wp-content/themes/smarternerd-child/js/interactions.js
wp-content/themes/smarternerd-child/js/counters.js
```

Upload via FTP/SFTP or cPanel File Manager. `functions.php` enqueues them automatically on activation.

---

## Step 3 — Google Fonts Verification

After activation, open browser DevTools → Network tab → filter "fonts.googleapis" — confirm Syne, DM Sans, and JetBrains Mono are loading. If Kadence loads its own font set, `functions.php` dequeues `kadence-google-fonts` to prevent duplicates.

---

## Step 4 — Import Rank Math Settings

1. WordPress Admin → **Rank Math → Status & Tools → Import/Export**
2. Under **Import**, select the file: `rankmath/rankmath-settings.json`
3. Check all modules, click **Import**
4. Manually verify in **Rank Math → General Settings**:
   - Schema: ✅ enabled
   - Sitemap: ✅ enabled
   - Local SEO: ✅ enabled
   - Analytics: ❌ disabled (prevents DB bloat)
   - 404 Monitor: ❌ disabled (temp)

---

## Step 5 — Connect Google Services

1. **Rank Math → General Settings → Webmaster Tools**
   - Paste Google Search Console verification code
2. **Rank Math → Analytics → Connect**
   - Connect Google Analytics 4 property
   - Connect Google Search Console property
3. After connecting, submit sitemap:
   - Go to GSC → Sitemaps → Add: `sitemap_index.xml`

---

## Step 6 — Create Pages in WordPress

For each HTML file in `pages/`:

1. **Pages → Add New**
2. Set Page Title (must match H1 focus keyword)
3. Set **Template → Full Width** (Kadence template, no sidebar)
4. Switch editor to **Code Editor** (three-dot menu → Code Editor)
5. Paste the full HTML from the corresponding file
6. Set **Rank Math focus keyword** in the sidebar
7. Set **Meta title + description** per `rankmath-settings.json`
8. Upload and set **OG image** (1200×630px)
9. **Publish**

### Page-specific Rank Math settings:

| Page          | Focus Keyword                       | Target Score |
|---------------|-------------------------------------|--------------|
| Home          | web designer Fort Lauderdale        | 95+          |
| Portfolio     | web design portfolio Fort Lauderdale| 90+          |
| AI Services   | AI services Fort Lauderdale         | 90+          |
| SEO Services  | SEO services Fort Lauderdale        | 90+          |
| About         | Fort Lauderdale web designer        | 90+          |
| Contact       | contact Fort Lauderdale web designer| 85+          |

---

## Step 7 — Replace the Contact Form

The `contact.html` includes a plain HTML form for structure. Replace it with your form plugin:

**Option A — WPForms (recommended):**
```html
[wpforms id="YOUR_FORM_ID"]
```

**Option B — Contact Form 7:**
```html
[contact-form-7 id="YOUR_ID" title="Contact"]
```

Style the plugin form by adding CSS in the child theme targeting `.wpforms-form` or `.wpcf7-form` — both are pre-styled in `style.css`.

---

## Step 8 — Upload Images

Upload these images to Media Library with exact filenames for SEO:

| Filename                                          | Usage                  | Size        |
|---------------------------------------------------|------------------------|-------------|
| `smarternerd-logo.png`                            | Logo (all pages)       | 320×96px    |
| `jesse-smarternerd.jpg`                           | About page photo       | 400×400px   |
| `og-homepage-web-designer-fort-lauderdale.jpg`    | Homepage OG            | 1200×630px  |
| `og-portfolio-fort-lauderdale-web-design.jpg`     | Portfolio OG           | 1200×630px  |
| `og-ai-services-fort-lauderdale.jpg`              | AI Services OG         | 1200×630px  |
| `og-seo-services-fort-lauderdale.jpg`             | SEO Services OG        | 1200×630px  |
| `og-about-fort-lauderdale-web-designer.jpg`       | About OG               | 1200×630px  |
| `og-contact-fort-lauderdale-web-designer.jpg`     | Contact OG             | 1200×630px  |
| `portfolio-charleshawkins.jpg`                    | Portfolio grid         | 680×425px   |
| `portfolio-protouchrehab.jpg`                     | Portfolio grid         | 680×425px   |
| `portfolio-arvadacoins.jpg`                       | Portfolio grid         | 680×425px   |
| `portfolio-altimagery.jpg`                        | Portfolio grid         | 680×425px   |
| `portfolio-spacesplaces.jpg`                      | Portfolio grid         | 680×425px   |
| `portfolio-socalritual.jpg`                       | Portfolio grid         | 680×425px   |
| `portfolio-jonesironandmetal.jpg`                 | Portfolio grid         | 680×425px   |
| `portfolio-absmech.jpg`                           | Portfolio grid         | 680×425px   |

All portfolio images: compress to <150KB. Use Squoosh or ShortPixel.

---

## Step 9 — Navigation Setup

1. **Appearance → Menus → Create New Menu** named "Primary"
2. Add pages: Home · Portfolio · AI Services · SEO Services · About · Contact
3. Add a custom link with class `menu-item-cta` for the Contact button style
4. Assign to **Primary Menu** location
5. In **Kadence → Customizer → Header → Navigation**: select Primary menu

---

## Step 10 — Kadence Global Colors

Set palette slots in **Kadence → Customizer → General → Colors**:

| Slot  | Name          | Hex       |
|-------|---------------|-----------|
| 1     | Neon Cyan     | #00E5FF   |
| 2     | Magenta       | #FF2D9B   |
| 3     | Electric Blue | #4D6EFF   |
| 4     | Deep Space    | #050A12   |
| 5     | Card BG       | #0D1726   |
| 6     | Primary Text  | #F0F8FF   |

These are for the Kadence UI only — all code uses `var(--sn-*)` tokens.

---

## Step 11 — GoDaddy Hosting Checks

- Confirm SSL certificate is active (https:// loads without warning)
- Enable GZip compression in GoDaddy hosting panel
- Enable browser caching (or use W3 Total Cache plugin)
- Confirm firewall is active
- Set up daily backup schedule

---

## Step 12 — Post-Launch Checklist

- [ ] All 6 pages published with correct Rank Math settings
- [ ] Sitemap submitted to Google Search Console
- [ ] GA4 receiving data (check Realtime report)
- [ ] All pages scoring 85+ in Rank Math
- [ ] Logo displays with cyan glow
- [ ] Scroll progress bar visible on all pages
- [ ] FAQ accordions open/close correctly
- [ ] Contact form sends test email successfully
- [ ] All portfolio links open correct live sites
- [ ] Google Maps embed loads on Contact page
- [ ] Mobile layout tested on iPhone + Android
- [ ] PageSpeed score 80+ mobile, 90+ desktop
- [ ] LocalBusiness schema validates at schema.org/SchemaValidator
- [ ] FAQPage schema validates on all 6 pages
- [ ] Google Business Profile: weekly post scheduled

---

## Design Token Quick Reference

All hex values live **only** in `style.css :root`. Use these variables everywhere else:

```css
var(--sn-cyan)       /* #00E5FF — primary, CTAs, glows */
var(--sn-magenta)    /* #FF2D9B — secondary, featured  */
var(--sn-electric)   /* #4D6EFF — AI service accent    */
var(--sn-bg)         /* #050A12 — page background      */
var(--sn-bg-2)       /* #0A1220 — nav, footer          */
var(--sn-bg-3)       /* #0F1A2E — alt sections         */
var(--sn-card)       /* #0D1726 — card backgrounds     */
var(--sn-text)       /* #F0F8FF — primary text         */
var(--sn-text-2)     /* body copy (70% opacity)        */
var(--sn-text-3)     /* muted / labels (40% opacity)   */
var(--sn-border)     /* default borders (15% opacity)  */
var(--sn-border-h)   /* hover borders (35% opacity)    */
var(--sn-glow-cyan)  /* cyan box-shadow glow           */
var(--sn-glow-mag)   /* magenta box-shadow glow        */
```

---

## Ongoing Monthly SEO Tasks

1. Publish 2–4 blog posts targeting Fort Lauderdale + service keywords
2. Post to Google Business Profile weekly (use AI Starter plan content)
3. Respond to every Google review within 24 hours (100% response rate)
4. Check GSC for crawl errors monthly
5. Update Rank Math sitemap ping after new content
6. Monitor Core Web Vitals in GSC → Experience
7. Track rankings for all 6 focus keywords monthly

---

## Support

Questions? Email **Jesse@SmarterNerd.com**
