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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'E.k:mGDjCQuQm<(JlKHWc%JevzK*x|&,6RD)fiAVoC*Hhgt&>WbyfQrE(e,Ple4B');
define('SECURE_AUTH_KEY',  '`o]hJ  I$A8A~V>BN*`]Il!9*q<We>8.[Bz2p$_~bDX$rOCFY*1e9+C+Wv5xsDhR');
define('LOGGED_IN_KEY',    '5:tU~*Qi^2r($(m)Jp0v^u4,?_Cco>e;*6kWM5th,F=m!Z :cMOUx&X3B2{hag?3');
define('NONCE_KEY',        '[bdo1/s~w8w_5:+*b%5(lYIM3vPZBPc$kc19}9Xh_42FGXY0@+5ht~T@K&a;YCP|');
define('AUTH_SALT',        'D`m-`,C?]dTU3aF<2ooo]`0h3osTpU{$2u#j%xV$w4o*5f4yRx<}Jf,rS~~*W+bF');
define('SECURE_AUTH_SALT', '%6O5EV>fB4k$C#Y7qOOTd$@?9l%zqDi4e^dgn-J=~y[Fw0C!|X(]@3M^WX@&W#kA');
define('LOGGED_IN_SALT',   'JJ/|EkJOy?y(Sl.d`{]& +x5~SOGbk;QFiDp:Ef0^g>W9Gl1nD+DD$R5|m:I<*B]');
define('NONCE_SALT',       't#~N.BT~-9CHG=]yw4v;t+>xRN%O`*xh~w;#.VZ}Xl>+7=4PtVOBK;Uv(ua5.?:k');

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
