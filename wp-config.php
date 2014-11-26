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
define('AUTH_KEY',         '9s-/U_HSjUmSe%xc;v3p_#mG9%P<NEZ6|,9!*o:UN|gRaOMHwE PsUYqeMk<2@D8');
define('SECURE_AUTH_KEY',  'z[g~17R9(x(|pteT&SE`mp34?nDhVCQ0o)n%3jm;1,c7eU(D-[=3fBRiB $FMp`b');
define('LOGGED_IN_KEY',    'K*VEMIrGcsAD.YoKSXdFEPSx_G5J_&=?r[vC((BC6=pvwp$+QmX VP$iF;;O-DF4');
define('NONCE_KEY',        'V?8|>z/:+,q2WX->}8LGX*- `IxSSxS!isPdk[T+/nYXh`97.i!iB@Nh~uLCKZD~');
define('AUTH_SALT',        'ccZBodzVn$7yvgy}dKl%*NBYLg|A3&- |%{sFeC<|(`#>iJwC=<8etx[Wf6|U1jN');
define('SECURE_AUTH_SALT', 'HZ.|F-+e:Y)GzzJS&~bdh hP~dcP:o=W*USBr08an}i2uUg&O]Y$h+em F^ U^ow');
define('LOGGED_IN_SALT',   '$_IY`!oS{<3>TE3Br#C(L3a37+u-@tRYT)o|Gu}0vYj)[[jcn^.Q4Epm|!n?+.BS');
define('NONCE_SALT',       '%rwY,5ed@%MMF-dfk=r.p_<! Fq_rMLm]uS^y+,=l|b8^}a66Y>s59P~l%9 >sMe');

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
