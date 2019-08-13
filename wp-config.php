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
define('DB_NAME', 'trimurty_wharfside');

/** MySQL database username */
define('DB_USER', 'trimurty_dev');

/** MySQL database password */
define('DB_PASSWORD', '6TP%8~m(QDUE');

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
define('AUTH_KEY',         'S {Pa!?)/TS6+!vsd;[S`W%9FD0{].;v#MZiap-L5UzimBBZXMUsuXPU#DH{-}6F');
define('SECURE_AUTH_KEY',  '|-s-*yia%bvH,2O4Gav}|[~YCI+vCs~$h.D{MX,0z[Ep*{(9Wf%i.O(|udQ>3U`O');
define('LOGGED_IN_KEY',    'm+=!pO~?_c!cY|o*j,4>.%l8ZaCOFaQYAVr<D)!T59n,lt4nn:xMyL72`t3r [gm');
define('NONCE_KEY',        '*.B:~S^O?7qW|[WMiRMBNBRW.B$,W1_)fyILZ{p_VL^ESO_Oev(Ds04g-nMK3ufr');
define('AUTH_SALT',        'D$(P.bO7A?OtThk`;IAkz}>3%O=h`qKs@VeHG|<Y9<9Z~/sdD@}^0bqn4gP+(6rx');
define('SECURE_AUTH_SALT', 'A<I,25>NN`3Odo^ENF#6>})Zirz}3DrF})97`0`)$2<tVk7mq!c<z.i.7>k@fV,%');
define('LOGGED_IN_SALT',   '1qvkyk`q~n&l&XMS@dX vC]soeg9QDOu+FO]`2p~vL!DfUgy_0ziBzj.&6y?Rjyj');
define('NONCE_SALT',       '`XIhoYf]*;oK7 k5`qb3y6{4)9;P6_we=]c`NKfW&hlp&wQpH(,f;|$YUam3k&@M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpws_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
