<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mohibul' );

/** Database username */
define( 'DB_USER', 'mohibul' );

/** Database password */
define( 'DB_PASSWORD', 'vXFn8*Dz&VKWX!4lH5' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V[5DJ>3!?hLq3U;f.ptzwT{VgRi>XGqWgs?v*E>SLv$rj>VMI6Fuq26tFt AxOKd' );
define( 'SECURE_AUTH_KEY',  '8v1g9x}{(tjs.iM|=3Z+STdW7?%6N#Fyn2$o.AxZ[!wVu2CwX;:H=:P/YlD+n20R' );
define( 'LOGGED_IN_KEY',    ':1ITf_N#G%ko4]-LEG!Q6PY?g])D>Xq#<Jn`K<my=[wPA6lsP<2I`0Oj;=m9dgl.' );
define( 'NONCE_KEY',        'F5GYOJ@|xMyM0;oE{;siZ.9j?Xa7mG_n4@$^MuAM,js`f(Pd>~_^Ga9l9X5L7f?z' );
define( 'AUTH_SALT',        '*!+i]}9XMh}_tAbW~ _H2-#brhs2)?k49ST _kl)`TxR6^p|{QwIk#LO!PW{AC:E' );
define( 'SECURE_AUTH_SALT', '[C7Daencq|g,[#rbf?y3)21X1<@**;Vo)K :0p P3Ch2};8*#0}^1YVZVRY>9&Go' );
define( 'LOGGED_IN_SALT',   '8*n5J-8mVxX&RTItCq)FIgVN8l26fI`~/$0N(`7/E1PXo03.wsE(o>0SL6Cx7v*4' );
define( 'NONCE_SALT',       ']7lq5q{vXHS).9pkSI.p;RY#m3{^xJ%=_?_mpa^0]X[(+{8|ohiO!(qlHlS.C$H2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
