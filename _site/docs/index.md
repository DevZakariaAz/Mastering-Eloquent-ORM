---
layout: report_layout
title: "Rapport : Maîtrise d'Eloquent ORM dans Laravel"
---

{% assign pages = site.pages | sort: "order" %}
{% for page in pages %}
{% if page.chapitre %}
{{ page.content | markdownify }}
{% endif %}
{% endfor %}