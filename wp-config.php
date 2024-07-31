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
define( 'DB_NAME', 'db_salon' );

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
define( 'AUTH_KEY',         '.i%_BTU!uEwaSDNkH*]EA|[Ze)M-z$oA?h(QaqOotnw+O<t&)e`P^/`!d[!M[j8z' );
define( 'SECURE_AUTH_KEY',  '(AtuPar%~|?^N?e_;#P&;uQ9Ly+`Pn6NKUvp7{fK]>f5Fsm/_<ARwFkw*z[n IBN' );
define( 'LOGGED_IN_KEY',    'eh4([^T1x{[X1aEntm@)TfvFK.8cX t,D#a|yMa}ZlnxXT`XxrqMK(x,RdzWEESo' );
define( 'NONCE_KEY',        '-NowC@HaZj@<?d82)gXjFTZ?{ZU+C*0psEE7I8k5Q Ebqi0ceF-=:U.;gG OM6=G' );
define( 'AUTH_SALT',        '+=Y7?}W.6rJ&gQTv~JN[UZrb1tuUU]~QO9xzgpQ_J:b:5H!%P[me,4pWb:M?W*Rx' );
define( 'SECURE_AUTH_SALT', '7KB~En`1{wBodxW<.^Teli:Dl(N3($h(V!wB,cM@hL&pCB/zzTSlC7n]83$SQ`:R' );
define( 'LOGGED_IN_SALT',   'L=mc $].H9NP=xA6I@YB/B^Ei3(oRu]gZ{OB6#8twjTqzIz3,|A-z`@V#J)+Z@d-' );
define( 'NONCE_SALT',       '%5z&~Xc>?RPyP#!^>*0B0pKC|Hy;WGY-X~7@0EEno$q&<Hp$jznjFIsN~TS0mjgW' );

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
