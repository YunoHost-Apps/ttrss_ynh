# Tiny Tiny RSS pour YunoHost

[![Integration level](https://dash.yunohost.org/integration/ttrss.svg)](https://dash.yunohost.org/appci/app/ttrss) ![](https://ci-apps.yunohost.org/ci/badges/ttrss.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/ttrss.maintain.svg)  
[![Installer Tiny Tiny RSS avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.png)](https://install-app.yunohost.org/?app=ttrss)

*[Read this readme in english.](./README.md)* 

> *Ce package vous permet d’installer Tiny Tiny RSS rapidement et simplement sur un serveur YunoHost.  
Si vous n’avez pas YunoHost, consultez [le guide](https://yunohost.org/#/install) pour apprendre comment l’installer.*

## Vue d’ensemble

Tiny Tiny RSS est un lecteur et agrégateur de flux d'actualités (RSS/Atom) en ligne gratuit et open source.

**Version incluse :** 2020.08.14

## Captures d’écran

![](https://tt-rss.org/images/ttrss/18.12/1812-shot1.png)

## Démo

* [YunoHost demo](https://demo.yunohost.org/ttrss/)

## Configuration

## Documentation

* Documentation officielle : https://git.tt-rss.org/git/tt-rss/wiki
* Documentation YunoHost : https://yunohost.org/#/app_ttrss

## Caractéristiques spécifiques YunoHost

#### Support multi-utilisateurs

* L’authentification LDAP est-elle prise en charge ? **Oui**
* L’application peut-elle être utilisée par plusieurs utilisateurs ? **Oui**

#### Architectures supportées

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/ttrss%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/ttrss/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/ttrss%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/ttrss/)

## Limitations

## Informations additionnelles

## Liens

* Signaler un bug : https://github.com/YunoHost-Apps/ttrss_ynh/issues
* Site web de Tiny Tiny RSS : https://tt-rss.org/
* Dépôt de l’application principale : https://git.tt-rss.org/git/tt-rss
* Site web YunoHost : https://yunohost.org/

---

## Developers infos

Merci de faire vos pull request sur la [testing branch](https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
ou
sudo yunohost app upgrade ttrss -u https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
```
