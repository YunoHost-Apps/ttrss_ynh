<!--
N.B.: Diese README wurde automatisch von <https://github.com/YunoHost/apps/tree/master/tools/readme_generator> generiert.
Sie darf NICHT von Hand bearbeitet werden.
-->

# Tiny Tiny RSS für YunoHost

[![Integrations-Level](https://apps.yunohost.org/badge/integration/ttrss)](https://ci-apps.yunohost.org/ci/apps/ttrss/)
![Funktionsstatus](https://apps.yunohost.org/badge/state/ttrss)
![Wartungsstatus](https://apps.yunohost.org/badge/maintained/ttrss)

[![Tiny Tiny RSS mit YunoHost installieren](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=ttrss)

*[Dieses README in anderen Sprachen lesen.](./ALL_README.md)*

> *Mit diesem Paket können Sie Tiny Tiny RSS schnell und einfach auf einem YunoHost-Server installieren.*  
> *Wenn Sie YunoHost nicht haben, lesen Sie bitte [die Anleitung](https://yunohost.org/install), um zu erfahren, wie Sie es installieren.*

## Übersicht

Tiny Tiny RSS is a free and open source web-based news feed (RSS/Atom) reader and aggregator.

### Features

- feed aggregation/syndication,
- OPML import/export,
- multiple ways to share stuff: export RSS feeds, plugins for various social sites, sharing by URL, etc,
- Plugins and themes,
- podcasts,
- flexible article filtering


**Ausgelieferte Version:** 2025.03.26~ynh1

**Demo:** <https://demo.tt-rss.org/>

## Bildschirmfotos

![Bildschirmfotos von Tiny Tiny RSS](./doc/screenshots/screenshot.png)

## Dokumentation und Ressourcen

- Offizielle Website der App: <https://tt-rss.org>
- Offizielle Verwaltungsdokumentation: <https://tt-rss.org/wiki.php>
- Upstream App Repository: <https://gitlab.tt-rss.org/tt-rss/tt-rss>
- YunoHost-Shop: <https://apps.yunohost.org/app/ttrss>
- Einen Fehler melden: <https://github.com/YunoHost-Apps/ttrss_ynh/issues>

## Entwicklerinformationen

Bitte senden Sie Ihren Pull-Request an den [`testing` branch](https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing).

Um den `testing` Branch auszuprobieren, gehen Sie bitte wie folgt vor:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
oder
sudo yunohost app upgrade ttrss -u https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
```

**Weitere Informationen zur App-Paketierung:** <https://yunohost.org/packaging_apps>
