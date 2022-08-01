---
name: SEO after changes
about: Checklist for testing after adding changes on site. Need to check only points that were changed and related
points.
title: ''
labels: ''
assignees: ''

---

### General

- [ ] Production site **is** indexed **after** launch
- [ ] HTML is valid - we can use https://validator.w3.org/
- [ ] Site is mobile friendly (use https://search.google.com/test/mobile-friendly)
- [ ] Site is mobile friendly with content - Content should show in html so Google can index properly (use same tool as
	above)
- [ ] Check structured data at least on main pages (use https://search.google.com/structured-data/testing-tool)
- [ ] Load time - check all templates for acceptable load time (
	use https://developers.google.com/speed/pagespeed/insights/)

### Resources

- [ ] Only fonts that are used are loaded with only needed language and characters set
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
- [ ] Use WAI-Aria tags to help machines understand your code, if needed
