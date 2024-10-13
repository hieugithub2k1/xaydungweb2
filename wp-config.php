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
define( 'DB_NAME', 'xaydungtrangweb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '19052k1ds' );

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
define( 'AUTH_KEY',         'Z-=qCY{4#9!34tTQNO8n2{<@?_SSu2NrZ/pDWHDJN<o#w(>xV]Q:mHZ=Z:%b_,kL' );
define( 'SECURE_AUTH_KEY',  'hqwe[b=2A5Sa [HyRda!,4AaAz?O9f%_c+&7nNhI%Bk3$re%p~]<ta?* (an5L+F' );
define( 'LOGGED_IN_KEY',    'm-2k1_l%H*B$MF(Afx7Un)E@?7y=VLC.H$:$9Y?:]y5$-3W%#pVSWL+!w[5AR 2#' );
define( 'NONCE_KEY',        ',2rTi8wrnTx,@`aP4WHY6&-x^H YZ ,sF[p&|Ip`L !|Fxr~Z AHPd]|)RUM cP1' );
define( 'AUTH_SALT',        'Hrg)0y#^9AF_{j`8&j|@^*R4.0QPu=Yt5nioq&HRT0|@=InbA)ZF}MH##y-t8C1u' );
define( 'SECURE_AUTH_SALT', 'H~pq,Q{zy #p[5TX[$|S<pG[jiy/m +Qso)[MWa>f77`J!&6%AOyrkjm:UJNe33|' );
define( 'LOGGED_IN_SALT',   '~M.g8Eb759b=@_L7@)mkV5+5i)7;ISG~oA2M48h+~lYOgn8~y%B^3wF[y:[DPd^`' );
define( 'NONCE_SALT',       'ShO+GJu6qQ3(|gD74 q{7$B2l~E*{D#.:^Y/376zq_h~+4V<hAu{O#|N=`AJrALf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
