<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blinkinteact_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define( 'WP_SITEURL', 'http://www.localhost/blink' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CJ7</#Cx3 4[tBa^}wnch({1olI,`rQAS^X^2==YJQ_}jM`AmKD^vHkpF61j]gP>');
define('SECURE_AUTH_KEY',  '2WRVpT`BOg-6PKf$M:]8cFJ2f>u(L(qI]$]w63Q@GmvUwn(o^up3eBVB3;(<>NC$');
define('LOGGED_IN_KEY',    'LWI Y/;C;RMnl( ,:=StX=CyQ?ig1;b*qz@7>|c+STqU3=9cG^<r_sm,#ev&wBc-');
define('NONCE_KEY',        'IP1+D;obUZ~Ye[v/RH^~-&{B!?z4o3Vq]*`a@8?upc5QY1YY?><GNfb$; sD!16p');
define('AUTH_SALT',        'wp%<9bhhCtq96!2+-)IM#4-E)3Pz}EkG2Fu;~sH/e?x7+px6 B-/I9LOQz0NR ,e');
define('SECURE_AUTH_SALT', 'JF?tuwhnAUI(_6(_?f!7~1u_X%GjBKGIW^L-je!d2cs8Zzowvx[Jn ?n*xLiKcg9');
define('LOGGED_IN_SALT',   '|VtB$8S<o:kRi3bN/8k%e0_x9Ly,_?sb} 7DU1{KfkT4,ypcJ_vc.tjgiAHx:EY&');
define('NONCE_SALT',       'Y#i:?a2XK#^VmHeuqq.KQla`;}nT<]~!T%;QuzL&mnv]q.gBbJ1([^ESsWlAq49=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
//define('WP_DEBUG', false);
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
