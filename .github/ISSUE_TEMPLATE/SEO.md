---
name: SEO
about: Checklist
title: ''
labels: ''
assignees: ''

---

### General

- [ ] Stage site **is not** indexed (use site:my.stage.site.com to check)
- [ ] Production site **is not** indexed **before** launch
- [ ] Production site **is** indexed **after** launch
- [ ] Domains w/ _www_ and w/o _www_ are added but only one is used as primary
- [ ] Site domain is set to _live_ value in database after launch (use --network flag for WordPress network)
- [ ] Site domain is set **only** to _www_ or _non-www_ value in database (use --network flag for WordPress network)
- [ ] Install SSL/HTTPS - then check assets are still showing incognito mode (as sometimes they can be cached on CDN and
	problem is not detected)
- [ ] Set correct permalink structure - General advice: /%category%/%postname%/
- [ ] 404 page is added and styled
- [ ] HTML is valid - we can use https://validator.w3.org/
- [ ] Site is mobile friendly (use https://search.google.com/test/mobile-friendly)
- [ ] Site is mobile friendly with content - Content should show in html so Google can index properly (use same tool as
	above)
- [ ] Check structured data at least on main pages (use https://search.google.com/structured-data/testing-tool)
- [ ] Load time - check all templates for acceptable load time (
	use https://developers.google.com/speed/pagespeed/insights/)
- [ ] Setup Google Analytics - depending on environment, possibly one for stage and one for prod
- [ ] Site search in Google Analytics - Make sure internal site search is recorded in Google Analytics
- [ ] Setup Google Tag Manager - depending on environment, possibly one for stage and one for prod
- [ ] Setup Google Search Console - on prod
- [ ] Install WordPress SEO plugin is activated (in priority is Yoast, also possible to use SEOPress etc.)
- [ ] Setup Yoast - if it is being used
- [ ] Check Sitemap - Check all links. Should be status 200 or 301
- [ ] URL redirects - Redirect from old site to new
- [ ] Robots.txt - check setup
- [ ] Install breadcrumbs - optional and depends on designs

### Resources

- [ ] Only fonts that are used are loaded with only needed language and characters set
- [ ] Correct image formats are used
- [ ] Correct image sizes are used
- [ ] Responsive images are used

### Content

- [ ] H1 tag is used only once per page and users can not add more from admin panel
- [ ] Meta description is used - Check meta content (title, meta description, social meta tags, favicon) for all
  templates
- [ ] All external links are opening in new tab or window
- [ ] No duplicate content
- [ ] Canonical url - If duplicate content, canonicalize original content. If not canonicalize the page
- [ ] Index or noindex for different content on prod - Handle settings for pages for categories, tags and archives
- [ ] Hide non-public pages - Check non-public/private pages (should be redirects to Main page)
- [ ] Images have _alt_ attribute **with** value
- [ ] Use WAI-Aria tags to help machines understand your code, if needed
