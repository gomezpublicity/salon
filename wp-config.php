<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'salon_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '?5<5D?K# Yv&qp&?j+FX]hka0E#Yf(Dy`kZ<pNu_&90>+KkqW^.4>C[>lUxh(q5y' );
define( 'SECURE_AUTH_KEY',  '(TD_1qW#w=Q.Lwr-`AUX:z0I[S7lR3|K<c3$J1_hX.1RHze=2QJ[/]<2*z@|!3vK' );
define( 'LOGGED_IN_KEY',    '22tq;3IGfYS. >VA9zC`yYZB^}ZWF@h;s1r^6LMjAwjXo|,SBgC_IycoLPz.<~Cz' );
define( 'NONCE_KEY',        'pg_;=gKM,`1V<y K5BB[)2v|NKL=oO1[AvdcpCa6uz xhld^Ia)24qDPXS(7*4u|' );
define( 'AUTH_SALT',        'B3s#JDECN$C%y&^+[;(&&6Zo)2hmg@+j&(6GXwD?p#9mVVGHG[iE]^{d%lucKh:F' );
define( 'SECURE_AUTH_SALT', 'S}S#:,,[%5)lVPc&axw+f3.{zgL)VbKh9WugGn-N=%e.w]j3jAxr9k|GzA#=BLpM' );
define( 'LOGGED_IN_SALT',   '/noQA1x?6~I1Un^gTj@l?>4Eo]VUB.GGYDMg2QV.$J`-WV)mtE(Jb}k0o(vNyI p' );
define( 'NONCE_SALT',       'nPhMpJJh9e/QW0O/fXUe?1jfWm)Lw=IY`P`UhijPP(C08~azK8SX#m<87S9fS%}Q' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
