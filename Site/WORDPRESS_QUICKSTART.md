# SmarterNerd WordPress Migration — Quick Start Checklist

**Goal:** Install Kadence theme and deploy 7 redesigned pages TODAY

**Estimated Time:** 4-6 hours

---

## ⚡ PHASE 1: BACKUP & SAFETY (30 mins)

### Step 1: Full Site Backup
- [ ] Log in to **Cloudways** or your hosting
- [ ] Create **full backup** (Settings → Backups)
  - Wait for it to complete
  - Note the backup timestamp
- [ ] Download backup locally (if possible)

### Step 2: Test Access
- [ ] Verify you can access wp-admin
- [ ] Verify site loads on frontend
- [ ] Open your pages in a new tab to confirm current state

---

## 📦 PHASE 2: INSTALL KADENCE & CHILD THEME (15 mins)

### Step 3: Install Kadence Theme
- [ ] Go to **WordPress Admin → Appearance → Themes**
- [ ] Click **Add New**
- [ ] Search for **"Kadence"** (by Kadence Blocks)
- [ ] Click **Install** (it's free)
- [ ] Click **Activate**
- [ ] Site will update to Kadence theme
  - **Don't panic if it looks bare** — this is normal
  - You might see the Kadence setup wizard

### Step 4: Install Kadence Blocks Plugin
- [ ] Go to **Plugins → Add New**
- [ ] Search for **"Kadence Blocks"**
- [ ] Click **Install** (by Kadence Blocks)
- [ ] Click **Activate**

### Step 5: Create Kadence Child Theme
- [ ] Go to **WordPress Admin → Appearance → Themes**
- [ ] Look for **Kadence** in Active Theme
- [ ] Click **Theme File Editor** (or go to Appearance → File Manager)
- [ ] Create a folder in `/wp-content/themes/` called **`kadence-child`**
- [ ] In that folder, create **`style.css`** with this:

```css
/*
Theme Name: Kadence Child
Theme URI: https://smarternerd.com
Description: Child theme for Kadence
Author: SmarterNerd
Author URI: https://smarternerd.com
Template: kadence
Version: 1.0.0
Text Domain: kadence-child
Domain Path: /languages
*/

@import url("../kadence/style.css");
```

- [ ] Create **`functions.php`** in the same folder with this:

```php
<?php
/**
 * Kadence Child Theme Functions
 */

// Enqueue parent and child styles
function kadence_child_enqueue_styles() {
    wp_enqueue_style( 'kadence-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'kadence-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'kadence-parent-style' ) );
}
add_action( 'wp_enqueue_scripts', 'kadence_child_enqueue_styles' );
```

- [ ] Go to **Appearance → Themes**
- [ ] Activate **Kadence Child** theme

---

## 🎨 PHASE 3: DISABLE ELEMENTOR (10 mins)

### Step 6: Deactivate Elementor
- [ ] Go to **Plugins**
- [ ] Find **Elementor** → Click **Deactivate**
- [ ] Find **Essential Addons for Elementor** → Click **Deactivate**
- [ ] Find **Unlimited Elements for Elementor** → Click **Deactivate**
- [ ] **DO NOT delete** — just deactivate (safe rollback if needed)
- [ ] Check site still loads (should be fine)

---

## 📄 PHASE 4: CREATE PAGES (2-3 hours)

### Step 7: Create Services Hub Page First
- [ ] Go to **Pages → Add New**
- [ ] Title: **Services**
- [ ] Slug: **services** (must be `/services/`)
- [ ] In page editor, click **Edit with Kadence**
- [ ] Copy-paste content from [services-hub.html](services-hub.html)
  - Copy everything inside the `<body>` tags (between `<div class="progress"></div>` and `</footer>`)
  - Paste into Kadence editor
- [ ] Under **Rank Math SEO:**
  - Focus Keyword: `"services Fort Lauderdale"`
  - Meta Description: `"Full-service web design, SEO, AI chatbots, Google Maps, virtual tours, and consulting for South Florida businesses. See all our capabilities."`
- [ ] Click **Publish**

**Note:** The HTML will paste as code. You may need to use **Code Block** in Kadence to embed it, or use a **Custom HTML** plugin if Kadence doesn't support raw HTML.

### Step 8: Create Contact Page
- [ ] **Pages → Add New**
- [ ] Title: **Contact**
- [ ] Slug: **contact**
- [ ] Copy-paste from [contact.html](contact.html)
- [ ] Rank Math SEO:
  - Focus Keyword: `"contact Fort Lauderdale"`
  - Meta: `"Free consultation with Jesse. No sales pitch. Book a call or email directly."`
- [ ] **Publish**

### Step 9: Create Pricing Page
- [ ] **Pages → Add New**
- [ ] Title: **Pricing**
- [ ] Slug: **pricing**
- [ ] Copy-paste from [pricing.html](pricing.html)
- [ ] Rank Math SEO:
  - Focus Keyword: `"pricing Fort Lauderdale web design"`
  - Meta: `"Simple, transparent pricing for web design, SEO, and AI services. No hidden fees. Month-to-month or annual."`
- [ ] **Publish**

### Step 10: Create About Page
- [ ] **Pages → Add New**
- [ ] Title: **About**
- [ ] Slug: **about**
- [ ] Copy-paste from [about.html](about.html)
- [ ] Rank Math SEO:
  - Focus Keyword: `"Fort Lauderdale web designer"`
  - Meta: `"Meet Jesse Kranz — 12-year CIO, USAF Captain, Chief AI Officer. Founder-led, senior-only web design and AI services."`
- [ ] **Publish**

### Step 11: Create Work/Portfolio Page
- [ ] **Pages → Add New**
- [ ] Title: **Work**
- [ ] Slug: **work**
- [ ] Copy-paste from [work.html](work.html)
- [ ] Rank Math SEO:
  - Focus Keyword: `"web design portfolio Fort Lauderdale"`
  - Meta: `"Real work. Real results. 8+ active client projects. Page 1 rankings, 300%+ traffic growth, chatbots that convert."`
- [ ] **Publish**

### Step 12: Create AI Services Page (Optional, Day 2)
- [ ] **Pages → Add New**
- [ ] Title: **AI Services**
- [ ] Slug: **ai-services** (or leave until later)
- [ ] Copy-paste from [services-ai.html](services-ai.html)
- [ ] Publish

---

## 🔗 PHASE 5: UPDATE NAVIGATION (15 mins)

### Step 13: Update Main Menu
- [ ] Go to **Appearance → Menus**
- [ ] Edit your **Primary Menu** (or main navigation)
- [ ] **Remove or update:**
  - Old "Services" links
  - Broken anchor links (like `#services`)
- [ ] **Add these links:**
  - Home → `/`
  - Services → `/services/`
  - Work → `/work/`
  - About → `/about/`
  - Pricing → `/pricing/`
  - Contact → `/contact/`
- [ ] Save menu
- [ ] Check site frontend → Navigation should update

### Step 14: Update Homepage
- [ ] Go to **Pages → Home** (or your front page)
- [ ] **Edit** and look for navigation links
- [ ] Update any links pointing to old pages or anchors
- [ ] Update homepage **Rank Math SEO:**
  - Focus Keyword: `"AI services Fort Lauderdale"`
  - Meta: `"AI, SEO, and web design for South Florida business — engineered by a 12-year CIO. We make your business impossible to ignore on Google and beyond."`

---

## ✅ PHASE 6: QA & TESTING (30 mins)

### Step 15: Link Check
- [ ] Click every navigation link on the site
- [ ] Verify all internal links work
- [ ] Test on mobile (use browser dev tools: F12 → device toggle)
- [ ] Check that forms don't error

### Step 16: SEO Check
- [ ] Go to each page
- [ ] Open **Rank Math SEO** plugin on each page
- [ ] Verify:
  - Focus keyword is set ✓
  - Meta description is filled ✓
  - Green checkmark on SEO score
- [ ] If any page shows warning, fix it

### Step 17: Visual Check
- [ ] Homepage looks good
- [ ] All 6 new pages display correctly
- [ ] No broken images or styling
- [ ] Responsive on mobile (use dev tools)

### Step 18: Google Search Console Update
- [ ] Go to **Google Search Console**
- [ ] Go to **Sitemaps**
- [ ] Add new sitemap: `https://smarternerd.com/sitemap.xml`
- [ ] Click **Request Indexing** for new pages
  - `/services/`
  - `/work/`
  - `/about/`
  - `/pricing/`
  - `/contact/`

---

## 🚨 TROUBLESHOOTING (If Something Breaks)

### If page looks broken:
- [ ] Clear browser cache (Ctrl+Shift+Delete)
- [ ] Go to **Kadence Settings → Performance → Clear Cache**
- [ ] Deactivate Jetpack Boost temporarily (can cause conflicts)
- [ ] Try again

### If form submission doesn't work:
- [ ] Contact Form 7 might need **reCAPTCHA** update
- [ ] Go to **Contact Form 7 → Integration → Add Google reCAPTCHA**
- [ ] Or temporarily disable reCAPTCHA on forms

### If you can't paste HTML:
- [ ] Use **Classic Editor** block in Kadence
- [ ] Or install **Code Snippets** plugin
- [ ] Or use **Custom HTML** block in Kadence

### If everything breaks:
- [ ] Go to **Appearance → Themes**
- [ ] Activate **Roboit** theme (your backup)
- [ ] Restore from backup if needed
- [ ] Try again more slowly

---

## 📊 SUCCESS CHECKLIST

By end of day, you should have:

- [ ] Kadence theme installed & activated ✓
- [ ] Elementor deactivated ✓
- [ ] 6 new pages created & published ✓
- [ ] Navigation updated ✓
- [ ] Homepage updated with new nav ✓
- [ ] All links working ✓
- [ ] Mobile responsive ✓
- [ ] Rank Math SEO filled in per page ✓
- [ ] Google Search Console updated ✓

---

## 📝 NOTES

**Keep These Files Handy:**
- `shared-styles.css` — Design system (reference)
- `services-hub.html` — For copying content
- `services-ai.html` — For AI Services page
- `work.html` — For portfolio
- `about.html` — For team page
- `pricing.html` — For pricing
- `contact.html` — For contact

All files are in `/Site/` folder on your computer.

---

## ⏱️ TIME ESTIMATE

| Phase | Task | Time |
|-------|------|------|
| 1 | Backup | 30 min |
| 2 | Install Kadence | 15 min |
| 3 | Disable Elementor | 10 min |
| 4 | Create 6 pages | 2-3 hours |
| 5 | Update navigation | 15 min |
| 6 | QA & testing | 30 min |
| **Total** | | **4-6 hours** |

---

**Questions? Stop at any phase and we can debug together.**

Good luck! 🚀
