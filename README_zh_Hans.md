<!--
注意：此 README 由 <https://github.com/YunoHost/apps/tree/master/tools/readme_generator> 自动生成
请勿手动编辑。
-->

# YunoHost 上的 Tiny Tiny RSS

[![集成程度](https://apps.yunohost.org/badge/integration/ttrss)](https://ci-apps.yunohost.org/ci/apps/ttrss/)
![工作状态](https://apps.yunohost.org/badge/state/ttrss)
![维护状态](https://apps.yunohost.org/badge/maintained/ttrss)

[![使用 YunoHost 安装 Tiny Tiny RSS](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=ttrss)

*[阅读此 README 的其它语言版本。](./ALL_README.md)*

> *通过此软件包，您可以在 YunoHost 服务器上快速、简单地安装 Tiny Tiny RSS。*  
> *如果您还没有 YunoHost，请参阅[指南](https://yunohost.org/install)了解如何安装它。*

## 概况

Tiny Tiny RSS is a free and open source web-based news feed (RSS/Atom) reader and aggregator.

### Features

- feed aggregation/syndication,
- OPML import/export,
- multiple ways to share stuff: export RSS feeds, plugins for various social sites, sharing by URL, etc,
- Plugins and themes,
- podcasts,
- flexible article filtering


**分发版本：** 20241226~ynh1

**演示：** <https://demo.tt-rss.org/>

## 截图

![Tiny Tiny RSS 的截图](./doc/screenshots/screenshot.png)

## 文档与资源

- 官方应用网站： <https://tt-rss.org>
- 官方管理文档： <https://tt-rss.org/wiki.php>
- 上游应用代码库： <https://gitlab.tt-rss.org/tt-rss/tt-rss>
- YunoHost 商店： <https://apps.yunohost.org/app/ttrss>
- 报告 bug： <https://github.com/YunoHost-Apps/ttrss_ynh/issues>

## 开发者信息

请向 [`testing` 分支](https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing) 发送拉取请求。

如要尝试 `testing` 分支，请这样操作：

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
或
sudo yunohost app upgrade ttrss -u https://github.com/YunoHost-Apps/ttrss_ynh/tree/testing --debug
```

**有关应用打包的更多信息：** <https://yunohost.org/packaging_apps>
