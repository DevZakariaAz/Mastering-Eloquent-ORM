---
layout: default
chapitre: true
---

# Rapport de Laravel : Créer une base de données pour un blog

## Table des matières
{% assign pages = site.pages | sort: "order" %}
{% for page in pages %}
  {% if page.chapitre %}
    - {{ page.title }}
  {% endif %}
{% endfor %}


{% assign pages = site.pages | sort: "order" %}
{% for page in pages %}
 {% if page.chapitre %}
    {{- page.content | markdownify -}}
  {% endif %}
{% endfor %}
