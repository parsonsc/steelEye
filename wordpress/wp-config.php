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
define('DB_NAME', 'steeleye');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'qYu>K`lIY/wbDums5FRU41yAl]b;cLwfG*8R`smQ331t!w- axOd64[/4SZA0 LE');
define('SECURE_AUTH_KEY',  '%A-&g9S<Q/2IBLl$w^$u1z3l]Luj]?#P=]f/jUyR5o{o^H&<6{xn>dDm?gki?^xC');
define('LOGGED_IN_KEY',    '&F#S<#d>9K{RvG`.IopOU+JVUh4!qm!<IkH!=q^:kw:`cp2?*6,*c(g_5W{fPHZj');
define('NONCE_KEY',        'bti(CdKAu>p9=^+>mXO;TsD}872YG9&B$l}5[GHgQMXpL45):G{z`u$;j7iYCu*R');
define('AUTH_SALT',        '9ZD]T4:r;-:;N;a`I6x9yYw%xp8(RuFj&elC2Qq_haj{q20LxXWY.h&_aJ]-/zeS');
define('SECURE_AUTH_SALT', '+vw4ZFrhBtcb){<h2A.rVa;@->?.d#f?)5V8~nO&5d/1 1gjW8EbOOB|4ZU1;mm5');
define('LOGGED_IN_SALT',   '-?JYsRV%+|lHVl&>*:)?lfq2rmx#VRTni3ulxNHPY^oV1EUh>a!NV<L=c`x<-/`}');
define('NONCE_SALT',       'eGfl(,={Bg8Y2-]wfs)8zdWih-S5S|D$r A0J.!v4u]3A=FM4]];H#J26p(zDaL6');

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
