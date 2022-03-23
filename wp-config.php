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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'adtec' );

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
define( 'AUTH_KEY',         'BWT;^3?tW[]_aC:9osC}?{x0HbjReaci44i`5`tzK=sjYE*J2&;K!`H[-lij35.1' );
define( 'SECURE_AUTH_KEY',  '4_r@6%{9yZdklQ?G|XM=-6A!d%LR|K1Gq56te:4$L+i_0CSj[xDzbGq5EKfa <Re' );
define( 'LOGGED_IN_KEY',    ']CyZi}k_O0ky{fava<Mws`4XbKh{Yt>d50!rpoxyRoh&3@$2Oc7N^}@JzkuR^_6w' );
define( 'NONCE_KEY',        'u}wtg_deR0~EsXx;,ckS2@GGVb7-iX!XE+Uxj7 -{z0>u*y%JF;~_aG-(f?qJdP ' );
define( 'AUTH_SALT',        'o;~.:p2-Bt;0`AfTz*`yA,EHb?RK`=A*BB}U@dDP]cf~l28*b#sN!lLS*,0JFi?l' );
define( 'SECURE_AUTH_SALT', 'SXR0.u%b_m+aj562v1_{ 2zQXxs<^tQ&N-j<RG/LNLb@1S_jSTIbudtL{D=`YPr<' );
define( 'LOGGED_IN_SALT',   ' #`0EB+N-t|$OJ^K(; LnC80qI8Ewi^5aUjan${1bIbjUgd8)q-FbQDzO-Nd#B9(' );
define( 'NONCE_SALT',       'pMF]A];3rtCuWO) iiY?%izygK[<kI;Sm!1Vc)Km8+~.erLntE},kDS.-RNn5{9(' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
