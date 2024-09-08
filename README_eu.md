<!--
Ohart ongi: README hau automatikoki sortu da <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>ri esker
EZ editatu eskuz.
-->

# Tiny Tiny RSS YunoHost-erako

[![Integrazio maila](https://dash.yunohost.org/integration/ttrss.svg)](https://ci-apps.yunohost.org/ci/apps/ttrss/) ![Funtzionamendu egoera](https://ci-apps.yunohost.org/ci/badges/ttrss.status.svg) ![Mantentze egoera](https://ci-apps.yunohost.org/ci/badges/ttrss.maintain.svg)

[![Instalatu Tiny Tiny RSS YunoHost-ekin](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=ttrss)

*[Irakurri README hau beste hizkuntzatan.](./ALL_README.md)*

> *Pakete honek Tiny Tiny RSS YunoHost zerbitzari batean azkar eta zailtasunik gabe instalatzea ahalbidetzen dizu.*  
> *YunoHost ez baduzu, kontsultatu [gida](https://yunohost.org/install) nola instalatu ikasteko.*

## Aurreikuspena

Tiny Tiny RSS is a free and open source web-based news feed (RSS/Atom) reader and aggregator.

### Features

- feed aggregation/syndication,
- OPML import/export,
- multiple ways to share stuff: export RSS feeds, plugins for various social sites, sharing by URL, etc,
- Plugins and themes,
- podcasts,
- flexible article filtering


**Paketatutako bertsioa:** 20240831~ynh2

**Demoa:** <https://demo.tt-rss.org/>

## Pantaila-argazkiak

![Tiny Tiny RSS(r)en pantaila-argazkia](./doc/screenshots/screenshot.png)

## Dokumentazioa eta baliabideak

- Aplikazioaren webgune ofiziala: <https://tt-rss.org>
- Administratzaileen dokumentazio ofiziala: <https://tt-rss.org/wiki.php>
- Jatorrizko aplikazioaren kode-gordailua: <https://gitlab.tt-rss.org/tt-rss/tt-rss>
- YunoHost Denda: <https://apps.yunohost.org/app/ttrss>
- Eman errore baten berri: <https://github.com/YunoHost-Apps/ttrss_ynh/issues>

## Garatzaileentzako informazioa

Bidali `pull request`a [`testing` abarrera](https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing).

`testing` abarra probatzeko, ondorengoa egin:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
edo
sudo yunohost app upgrade ttrss -u https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
```

**Informazio gehiago aplikazioaren paketatzeari buruz:** <https://yunohost.org/packaging_apps>
