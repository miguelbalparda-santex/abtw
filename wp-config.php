<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'abtw');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mb89jcr');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2:Uq%%y-z~G-<mky0Sm|kH@o)j1tHZN+Yi&x7lz`CD:G-;ubI?F-{PXc&p^|cJXg');
define('SECURE_AUTH_KEY',  '+DwWi4%rJAE/d|M{u`F7fl>P0*]`1&> MH4GHbn8ZMYm~g(tl9Rl-M`+j>mS4Hjw');
define('LOGGED_IN_KEY',    '=Qiy M`y_[@ViW+9UFplb<Mo1~c}XVH=agie3;t5QOk7Tf6W16*JhqWj)gP5 W8?');
define('NONCE_KEY',        '!e/%.%DUq+rC3I2E`!oxE}Vs9csK<lwus-lG+D~]S|MgB>|s9//nOjps o9Uyqja');
define('AUTH_SALT',        'F8ZI~;E9%2ZBpu:L&d{d<uG+j!P4@#I?O+a^-o6RtfEv&*6 =&NxQe?w+};M_D]Q');
define('SECURE_AUTH_SALT', '+Sqp:$b:|v1/-hr<&&~YaxVm={I1>0?+h|K<h[;h+jcW*4k:Voj9<F0jzdOZq9)[');
define('LOGGED_IN_SALT',   'Pm4qxPtC]VmVxW6W>M{!3ik;,8uRl8y}o*r|6|z:+AcG,^_^D)bE|:.~@~_yjgp+');
define('NONCE_SALT',       '|[uDvD+HmCr?5[|YUK-:Q3vKMO>HT?j2~7{:#.0A4)Cg<er-t;5Mj32KbKh47$G7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
