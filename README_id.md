<!--
N.B.: README ini dibuat secara otomatis oleh <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Ini TIDAK boleh diedit dengan tangan.
-->

# Tiny Tiny RSS untuk YunoHost

[![Tingkat integrasi](https://dash.yunohost.org/integration/ttrss.svg)](https://ci-apps.yunohost.org/ci/apps/ttrss/) ![Status kerja](https://ci-apps.yunohost.org/ci/badges/ttrss.status.svg) ![Status pemeliharaan](https://ci-apps.yunohost.org/ci/badges/ttrss.maintain.svg)

[![Pasang Tiny Tiny RSS dengan YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=ttrss)

*[Baca README ini dengan bahasa yang lain.](./ALL_README.md)*

> *Paket ini memperbolehkan Anda untuk memasang Tiny Tiny RSS secara cepat dan mudah pada server YunoHost.*  
> *Bila Anda tidak mempunyai YunoHost, silakan berkonsultasi dengan [panduan](https://yunohost.org/install) untuk mempelajari bagaimana untuk memasangnya.*

## Ringkasan

Tiny Tiny RSS is a free and open source web-based news feed (RSS/Atom) reader and aggregator.

### Features

- feed aggregation/syndication,
- OPML import/export,
- multiple ways to share stuff: export RSS feeds, plugins for various social sites, sharing by URL, etc,
- Plugins and themes,
- podcasts,
- flexible article filtering


**Versi terkirim:** 20241106~ynh1

**Demo:** <https://demo.tt-rss.org/>

## Tangkapan Layar

![Tangkapan Layar pada Tiny Tiny RSS](./doc/screenshots/screenshot.png)

## Dokumentasi dan sumber daya

- Website aplikasi resmi: <https://tt-rss.org>
- Dokumentasi admin resmi: <https://tt-rss.org/wiki.php>
- Depot kode aplikasi hulu: <https://gitlab.tt-rss.org/tt-rss/tt-rss>
- Gudang YunoHost: <https://apps.yunohost.org/app/ttrss>
- Laporkan bug: <https://github.com/YunoHost-Apps/ttrss_ynh/issues>

## Info developer

Silakan kirim pull request ke [`testing` branch](https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing).

Untuk mencoba branch `testing`, silakan dilanjutkan seperti:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
atau
sudo yunohost app upgrade ttrss -u https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
```

**Info lebih lanjut mengenai pemaketan aplikasi:** <https://yunohost.org/packaging_apps>
