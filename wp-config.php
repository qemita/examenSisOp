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
define('DB_NAME', 'noemisdt_wordpress');

/** MySQL database username */
define('DB_USER', 'noemisdt_noemi');

/** MySQL database password */
define('DB_PASSWORD', 'noemi');

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
define('AUTH_KEY',         'MnjK:;MEQLgsdsMs8+](:j@AcNa[/oHX&UT@@tv~M1HWib$*+%j:y>9;rf{~O%|&');
define('SECURE_AUTH_KEY',  ':9n:9!u|.!Us6Ufke&R?=o=mk9>72j?W]vEkE|UR]EelB|j@.4Z.{lZAJ+dw >NK');
define('LOGGED_IN_KEY',    'JL_hv1>QMl@8F%+_yK8ckt2cWcPw@|-IU~o6je%7&S<w[(znzOc/q|+kf9^mQ U&');
define('NONCE_KEY',        '>/B86aj)Lj+mg6`]iv)NKGAVa*B^gDmBA z.i^vT+#>88Dmz-^Y{<b*Uud#&-v|#');
define('AUTH_SALT',        'hO:g+73CaaXlKd:aK<L-RD-_g/wss+fBdj$+2(:&#B?f`**6gYOs-0%.kQ$96eOE');
define('SECURE_AUTH_SALT', '.!7;G!Fe9%<+?WHE#Uw{O_M4CcWQtR,KfMd*lp+aF(-_xW5e8ox15u-5+(RCl8#d');
define('LOGGED_IN_SALT',   'O+glZ$zpyt1m,D^e/nPL{_Mf(nG+rG%w`N|L-bswY8/_ --X6j|@u4*@I-eY3L+m');
define('NONCE_SALT',       'XI~<tPdfLkk#]eg9+Y=Ni6+B[>%G(T&-E-@M5nz^Xm[{Z;Al:k X;9Hfk~qgIb|$');

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


