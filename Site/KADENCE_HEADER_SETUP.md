# Kadence Header Setup — SmarterNerd Neonspec

## Complete Header Configuration

This guide walks you through setting up the custom Kadence header with the neonspec dark theme.

---

## **Desktop Layout Code**

Go to: **Appearance → Kadence → Manage Headers → Edit Header → Desktop Layout**

**Replace everything with this:**

```html
<!-- wp:kadence/header-section {"uniqueID":"smarternerd_header_1","location":"left","metadata":{"name":"Left Section"}} -->
<!-- wp:kadence/header-column {"uniqueID":"smarternerd_left_col","location":"left","metadata":{"name":"Left"}} -->
<!-- wp:kadence/identity {"uniqueID":"smarternerd_identity","showSiteTitle":false,"layout":"logo-only"} -->
<!-- wp:site-logo {"width":80,"isLink":true,"style":{"spacing":{"margin":{"right":"var:preset|spacing|40"}}}} /-->
<!-- /wp:kadence/identity -->
<!-- /wp:kadence/header-column -->
<!-- /wp:kadence/header-section -->

<!-- wp:kadence/header-section {"uniqueID":"smarternerd_header_2","location":"center","metadata":{"name":"Center Section"}} -->
<!-- wp:kadence/header-column {"uniqueID":"smarternerd_center_col","location":"center","metadata":{"name":"Center"}} -->
<!-- wp:kadence/navigation {"uniqueID":"smarternerd_nav","templateKey":"short"} /-->
<!-- /wp:kadence/header-column -->
<!-- /wp:kadence/header-section -->

<!-- wp:kadence/header-section {"uniqueID":"smarternerd_header_3","location":"right","metadata":{"name":"Right Section"}} -->
<!-- wp:kadence/header-column {"uniqueID":"smarternerd_right_col","location":"right","metadata":{"name":"Right"}} -->
<!-- wp:kadence/advancedbtn {"uniqueID":"smarternerd_cta_btn"} -->
<div class="wp-block-kadence-advancedbtn kb-buttons-wrap kb-btns-smarternerd_cta_btn"><!-- wp:kadence/singlebtn {"uniqueID":"smarternerd_btn_main","text":"Get Started →","sizePreset":"small","color":"#08080C","background":"#00E5FF","colorHover":"#08080C","backgroundHover":"#4D6EFF","typography":[{"size":["0.6","",""],"sizeType":"rem","lineHeight":["","",""],"lineType":"","letterSpacing":"0.12","letterType":"em","textTransform":"uppercase","family":"JetBrains Mono","google":false,"style":"","weight":"500","variant":"","subset":"","loadGoogle":false}]} /--></div>
<!-- /wp:kadence/advancedbtn -->
<!-- /wp:kadence/header-column -->
<!-- /wp:kadence/header-section -->
```

**What this does:**
- Logo on left (80px, clickable)
- Navigation menu in center
- "Get Started →" button on right (cyan background, dark text, uppercase)

---

## **Mobile/Tablet Layout Code**

Go to: **Appearance → Kadence → Manage Headers → Edit Header → Mobile Layout**

**Replace everything with this:**

```html
<!-- wp:kadence/header-section {"uniqueID":"smarternerd_mobile_1","location":"left","metadata":{"name":"Left Section"}} -->
<!-- wp:kadence/header-column {"uniqueID":"smarternerd_mobile_left","location":"left","metadata":{"name":"Left"}} -->
<!-- wp:kadence/identity {"uniqueID":"smarternerd_mobile_identity","showSiteTitle":false,"layout":"logo-only"} -->
<!-- wp:site-logo {"width":60,"isLink":true,"style":{"spacing":{"margin":{"right":"var:preset|spacing|20"}}}} /-->
<!-- /wp:kadence/identity -->
<!-- /wp:kadence/header-column -->
<!-- /wp:kadence/header-section -->

<!-- wp:kadence/header-section {"uniqueID":"smarternerd_mobile_2","location":"right","metadata":{"name":"Right Section"}} -->
<!-- wp:kadence/header-column {"uniqueID":"smarternerd_mobile_right","location":"right","metadata":{"name":"Right"}} -->
<!-- wp:kadence/advancedbtn {"uniqueID":"smarternerd_mobile_cta"} -->
<div class="wp-block-kadence-advancedbtn kb-buttons-wrap kb-btns-smarternerd_mobile_cta"><!-- wp:kadence/singlebtn {"uniqueID":"smarternerd_mobile_btn","text":"Get Started","sizePreset":"small","color":"#08080C","background":"#00E5FF","colorHover":"#08080C","backgroundHover":"#4D6EFF","typography":[{"size":["0.55","",""],"sizeType":"rem","lineHeight":["","",""],"lineType":"","letterSpacing":"0.1","letterType":"em","textTransform":"uppercase","family":"JetBrains Mono","google":false,"style":"","weight":"500","variant":"","subset":"","loadGoogle":false}]} /--></div>
<!-- /wp:kadence/advancedbtn -->
<!-- /wp:kadence/header-column -->
<!-- /wp:kadence/header-section -->
```

**What this does:**
- Logo on left (60px, clickable)
- "Get Started" button on right (smaller text)
- Navigation menu hidden (shows as hamburger icon automatically)

---

## **Header Styling**

Go to: **Appearance → Kadence → Manage Headers → Edit Header → Header Settings**

**Set these values:**

| Setting | Value |
|---------|-------|
| Background Color | `#08080C` (dark neonspec) |
| Text Color | `#F5F7FA` (off-white) |
| Sticky Header | **Enabled** |
| Header Height | Default (auto) |
| Transparency | 95% opacity (slight transparency) |

---

## **Assign Header to Pages**

Once you've saved the header:

1. Go to **Pages → Services** (or any custom page)
2. Scroll down → **Page Settings** (right sidebar)
3. Find **Header** dropdown
4. Select **"SmarterNerd - Neonspec"**
5. Update page
6. Repeat for: Contact, Pricing, About, Work pages

---

## **Colors Reference**

- **Background:** `#08080C` (dark)
- **Text:** `#F5F7FA` (off-white)
- **Button Background:** `#00E5FF` (cyan)
- **Button Hover:** `#4D6EFF` (electric blue)
- **Button Text:** `#08080C` (dark)

---

## **What You Get**

✅ **Desktop:**
- Logo (80px) | Navigation | Get Started → button
- Dark background, cyan accents
- All links clickable

✅ **Mobile:**
- Logo (60px) | Get Started button
- Navigation hidden in hamburger menu
- Responsive and touch-friendly

✅ **Features:**
- Sticky positioning (stays at top on scroll)
- Neonspec color scheme
- Monospace button text (uppercase)
- Consistent across all pages

---

## **Troubleshooting**

**Logo not showing?**
- Make sure you've set a site logo in WordPress → Appearance → Customize → Site Identity

**Navigation menu empty?**
- Go to Appearance → Menus
- Create a menu with: Home, Services, Work, About, Pricing
- Set it as "Primary Menu"

**Button color wrong?**
- Make sure you copied the exact color codes (with #)
- Clear browser cache after saving

**Header not showing on page?**
- Make sure you assigned the header in Page Settings
- Refresh the page

---

## **Next Steps**

1. ✅ Paste Desktop Layout code
2. ✅ Paste Mobile Layout code
3. ✅ Set Header Styling colors
4. ✅ Save header
5. ✅ Assign to Services page
6. ✅ Test on desktop and mobile
7. ✅ Assign to remaining pages (Contact, Pricing, About, Work)

**Once done, all your pages will have the same professional neonspec header!** 🚀
