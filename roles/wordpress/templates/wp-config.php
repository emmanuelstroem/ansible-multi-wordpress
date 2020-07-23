<?php

/** The name of the database for WordPress */
define('DB_NAME', '{{ item.value.db_name }}');

/** MySQL database username */
define('DB_USER', '{{ item.value.db_user }}');

/** MySQL database password */
define('DB_PASSWORD', '{{ item.value.db_password }}');

/** MySQL hostname */
define('DB_HOST', '{{ item.value.db_host }}:{{ item.value.db_port }}');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Install Themes directly, NOT through FTP */
define('FS_METHOD','direct');

/** AWS S3 Access */
define( 'AS3CF_AWS_ACCESS_KEY_ID', '{{ item.value.aws_access_key_id }}' );
define( 'AS3CF_AWS_SECRET_ACCESS_KEY', '{{ item.value.aws_secret_access_key }}' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

{{ wp_salts.content }}

/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/*
 * Handle multi domain into single instance of wordpress installation
 */
define('WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'https://' . $_SERVER['HTTP_HOST']);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/** Disable Automatic Updates Completely */
define( 'AUTOMATIC_UPDATER_DISABLED', {{ auto_up_disable }} );

/** Define AUTOMATIC Updates for Components. */
define( 'WP_AUTO_UPDATE_CORE', {{ core_update_level }} );

/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');