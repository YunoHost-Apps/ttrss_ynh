<!--
Важно: этот README был автоматически сгенерирован <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Он НЕ ДОЛЖЕН редактироваться вручную.
-->

# Tiny Tiny RSS для YunoHost

[![Уровень интеграции](https://dash.yunohost.org/integration/ttrss.svg)](https://ci-apps.yunohost.org/ci/apps/ttrss/) ![Состояние работы](https://ci-apps.yunohost.org/ci/badges/ttrss.status.svg) ![Состояние сопровождения](https://ci-apps.yunohost.org/ci/badges/ttrss.maintain.svg)

[![Установите Tiny Tiny RSS с YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=ttrss)

*[Прочтите этот README на других языках.](./ALL_README.md)*

> *Этот пакет позволяет Вам установить Tiny Tiny RSS быстро и просто на YunoHost-сервер.*  
> *Если у Вас нет YunoHost, пожалуйста, посмотрите [инструкцию](https://yunohost.org/install), чтобы узнать, как установить его.*

## Обзор

Tiny Tiny RSS is a free and open source web-based news feed (RSS/Atom) reader and aggregator.

### Features

- feed aggregation/syndication,
- OPML import/export,
- multiple ways to share stuff: export RSS feeds, plugins for various social sites, sharing by URL, etc,
- Plugins and themes,
- podcasts,
- flexible article filtering


**Поставляемая версия:** 20240831~ynh1

**Демо-версия:** <https://demo.tt-rss.org/>

## Снимки экрана

![Снимок экрана Tiny Tiny RSS](./doc/screenshots/screenshot.png)

## Документация и ресурсы

- Официальный веб-сайт приложения: <https://tt-rss.org>
- Официальная документация администратора: <https://tt-rss.org/wiki.php>
- Репозиторий кода главной ветки приложения: <https://gitlab.tt-rss.org/tt-rss/tt-rss>
- Магазин YunoHost: <https://apps.yunohost.org/app/ttrss>
- Сообщите об ошибке: <https://github.com/YunoHost-Apps/ttrss_ynh/issues>

## Информация для разработчиков

Пришлите Ваш запрос на слияние в [ветку `testing`](https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing).

Чтобы попробовать ветку `testing`, пожалуйста, сделайте что-то вроде этого:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
или
sudo yunohost app upgrade ttrss -u https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
```

**Больше информации о пакетировании приложений:** <https://yunohost.org/packaging_apps>
