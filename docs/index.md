---
layout: default
title: Rapport de Laravel
chapitre: true
order: 1
---

# Rapport de Laravel : Créer une base de données pour un blog

## Table des matières
- [Introduction](introduction.md)
- [Problématique](problematique.md)
- [Solution](solution.md)
- [Conclusion](conclusion.md)

## Introduction
Dans ce rapport, nous explorerons la création d'une base de données pour un blog en utilisant Laravel. Nous aborderons les défis et les solutions proposés.

## Sections
{% assign pages = site.pages | sort: "order" %}
{% for page in pages %}
  {% if page.chapitre %}
    <h3>{{ page.title }}</h3>
    {{- page.content | markdownify -}} 
  {% endif %}
{% endfor %}
