<!--
Nota bene : ce README est automatiquement généré par <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Il NE doit PAS être modifié à la main.
-->

# Tiny Tiny RSS pour YunoHost

[![Niveau d’intégration](https://dash.yunohost.org/integration/ttrss.svg)](https://ci-apps.yunohost.org/ci/apps/ttrss/) ![Statut du fonctionnement](https://ci-apps.yunohost.org/ci/badges/ttrss.status.svg) ![Statut de maintenance](https://ci-apps.yunohost.org/ci/badges/ttrss.maintain.svg)

[![Installer Tiny Tiny RSS avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=ttrss)

*[Lire le README dans d'autres langues.](./ALL_README.md)*

> *Ce package vous permet d’installer Tiny Tiny RSS rapidement et simplement sur un serveur YunoHost.*  
> *Si vous n’avez pas YunoHost, consultez [ce guide](https://yunohost.org/install) pour savoir comment l’installer et en profiter.*

## Vue d’ensemble

Tiny Tiny RSS est un lecteur et agrégateur de flux de nouvelles (RSS/Atom) basé sur le web, gratuit et à code source ouvert.

### Caractéristiques

- agrégation / syndication de flux,
- importation/exportation OPML,
- plusieurs façons de partager du contenu : exportation de flux RSS, plugins pour divers sites sociaux, partage par URL, etc,
- plugins et thèmes,
- podcasts,
- filtrage flexible des articles


**Version incluse :** 20240924~ynh1

**Démo :** <https://demo.tt-rss.org/>

## Captures d’écran

![Capture d’écran de Tiny Tiny RSS](./doc/screenshots/screenshot.png)

## Documentations et ressources

- Site officiel de l’app : <https://tt-rss.org>
- Documentation officielle de l’admin : <https://tt-rss.org/wiki.php>
- Dépôt de code officiel de l’app : <https://gitlab.tt-rss.org/tt-rss/tt-rss>
- YunoHost Store : <https://apps.yunohost.org/app/ttrss>
- Signaler un bug : <https://github.com/YunoHost-Apps/ttrss_ynh/issues>

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche `testing`](https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing).

Pour essayer la branche `testing`, procédez comme suit :

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
ou
sudo yunohost app upgrade ttrss -u https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
```

**Plus d’infos sur le packaging d’applications :** <https://yunohost.org/packaging_apps>
