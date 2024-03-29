<!--
N.B.: Questo README è stato automaticamente generato da <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
NON DEVE essere modificato manualmente.
-->

# Tiny Tiny RSS per YunoHost

[![Livello di integrazione](https://dash.yunohost.org/integration/ttrss.svg)](https://dash.yunohost.org/appci/app/ttrss) ![Stato di funzionamento](https://ci-apps.yunohost.org/ci/badges/ttrss.status.svg) ![Stato di manutenzione](https://ci-apps.yunohost.org/ci/badges/ttrss.maintain.svg)

[![Installa Tiny Tiny RSS con YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=ttrss)

*[Leggi questo README in altre lingue.](./ALL_README.md)*

> *Questo pacchetto ti permette di installare Tiny Tiny RSS su un server YunoHost in modo semplice e veloce.*  
> *Se non hai YunoHost, consulta [la guida](https://yunohost.org/install) per imparare a installarlo.*

## Panoramica

Tiny Tiny RSS is a free and open source web-based news feed (RSS/Atom) reader and aggregator.

### Features

- feed aggregation/syndication,
- OPML import/export,
- multiple ways to share stuff: export RSS feeds, plugins for various social sites, sharing by URL, etc,
- Plugins and themes,
- podcasts,
- flexible article filtering


**Versione pubblicata:** 20231202~ynh3

**Prova:** <https://demo.tt-rss.org/>

## Screenshot

![Screenshot di Tiny Tiny RSS](./doc/screenshots/screenshot.png)

## Documentazione e risorse

- Sito web ufficiale dell’app: <https://tt-rss.org>
- Documentazione ufficiale per gli amministratori: <https://tt-rss.org/wiki.php>
- Repository upstream del codice dell’app: <https://gitlab.tt-rss.org/tt-rss/tt-rss>
- Store di YunoHost: <https://apps.yunohost.org/app/ttrss>
- Segnala un problema: <https://github.com/YunoHost-Apps/ttrss_ynh/issues>

## Informazioni per sviluppatori

Si prega di inviare la tua pull request alla [branch di `testing`](https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing).

Per provare la branch di `testing`, si prega di procedere in questo modo:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
o
sudo yunohost app upgrade ttrss -u https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
```

**Maggiori informazioni riguardo il pacchetto di quest’app:** <https://yunohost.org/packaging_apps>
