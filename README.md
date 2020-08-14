# Tiny-Tiny RSS for YunoHost

[![Integration level](https://dash.yunohost.org/integration/ttrss.svg)](https://dash.yunohost.org/appci/app/ttrss) ![](https://ci-apps.yunohost.org/ci/badges/ttrss.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/ttrss.maintain.svg)  
[![Install Tiny-Tiny RSS with YunoHost](https://install-app.yunohost.org/install-with-yunohost.png)](https://install-app.yunohost.org/?app=ttrss)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allow you to install Tiny-Tiny RSS quickly and simply on a YunoHost server.  
If you don't have YunoHost, please see [here](https://yunohost.org/#/install) to know how to install and enjoy it.*

## Overview

Tiny Tiny RSS is a free and open source web-based news feed (RSS/Atom) reader and aggregator.

**Shipped version:** 2020.08.14

## Screenshots

![](https://tt-rss.org/images/ttrss/18.12/1812-shot1.png)

## Demo

* [YunoHost demo](https://demo.yunohost.org/ttrss/)

## Configuration

## Documentation

 * Official documentation: https://git.tt-rss.org/git/tt-rss/wiki
 * YunoHost documentation: https://yunohost.org/#/app_ttrss

## YunoHost specific features

#### Multi-users support

#### Supported architectures

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/ttrss%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/ttrss/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/ttrss%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/ttrss/)

## Limitations

## Additionnal informations

## Links

 * Report a bug: https://github.com/YunoHost-Apps/ttrss_ynh/issues
 * Tiny-Tiny RSS website: https://tt-rss.org/
 * Tiny-Tiny RSS repository: https://git.tt-rss.org/git/tt-rss
 * YunoHost website: https://yunohost.org/

---

## Developers infos

Please do your pull request to the [testing branch](https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
or
sudo yunohost app upgrade ttrss -u https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
```
