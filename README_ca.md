<!--
N.B.: Aquest README ha estat generat automàticament per <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
NO s'ha de modificar manualment.
-->

# Tiny Tiny RSS per YunoHost

[![Nivell d'integració](https://apps.yunohost.org/badge/integration/ttrss)](https://ci-apps.yunohost.org/ci/apps/ttrss/)
![Estat de funcionament](https://apps.yunohost.org/badge/state/ttrss)
![Estat de manteniment](https://apps.yunohost.org/badge/maintained/ttrss)

[![Instal·la Tiny Tiny RSS amb YunoHosth](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=ttrss)

*[Llegeix aquest README en altres idiomes.](./ALL_README.md)*

> *Aquest paquet et permet instal·lar Tiny Tiny RSS de forma ràpida i senzilla en un servidor YunoHost.*  
> *Si no tens YunoHost, consulta [la guia](https://yunohost.org/install) per saber com instal·lar-lo.*

## Visió general

Tiny Tiny RSS is a free and open source web-based news feed (RSS/Atom) reader and aggregator.

### Features

- feed aggregation/syndication,
- OPML import/export,
- multiple ways to share stuff: export RSS feeds, plugins for various social sites, sharing by URL, etc,
- Plugins and themes,
- podcasts,
- flexible article filtering


**Versió inclosa:** 2025.03.26~ynh1

**Demo:** <https://demo.tt-rss.org/>

## Captures de pantalla

![Captures de pantalla de Tiny Tiny RSS](./doc/screenshots/screenshot.png)

## Documentació i recursos

- Lloc web oficial de l'aplicació: <https://tt-rss.org>
- Documentació oficial per l'administrador: <https://tt-rss.org/wiki.php>
- Repositori oficial del codi de l'aplicació: <https://gitlab.tt-rss.org/tt-rss/tt-rss>
- Botiga YunoHost: <https://apps.yunohost.org/app/ttrss>
- Reportar un error: <https://github.com/YunoHost-Apps/ttrss_ynh/issues>

## Informació per a desenvolupadors

Envieu les pull request a la [branca `testing`](https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing).

Per provar la branca `testing`, procedir com descrit a continuació:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
o
sudo yunohost app upgrade ttrss -u https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
```

**Més informació sobre l'empaquetatge d'aplicacions:** <https://yunohost.org/packaging_apps>
