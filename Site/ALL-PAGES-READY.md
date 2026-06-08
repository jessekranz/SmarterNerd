# SmarterNerd — Complete Page HTML Library

All pages are ready to paste into WordPress Custom HTML blocks. Use the **-wp.html** files (WordPress-safe, no style/script tags).

---

## **MAIN PAGES (Ready to Use)**

| Page | URL | File | Status |
|------|-----|------|--------|
| Homepage | `/` | `homepage-body-wp.html` | ✅ Complete |
| Services Hub | `/services/` | `services-hub-body-wp.html` | ✅ Complete |
| Contact | `/contact/` | `contact-body-clean-wp.html` | ✅ Complete |
| Pricing | `/pricing/` | `pricing-body-clean-wp.html` | ✅ Complete |
| About | `/about/` | `about-body-clean-wp.html` | ✅ Complete |
| Portfolio/Our Work | `/portfolio/` | `portfolio-body-clean-wp.html` | ✅ Complete |

---

## **SERVICE DETAIL PAGES (9 Total)**

All service pages use the same template structure. Copy `service-template-body-wp.html` and customize for each service.

### Service Pages to Create:

| Service | URL | File to Use |
|---------|-----|------------|
| Responsive Web Design | `/responsive-web-design/` | `service-template-body-wp.html` |
| Social Media | `/social-media/` | `service-template-body-wp.html` |
| SEO & Optimization | `/search-engine-opimization/` | `service-template-body-wp.html` |
| Google Analytics | `/google-analytics/` | `service-template-body-wp.html` |
| Google Maps Listing | `/google-maps-listing/` | `service-template-body-wp.html` |
| QR Codes | `/qr-codes/` | `service-template-body-wp.html` |
| Software & Hardware Consulting | `/software-hardware-consulting/` | `service-template-body-wp.html` |
| Virtual Tours & 3D | `/virtual-tours-3d-models-floorplans/` | `service-template-body-wp.html` |
| Oracle DBA | `/oracle-dba/` | `service-template-body-wp.html` |

---

## **HOW TO IMPLEMENT**

### For Main Pages:

1. **Go to WordPress → Pages → [Page Name]**
2. **Edit the existing page** (or create new for Pricing/Services Hub)
3. **Delete all old content**
4. **Add a Custom HTML block**
5. **Copy entire content from the -wp.html file**
6. **Paste into WordPress**
7. **Update Rank Math SEO** (see suggestions below)
8. **Publish**

### For Service Pages:

1. **Go to WordPress → Pages → [Service Name]**
2. **Edit the page** (if exists) **or Create New**
3. **Add a Custom HTML block**
4. **Copy `service-template-body-wp.html`**
5. **Customize the placeholders:**
   - `[SERVICE CATEGORY]` → e.g., "Web Design"
   - `[SERVICE TITLE]` → e.g., "Fast, Mobile-First Websites"
   - `[KEY BENEFIT]` → e.g., "That Convert"
   - `[Question 1-6]` → Replace with actual FAQs for this service
   - Pricing tiers and benefits
6. **Paste into WordPress**
7. **Update Rank Math SEO**
8. **Publish**

---

## **SEO SETUP (Rank Math)**

### Homepage
- **Focus Keyword:** `AI web design SEO Fort Lauderdale`
- **Meta Description:** `AI, SEO & web design for South Florida. Engineered by a 12-year CIO. We make your business unmissable on Google.`

### Services Hub
- **Focus Keyword:** `web design services Fort Lauderdale`
- **Meta Description:** `Complete web design, SEO, AI, and automation services. All from one partner. No hand-offs. Senior-only team.`

### Contact
- **Focus Keyword:** `contact Fort Lauderdale web design`
- **Meta Description:** `Free consultation with Jesse. No sales pitch. Book a call or email directly. Available for same-week meetings.`

### Pricing
- **Focus Keyword:** `web design pricing Fort Lauderdale`
- **Meta Description:** `Transparent pricing for web design, AI, and SEO. No hidden fees. Month-to-month or annual billing with 15% savings.`

### About
- **Focus Keyword:** `Fort Lauderdale web designer`
- **Meta Description:** `Meet Jesse Kranz — 12-year CIO, USAF Captain, Chief AI Officer. Founder-led, senior-only web design and AI services.`

### Portfolio/Our Work
- **Focus Keyword:** `web design portfolio Fort Lauderdale`
- **Meta Description:** `Real work. Real results. 8+ active client projects. Page 1 rankings, 300%+ traffic growth, AI chatbots that convert.`

### Service Pages (Customize Per Service)
- **Focus Keyword:** `[service name] Fort Lauderdale` (e.g., `SEO services Fort Lauderdale`)
- **Meta Description:** Short 1-2 line description of the specific service + South Florida location

---

## **CSS & STYLING**

All HTML files reference CSS variables from `neonspec-styles.css` which is already loaded globally in your theme.

**DO NOT include `<style>` or `<script>` tags** in WordPress Custom HTML blocks — they cause JSON errors.

The inline styles in these files are optional and can be added to your theme's custom CSS if you need them.

---

## **IMPLEMENTATION ORDER (Recommended)**

1. ✅ **Homepage** — High visibility, show off the redesign
2. ✅ **Services Hub** — Hub page linking to all services
3. ✅ **Contact** — Already live, update it
4. ✅ **Pricing** — New page, easy win
5. ✅ **About** — Already done (founder story)
6. ✅ **Portfolio/Our Work** — Already done (case studies)
7. ⏳ **Service Pages** — One by one, customize each with service-specific content

---

## **QUICK REFERENCE**

All files are in `/Site/` folder:

```
✅ homepage-body-wp.html
✅ services-hub-body-wp.html
✅ contact-body-clean-wp.html
✅ pricing-body-clean-wp.html
✅ about-body-clean-wp.html
✅ portfolio-body-clean-wp.html
✅ service-template-body-wp.html (use this for all 9 service pages)
```

---

## **NOTES**

- All files are HTML-only (no `<style>` or `<script>` tags)
- All CSS uses variables already defined in `neonspec-styles.css`
- All links are pre-configured but feel free to customize
- Mobile responsive breakpoints included
- Interactive elements (FAQs, accordions) work via inline JavaScript
- Progress bar tracking works via scroll listener

---

**Ready to ship!** 🚀

Copy, paste, customize, publish. Same process for every page.
