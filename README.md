<!--
N.B.: This README was automatically generated by https://github.com/YunoHost/apps/tree/master/tools/README-generator
It shall NOT be edited by hand.
-->

# Tiny Tiny RSS for YunoHost

[![Integration level](https://dash.yunohost.org/integration/ttrss.svg)](https://dash.yunohost.org/appci/app/ttrss) ![Working status](https://ci-apps.yunohost.org/ci/badges/ttrss.status.svg) ![Maintenance status](https://ci-apps.yunohost.org/ci/badges/ttrss.maintain.svg)

[![Install Tiny Tiny RSS with YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=ttrss)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allows you to install Tiny Tiny RSS quickly and simply on a YunoHost server.
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview

Tiny Tiny RSS is a free and open source web-based news feed (RSS/Atom) reader and aggregator.

### Features

- feed aggregation/syndication,
- OPML import/export,
- multiple ways to share stuff: export RSS feeds, plugins for various social sites, sharing by URL, etc,
- Plugins and themes,
- podcasts,
- flexible article filtering


**Shipped version:** 20231202~ynh1

**Demo:** https://srv.tt-rss.org/tt-rss/

## Screenshots

![Screenshot of Tiny Tiny RSS](./doc/screenshots/screenshot.png)

## Documentation and resources

* Official app website: <https://tt-rss.org>
* Official admin documentation: <https://tt-rss.org/wiki.php>
* Upstream app code repository: <https://gitlab.tt-rss.org/tt-rss/tt-rss>
* YunoHost Store: <https://apps.yunohost.org/app/ttrss>
* Report a bug: <https://github.com/YunoHost-Apps/ttrss_ynh/issues>

## Developer info

Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing).

To try the testing branch, please proceed like that.

``` bash
sudo yunohost app install https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
or
sudo yunohost app upgrade ttrss -u https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
```

**More info regarding app packaging:** <https://yunohost.org/packaging_apps>
