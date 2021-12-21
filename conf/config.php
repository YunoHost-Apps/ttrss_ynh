<?php

	// *******************************************
	// *** Database configuration (important!) ***
	// *******************************************

	putenv('TTRSS_DB_TYPE=mysql'); // or mysql
	putenv('TTRSS_DB_HOST=localhost');
	putenv('TTRSS_DB_USER=__DB_NAME__');
	putenv('TTRSS_DB_NAME=__DB_NAME__');
	putenv('TTRSS_DB_PASS=__DB_PWD__');
	putenv('TTRSS_DB_PORT=3306'); // usually 5432 for PostgreSQL, 3306 for MySQL

	putenv('TTRSS_MYSQL_CHARSET=UTF8');
	// Connection charset for MySQL. If you have a legacy database and/or experience
	// garbage unicode characters with this option, try setting it to a blank string.

	// ***********************************
	// *** Basic settings (important!) ***
	// ***********************************

	putenv('TTRSS_SELF_URL_PATH=__DOMAIN_PATH__');
	// Full URL of your tt-rss installation. This should be set to the
	// location of tt-rss directory, e.g. http://example.org/tt-rss/
	// You need to set this option correctly otherwise several features
	// including PUSH, bookmarklets and browser integration will not work properly.

	//putenv('TTRSS_FEED_CRYPT_KEY= ');
	// WARNING: mcrypt is deprecated in php 7.1. This directive exists for backwards
	// compatibility with existing installs, new passwords are NOT going to be encrypted.
	// Use update.php --decrypt-feeds to decrypt existing passwords in the database while
	// mcrypt is still available.

	// Key used for encryption of passwords for password-protected feeds
	// in the database. A string of 24 random characters. If left blank, encryption
	// is not used. Requires mcrypt functions.
	// Warning: changing this key will make your stored feed passwords impossible
	// to decrypt.

	putenv('TTRSS_SINGLE_USER_MODE=true');
	// Operate in single user mode, disables all functionality related to
	// multiple users and authentication. Enabling this assumes you have
	// your tt-rss directory protected by other means (e.g. http auth).

	putenv('TTRSS_SIMPLE_UPDATE_MODE=false');
	// Enables fallback update mode where tt-rss tries to update feeds in
	// background while tt-rss is open in your browser. 
	// If you don't have a lot of feeds and don't want to or can't run 
	// background processes while not running tt-rss, this method is generally 
	// viable to keep your feeds up to date.
	// Still, there are more robust (and recommended) updating methods 
	// available, you can read about them here: http://tt-rss.org/wiki/UpdatingFeeds

	// *****************************
	// *** Files and directories ***
	// *****************************

	putenv('TTRSS_PHP_EXECUTABLE=/usr/bin/php');
	// Path to PHP *COMMAND LINE* executable, used for various command-line tt-rss 
	// programs and update daemon. Do not try to use CGI binary here, it won't work. 
	// If you see HTTP headers being displayed while running tt-rss scripts, 
	// then most probably you are using the CGI binary. If you are unsure what to 
	// put in here, ask your hosting provider.

	putenv('TTRSS_LOCK_DIRECTORY=lock');
	// Directory for lockfiles, must be writable to the user you run
	// daemon process or cronjobs under.

	putenv('TTRSS_CACHE_DIR=cache');
	// Local cache directory for RSS feed content.

	putenv('TTRSS_ICONS_DIR=feed-icons');
	putenv('TTRSS_ICONS_URL=feed-icons');
	// Local and URL path to the directory, where feed favicons are stored.
	// Unless you really know what you're doing, please keep those relative
	// to tt-rss main directory.

	//putenv('TTRSS_SIMPLE_UPDATE_MODE=true');

	// **********************
	// *** Authentication ***
	// **********************

	// Please see PLUGINS below to configure various authentication modules.

	putenv('TTRSS_AUTH_AUTO_CREATE=true');
	// Allow authentication modules to auto-create users in tt-rss internal
	// database when authenticated successfully.

	putenv('TTRSS_AUTH_AUTO_LOGIN=true');
	// Automatically login user on remote or other kind of externally supplied
	// authentication, otherwise redirect to login form as normal.
	// If set to true, users won't be able to set application language
	// and settings profile.

	// *********************
	// *** Feed settings ***
	// *********************

	putenv('TTRSS_FORCE_ARTICLE_PURGE=0');
	// When this option is not 0, users ability to control feed purging
	// intervals is disabled and all articles (which are not starred) 
	// older than this amount of days are purged.

	// *** PubSubHubbub settings ***

	//putenv('TTRSS_PUBSUBHUBBUB_HUB= ');
	// URL to a PubSubHubbub-compatible hub server. If defined, "Published
	// articles" generated feed would automatically become PUSH-enabled.

	putenv('TTRSS_PUBSUBHUBBUB_ENABLED=false');
	// Enable client PubSubHubbub support in tt-rss. When disabled, tt-rss
	// won't try to subscribe to PUSH feed updates.

	// ****************************
	// *** Sphinx search plugin ***
	// ****************************

	putenv('TTRSS_SPHINX_SERVER=localhost:9312');
	// Hostname:port combination for the Sphinx server.

	putenv('TTRSS_SPHINX_INDEX=ttrss, delta');
	// Index name in Sphinx configuration. You can specify multiple indexes
	// as a comma-separated string.
	// Example configuration files are available on tt-rss wiki.

	// ***********************************
	// *** Self-registrations by users ***
	// ***********************************

	putenv('TTRSS_ENABLE_REGISTRATION=false');
	// Allow users to register themselves. Please be aware that allowing
	// random people to access your tt-rss installation is a security risk
	// and potentially might lead to data loss or server exploit. Disabled
	// by default.

	putenv('TTRSS_REG_NOTIFY_ADDRESS=user@your.domain.dom');
	// Email address to send new user notifications to.

	putenv('TTRSS_REG_MAX_USERS=10');
	// Maximum amount of users which will be allowed to register on this
	// system. 0 - no limit.

	// **********************************
	// *** Cookies and login sessions ***
	// **********************************
	
	putenv('TTRSS_SESSION_COOKIE_LIFETIME='.(86400*30));
	// Default lifetime of a session (e.g. login) cookie. In seconds, 
	// 0 means cookie will be deleted when browser closes.
