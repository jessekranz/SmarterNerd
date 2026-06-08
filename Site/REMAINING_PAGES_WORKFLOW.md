# Build Remaining Pages — Complete Workflow

You're on the final stretch! Update existing pages + create 1 new = complete site redesign.

---

## **Quick Summary:**

**For EXISTING pages** (Contact, About, Portfolio):
1. Edit the existing page
2. Delete old content
3. Copy the **body HTML** (no header, footer, or styles)
4. Paste into a Custom HTML block
5. Update Rank Math SEO data
6. Publish (keeps same slug = preserves SEO)

**For NEW pages** (Pricing):
1. Create a new page
2. Copy the **body HTML**
3. Paste into a Custom HTML block
4. Add Rank Math SEO data
5. Publish

**Estimated time:** 10-15 min per page = ~1 hour total for all 4

---

## **PAGE 1: CONTACT** (EXISTING PAGE - EDIT IT)

### Edit the Existing Page
- Go to **Pages → Contact** (click Edit)
- Keep the same slug: `/contact/`
- **This preserves your SEO ranking!**

### Copy the HTML Body
**Open:** `contact-body-clean-wp.html` from your `/Site/` folder

**What's included:** HTML only (no style or script tags — those are already loaded globally)
**Copy:** Everything in the file

**What's included:**
- Progress bar
- Hero section ("Book a free consultation")
- Contact form (Contact Form 7)
- Contact info cards (email, location, hours, Calendly)
- Service shortcuts (jump links)
- 8-item expandable FAQ
- Final CTA ("Schedule Consultation")

### Add to WordPress
1. Create page
2. Add **Custom HTML** block
3. Paste the body HTML
4. Click outside to preview

### Add Rank Math SEO
- **Focus Keyword:** `"contact Fort Lauderdale web design"`
- **Meta Description:** `"Free consultation with Jesse. No sales pitch. Book a call or email directly. Available for same-week meetings."`

### Publish ✅

---

## **PAGE 2: PRICING** (NEW PAGE - CREATE IT)

### Create a New Page
- **Title:** Pricing
- **Slug:** pricing
- **Template:** Default (not Custom Full Width)

### Copy the HTML Body
**Open:** `pricing-body-clean-wp.html` from your `/Site/` folder

**What's included:** HTML only (no style or script tags — those are already loaded globally)
**Copy:** Everything in the file

**What's included:**
- Progress bar
- Hero section ("Transparent pricing")
- **Billing toggle** (Monthly/Annual with 15% savings)
- **4 Service category tabs** (Web Design, AI Services, SEO & Maps, À La Carte)
- **Dynamic pricing cards** (auto-calculates with toggle)
- Interactive ROI calculator
- 8-item expandable FAQ
- Transparency section (what's included/excluded)
- Final CTA

### Add to WordPress
1. Create page
2. Add **Custom HTML** block
3. Paste the body HTML
4. Click outside to preview

### Add Rank Math SEO
- **Focus Keyword:** `"web design pricing Fort Lauderdale"`
- **Meta Description:** `"Transparent pricing for web design, AI, and SEO. No hidden fees. Month-to-month or annual billing with 15% savings."`

### Publish ✅

---

## **PAGE 3: ABOUT** (EXISTING PAGE - EDIT IT)

### Edit the Existing Page
- Go to **Pages → About** (click Edit)
- Keep the same slug: `/about/`
- **This preserves your SEO ranking!**

### Copy the HTML Body
**Open:** `about-body-clean-wp.html` from your `/Site/` folder

**What's included:** HTML only (no style or script tags — those are already loaded globally)
**Copy:** Everything in the file

**What's included:**
- Progress bar
- Hero section (Jesse's story)
- 4 credential badges (12-yr CIO, USAF Captain, TS/SCI, Chief AI Officer)
- 5-milestone timeline (2012 → 2026)
- 3 core philosophy principles
- 4 client testimonials
- Final CTA

### Add to WordPress
1. Create page
2. Add **Custom HTML** block
3. Paste the body HTML
4. Click outside to preview

### Add Rank Math SEO
- **Focus Keyword:** `"Fort Lauderdale web designer"`
- **Meta Description:** `"Meet Jesse Kranz — 12-year CIO, USAF Captain, Chief AI Officer. Founder-led, senior-only web design and AI services for South Florida."`

### Publish ✅

---

## **PAGE 4: PORTFOLIO** (EXISTING PAGE - EDIT IT)

### Edit the Existing Page
- Go to **Pages → Portfolio** (click Edit)
- Keep the same slug: `/portfolio/`
- **This preserves your SEO ranking!**

### Copy the HTML Body
**Open:** `portfolio-body-clean-wp.html` from your `/Site/` folder

**What's included:** HTML only (no style or script tags — those are already loaded globally)
**Copy:** Everything in the file

**What's included:**
- Progress bar
- Hero section
- Aggregate stats (8+ projects, 312% avg traffic growth, Page 1 rankings)
- **Filterable portfolio grid** (6 sample projects by industry)
- Featured Charles Hawkins Law case study (detailed results)
- 3 client testimonials
- Final CTA

### Delete Old Content & Add New
1. Select all old content and delete it
2. Add **Custom HTML** block
3. Paste the new body HTML
4. Click outside to preview

### Add Rank Math SEO
- **Focus Keyword:** `"web design portfolio Fort Lauderdale"`
- **Meta Description:** `"Real work. Real results. 8+ active client projects. Page 1 rankings, 300%+ traffic growth, AI chatbots that convert."`

### Publish ✅

---

## **Step-by-Step for Each Page:**

### 1️⃣ Create Page
```
WordPress Admin → Pages → Add New
Title: [From above]
Slug: [From above - lowercase, no spaces]
Template: Default
```

### 2️⃣ Copy HTML Body
```
Open file: [From above - contact-body-clean-wp.html, etc.]
Select: Everything in the file (it's already clean!)
Copy to clipboard
```

### 3️⃣ Paste into WordPress
```
In page editor:
- Click "+" button
- Search "Custom HTML"
- Click it
- Paste your HTML
- Click outside to preview
```

### 4️⃣ Add Rank Math SEO
```
Scroll down → Rank Math SEO
Focus Keyword: [From above]
Meta Description: [From above]
Check for green checkmark
```

### 5️⃣ Publish
```
Click blue "Publish" button
Wait for confirmation
View page to test
```

---

## **All 4 Pages Summary**

| Page | Slug | Status | File | Focus Keyword |
|------|------|--------|------|---|
| Contact | /contact/ | EDIT existing | contact-body-clean-wp.html | contact Fort Lauderdale web design |
| Pricing | /pricing/ | CREATE new | pricing-body-clean-wp.html | web design pricing Fort Lauderdale |
| About | /about/ | EDIT existing | about-body-clean-wp.html | Fort Lauderdale web designer |
| Portfolio | /portfolio/ | EDIT existing | portfolio-body-clean-wp.html | web design portfolio Fort Lauderdale |

---

## **Files You Need**

All files are in your `/Site/` folder (use the `-wp.html` versions):
- ✅ `contact-body-clean-wp.html` — Use this one!
- ✅ `pricing-body-clean-wp.html` — Use this one!
- ✅ `about-body-clean-wp.html` — Use this one!
- ✅ `portfolio-body-clean-wp.html` — Use this one!

**Why the -wp versions?**
- No `<style>` or `<script>` tags (WordPress doesn't like them in Custom HTML blocks)
- Just pure HTML content
- CSS is already loaded globally (neonspec-styles.css)
- JavaScript (progress bar, accordions) is optional and can be added via Code Snippets plugin later

---

## **Testing**

After each page publishes:
1. **View the page** (click "View Page" link)
2. **Check on mobile** (press F12 → toggle device)
3. **Test all links** (navigation, CTAs, footer)
4. **Verify colors & styling** (dark background, cyan accents)

---

## **You're Almost Done!**

✅ Services page — LIVE (`/services/`)
⏳ Contact page — EDIT existing (`/contact/`)
⏳ Pricing page — CREATE new (`/pricing/`)
⏳ About page — EDIT existing (`/about/`)
⏳ Portfolio page — EDIT existing (`/portfolio/`)

**IMPORTANT: Editing existing pages keeps your SEO rankings!**

**1 hour of work and your complete redesigned site is live!** 🚀

---

## **Questions?**

If you get stuck on any page:
1. Use the **-wp.html files** (not the -clean.html files)
2. Make sure you're pasting into a **Custom HTML block**
3. Copy the **entire file content** (it's already cleaned)
4. If you get "not a valid JSON response" error → you're using the wrong file (use -wp.html)

**Go for it!** Let me know when you're done! 💪
