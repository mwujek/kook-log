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
define('DB_NAME', 'kook-db');

/** MySQL database username */
define('DB_USER', 'kookUser');

/** MySQL database password */
define('DB_PASSWORD', 'Baseball25');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'n;/GgyB_N7N7}}ORC)&@}0Ni!@^/Hu9Sj4)7E456CVuB{H?0@c19tYqa!4:2?Bb;');
define('SECURE_AUTH_KEY',  '$.  /+o;YY&J[na~N3Ox(wc,+o:4Sp*$ d+l5APylwU{v.L]$hyL!;wi^T^noGf_');
define('LOGGED_IN_KEY',    'rn5%!lD!YJgOx#b^w:fQ;pHfeEIV5Ar(`ua.v2!B:0J7Z6|{%nBZfG;CS6%.LV<#');
define('NONCE_KEY',        'OAXb4*7$ZGV+:r_X_`?kBr5)15;QPlxJpz1<k5KM.:RFZhB[_g*,85,@p Uy##HZ');
define('AUTH_SALT',        'Iyy7DiRba_vb p?ps.cPzq<K$:xk,Qk,W-KP!vcZf?p>7Yo0@);ei98M0|c}sFra');
define('SECURE_AUTH_SALT', 'pi1q>hKnZ$Tu/Hez33c#m0j `J~j%Fp%dyV?p.=1;lOQc#l!H$h,F(T#r,nGq!U7');
define('LOGGED_IN_SALT',   'vhd}J%n<3Q=[6kY(&>97{|d qb}7*]^]V}r?-^ACRF6X?l_7ud.~khe~#u![y~K5');
define('NONCE_SALT',       'nh :C]T.w{c[Z&4&7bN F#5bg%=`;l|wO.?umE)gZpxH&RAsbmY)q@zCBFM4{|{4');

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
define('RELOCATE',true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
