<!--
NB: Deze README is automatisch gegenereerd door <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Hij mag NIET handmatig aangepast worden.
-->

# Tiny Tiny RSS voor Yunohost

[![Integratieniveau](https://dash.yunohost.org/integration/ttrss.svg)](https://ci-apps.yunohost.org/ci/apps/ttrss/) ![Mate van functioneren](https://ci-apps.yunohost.org/ci/badges/ttrss.status.svg) ![Onderhoudsstatus](https://ci-apps.yunohost.org/ci/badges/ttrss.maintain.svg)

[![Tiny Tiny RSS met Yunohost installeren](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=ttrss)

*[Deze README in een andere taal lezen.](./ALL_README.md)*

> *Met dit pakket kun je Tiny Tiny RSS snel en eenvoudig op een YunoHost-server installeren.*  
> *Als je nog geen YunoHost hebt, lees dan [de installatiehandleiding](https://yunohost.org/install), om te zien hoe je 'm installeert.*

## Overzicht

Tiny Tiny RSS is a free and open source web-based news feed (RSS/Atom) reader and aggregator.

### Features

- feed aggregation/syndication,
- OPML import/export,
- multiple ways to share stuff: export RSS feeds, plugins for various social sites, sharing by URL, etc,
- Plugins and themes,
- podcasts,
- flexible article filtering


**Geleverde versie:** 20241010~ynh1

**Demo:** <https://demo.tt-rss.org/>

## Schermafdrukken

![Schermafdrukken van Tiny Tiny RSS](./doc/screenshots/screenshot.png)

## Documentatie en bronnen

- Officiele website van de app: <https://tt-rss.org>
- Officiele beheerdersdocumentatie: <https://tt-rss.org/wiki.php>
- Upstream app codedepot: <https://gitlab.tt-rss.org/tt-rss/tt-rss>
- YunoHost-store: <https://apps.yunohost.org/app/ttrss>
- Meld een bug: <https://github.com/YunoHost-Apps/ttrss_ynh/issues>

## Ontwikkelaarsinformatie

Stuur je pull request alsjeblieft naar de [`testing`-branch](https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing).

Om de `testing`-branch uit te proberen, ga als volgt te werk:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
of
sudo yunohost app upgrade ttrss -u https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
```

**Verdere informatie over app-packaging:** <https://yunohost.org/packaging_apps>
