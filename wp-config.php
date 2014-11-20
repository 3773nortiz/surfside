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
define('DB_NAME', 'surfside');

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
define('AUTH_KEY',         'ImG0B+0aX;EZ<9NbmNMw8eZsrrA.gR3IfHZr]ZqYwGG|jv]<,OsG5l$=NfNw]U]+');
define('SECURE_AUTH_KEY',  'k]q,(_G/<PE263bDyY@OAkbuMJ4jo2|a^4q<{+J.O|GVx.Yo a--JV}7x UxDV$A');
define('LOGGED_IN_KEY',    'Edo+2SR&[07x7dtf{Oq6rTe->CLH9kn1=#%>v+T#;8dz)vR!)yn,wSYt+;1yn~J8');
define('NONCE_KEY',        'BHX!*jjIRV~y*{[tE)_pVCPb~tv#>Fu,I%`x) M#!!C;.Ysk@iRMQ#SHA0C6+]#}');
define('AUTH_SALT',        ';,a!=ROmnM<quX}QziV!?q{}7=/.<E4<9w={ud+;<i#AHP*Efy-RVp%O7&8D_mxW');
define('SECURE_AUTH_SALT', 'J3.5X)/WGtK_K|T; 57h(t|DSqxTgHrps$=G,XM!JmpzM^..dIMchXYFG|HKTSWn');
define('LOGGED_IN_SALT',   '2r3S>GHeDLHFin+`a2@.N];IsB[gaDL.Kg|] C<29$K^v%#{{+]=_ke(!x77h6{7');
define('NONCE_SALT',       '?65t4ztJ~haI6A}[Fs-?r<%`Q+(m-~F{o3~MT-F]su v%1D.bU?vWd{1Z$?D)?> ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
