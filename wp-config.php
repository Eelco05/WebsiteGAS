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
define('DB_NAME', 'Website GAS');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' <XMMYXZ9/{ve2N!X`cm?3)N()rr[moLU<Q$cvkyTEw.m>_NX/V`jeK6hIgX!w4u');
define('SECURE_AUTH_KEY',  'n)l803 Mj/X~;rsMEFZk1Z>,,lVyS#QdmhV2oD+QdEM/rkHFhG <a-[=/=^.*;z.');
define('LOGGED_IN_KEY',    '5;GL!6`KP$Kkt_//p]%V_RMw*HwlR:jGv@SILhi*$}^ Y9 pWxp!d}6;qnynqi6]');
define('NONCE_KEY',        '?>(n(?c JG|=A;&P@k#D A 8ynX~)StqURev`t1=%O1d>&0mfM9I?RrxsYGwS|8O');
define('AUTH_SALT',        'DuCUb|xx03Tx<P0&LlB!a^+-rDHhKT>.?IZ,CSYVE?KR(3KB(kw#6&hB[7OQ3JZt');
define('SECURE_AUTH_SALT', '$LF4$/l:~@F|O{C`U@:A2XZ[eAMqO1<un/$ghb6Gv)A`Zu|-7N)Yx@c(c6s}dJ0v');
define('LOGGED_IN_SALT',   'B/Pet:j3,bs0nj0%#-Vm[JFsln[shPf{{By#jv<7K+re%O5h=2,B~C?.7-~:bB}l');
define('NONCE_SALT',       'Rg<J+w* -%z&y7yDvD >vz{UyQ&5_6X#(.<N*FTI C{Q%@z?Fy0xH<#zA+-:VpNW');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
