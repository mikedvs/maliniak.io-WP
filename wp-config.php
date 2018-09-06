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
define('DB_NAME', 'maliniakio');

/** MySQL database username */
define('DB_USER', 'maliniakio');

/** MySQL database password */
define('DB_PASSWORD', 'VPpq5R72ahaPEbwz');

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
define('AUTH_KEY',         '[&LP(S]5>o_zj1n$U9NyO1j-&+ZSQ~aWu*FXO)TP~;(wzSIkBUG6?_a4IC0C85g3');
define('SECURE_AUTH_KEY',  'y->r =PFDaqw6fnr)0Klg:}|yo10$z,| evU,kfQ2X|p^I,]&PZ7<>v|-)S6RO`_');
define('LOGGED_IN_KEY',    '~Ww,vD]{M#c4<|3qy=}Lr${$kbPLO|r28Z$sDy?7qw6I^x8g}v7=w%Ut0:-8uEjA');
define('NONCE_KEY',        '|;=F>9r.;17hAbhbBcne8+e|oaKG}Z:Zb/:B9I=PuA1@?=itMo1Ps%d4p#nlTdD^');
define('AUTH_SALT',        'FQCC*2z$KV*l,g[9]Ibo+p]<c+?w&FWK_FNDyMe%mv6=S6$Ue&p|a~U!84,f~lT_');
define('SECURE_AUTH_SALT', '2DM5{I>_92G|r{>;C++A/cinJ?r~;zSb+`0dk_kI1}9PJzD;lEt-;;up7~:/?sed');
define('LOGGED_IN_SALT',   '-+ M$#Xzo3ibbIz5|n.E*$9`M?lG*flz_gS+-ZSkAtx5N^5l,q@P|Ev+#gf+c#iA');
define('NONCE_SALT',       'H0sb2qp1BM*G;sg+sCGdVTh>Rj|bhb{>*BKr-%v|bEJ~g+{@c%}Df+@$d,TI[mVz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbmio_';

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
