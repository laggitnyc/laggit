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
define('DB_NAME', 'laggitco_db');

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


define('WP_HOME','http://localhost/daniel');
define('WP_SITEURL','http://localhost/daniel');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YIx-zo N@6[DdUL~31.P0Y(E[UGn/m^uu_m$5cEK,=H:qxl{5BQ&^9.YLi]pvEWA');
define('SECURE_AUTH_KEY',  'HaVK^ro.0U9K#,@@Y^6n,%V*x{Qy4U7-=*MRhpt4.?@}?]&l)28mcQQ9S-DP98QJ');
define('LOGGED_IN_KEY',    'x},Mxzi`96C./q(Yl+noU({px)SA%X,{R(G_ke27CM+JHmmCU~pDel9,7Mp{?Zd}');
define('NONCE_KEY',        '?&6g5f-l]X%1db`&)Oim4A{+p->8Jmta{bI/32fyc~REjpcxGKf*s9$T&<$#Y,tD');
define('AUTH_SALT',        ']i Z&g$#gp#_dV`wM|U/m2fC0N#ZT 7k&P$@?r[e|L1IcrU{A=;!KYI5TK<J}MJ9');
define('SECURE_AUTH_SALT', 'aRo*_&/HD9/sOPT2{M59H?8Z%&>gB`3jcH![T{t5p(&.jQo|Iudrr}N?9,Tv)B1z');
define('LOGGED_IN_SALT',   'D[D~&&|MTF;f8UfWp~x 8X`%r*h`qJ3t-4~0&$a:`-r0l%zX?YP{Okmo@C9& [Q-');
define('NONCE_SALT',       '{]#O:D4q07Ft/KVDMO7r|4(LnvF/lS#W{RYE%^+C,c+vYW6@/~l[a#vRRC<AE+L ');

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
