# WordPress Template Setup for SmarterNerd Custom Pages

## Overview

These custom header and footer templates eliminate duplicate code across your pages. Update navigation, links, or branding in **one place** — it updates everywhere automatically.

---

## Files Included

- **header-custom.php** — Custom header with progress bar and navigation
- **footer-custom.php** — Custom footer with navigation and scripts
- **page-custom.php** — Page template (you'll create this)

---

## Installation Steps

### Step 1: Copy Files to Kadence Child Theme

1. Log into **Cloudways** → **File Manager**
2. Navigate to: `/wp-content/themes/kadence-child/`
3. Upload the two files:
   - `header-custom.php`
   - `footer-custom.php`

**Or via SFTP:**
- Connect to your Cloudways server via SFTP
- Navigate to `/wp-content/themes/kadence-child/`
- Upload both files

### Step 2: Create the Page Template

In your Kadence Child Theme folder, create a new file: **`page-custom.php`**

**Content for page-custom.php:**
```php
<?php
/**
 * Template Name: Custom Full Width (Neonspec)
 * Description: Full-width page template for custom neonspec pages
 * 
 * @package Kadence_Child_SmarterNerd
 */

get_header( 'custom' );

// Display page content
while ( have_posts() ) :
    the_post();
    the_content();
endwhile;

get_footer( 'custom' );
?>
```

Save this file in `/wp-content/themes/kadence-child/page-custom.php`

### Step 3: Create CSS File (Optional but Recommended)

Create: **`neonspec-styles.css`** in `/wp-content/themes/kadence-child/`

Copy all the CSS from your HTML files' `<style>` sections into this file. This keeps styles in one place.

---

## How to Use for Each Page

### For Services Hub Page:

1. **Create Page:**
   - Go to **Pages → Add New**
   - Title: "Services"
   - Slug: "services"

2. **Select Template:**
   - On the right sidebar, find **"Template"** dropdown
   - Select: **"Custom Full Width (Neonspec)"**
   - This automatically uses your header-custom.php and footer-custom.php

3. **Add Content:**
   - In page editor, add a **Custom HTML block**
   - Paste **ONLY the body content** (not header/footer)
   - From: `<div class="progress"></div>` to before `<footer>`
   - **Skip the header and footer** — they're now in the template

4. **Set SEO:**
   - Add Rank Math meta description
   - Set focus keyword
   - Publish

5. **Repeat for other pages:**
   - Services Hub
   - Contact
   - Pricing
   - About
   - Work

---

## Content to Paste for Each Page

### Services Hub
**Start:** `<div class="progress"></div>`
**End:** (stop before `<footer>`)
**Includes:** Hero, Services Grid, How It Works, Testimonial, CTA

### Contact Page
**Start:** `<div class="progress"></div>`
**End:** (stop before `<footer>`)
**Includes:** Hero, Contact Form, Contact Info, Service Shortcuts, FAQ, CTA

### Pricing Page
**Start:** `<div class="progress"></div>`
**End:** (stop before `<footer>`)
**Includes:** Hero, Billing Toggle, Pricing Tabs, ROI Calculator, FAQ, CTA

### About Page
**Start:** `<div class="progress"></div>`
**End:** (stop before `<footer>`)
**Includes:** Hero, Founder Story, Timeline, Philosophy, Testimonials, CTA

### Work Page
**Start:** `<div class="progress"></div>`
**End:** (stop before `<footer>`)
**Includes:** Hero, Stats, Portfolio Grid, Featured Case Study, CTA

---

## Maintaining Header/Footer Updates

### To Update Navigation:
Edit `/wp-content/themes/kadence-child/header-custom.php` — all pages update automatically.

### To Update Footer Links:
Edit `/wp-content/themes/kadence-child/footer-custom.php` — all pages update automatically.

### To Change Styling:
Update `/wp-content/themes/kadence-child/neonspec-styles.css` — applies to all pages.

---

## Advantages

✅ Single source of truth for header/footer  
✅ Navigation updates in one place  
✅ Email changes (footer) update everywhere  
✅ Consistent branding across all pages  
✅ Easy to maintain long-term  
✅ Professional WordPress practices  
✅ SEO-friendly (proper hooks: wp_head(), wp_footer())  

---

## Troubleshooting

### Template doesn't show up in dropdown:
- Clear browser cache (Ctrl+Shift+Delete)
- Go to **Appearance → Themes** and refresh
- Try creating a new page

### Header/Footer styles look wrong:
- Make sure `neonspec-styles.css` is uploaded
- Clear Kadence cache: **Kadence Settings → Performance → Clear Cache**
- Hard refresh browser (Ctrl+Shift+R)

### Navigation links not working:
- Verify page slugs match links in header-custom.php
- Check URLs use `home_url()` function (already done)

---

## File Locations Summary

```
/wp-content/themes/kadence-child/
├── style.css (existing)
├── functions.php (existing)
├── header-custom.php (NEW)
├── footer-custom.php (NEW)
├── page-custom.php (NEW)
└── neonspec-styles.css (NEW - optional but recommended)
```

---

## Next Steps

1. Upload the two PHP files to your Kadence Child Theme folder
2. Create the page-custom.php file
3. For each page, select "Custom Full Width (Neonspec)" template
4. Paste only the body content (no header/footer)
5. Done — header and footer are automatic!

This approach scales beautifully — add 10 more pages with zero duplication. 🚀
