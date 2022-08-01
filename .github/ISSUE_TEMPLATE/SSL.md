---
name: SSL
about: Checklist
title: ''
labels: ''
assignees: ''

---

- [ ] Install certificate on server - please check certificate for www and non - www
- [ ] Change **Siteurl**
- [ ] Change **Home**
- [ ] Change **Site Address (URL)** in network
- [ ] Search-replace all URLs in database (use --network flag for WordPress network)
- [ ] Check assets are showing (there are times when they are cached on CDN and the problem is not detected immediately)
