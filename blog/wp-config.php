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
define( 'DB_NAME', 'u441287749_xvax0' );

/** MySQL database username */
define( 'DB_USER', 'u441287749_VXgcI' );

/** MySQL database password */
define( 'DB_PASSWORD', '5kkYme3LqK' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Fw1a|QR%)9d_JezxT>-MtUZL)Mq-K6IX=sfQ%`v3^1,rq9-?7.Qz{B w-b^QnT%#' );
define( 'SECURE_AUTH_KEY',   ',I,r4&[#$g`;:sTTm.`%q=%31p>-j|a~;4a7l?@nWxy?z,Y]P0;>eCogxj$;w0>T' );
define( 'LOGGED_IN_KEY',     'U( 5P,>=f[&+nGPs|3{d[DZCyWA-$A)7f*Sv%9<.;}/)%?4xM)_`c)9Ujrhd?OTO' );
define( 'NONCE_KEY',         'PUa_G}kb nEH:4eRk-25**@oHyMZ=0W_i*ew[l4~7fkerBI6RhNmHs5-kNRZFm3z' );
define( 'AUTH_SALT',         ']hBaBup{p,Ie&$a~AYn&5*<Eg+t+MGm_`M*PU]*HJuq?rzIxW2%24t1p-_IJv3@]' );
define( 'SECURE_AUTH_SALT',  'ixgq!{nuNNgK:<gdQLil0z_XGd}kJpEds~>8$h_Rti5>dWjOj(TI9(a,sTTC_@cp' );
define( 'LOGGED_IN_SALT',    'O(u&-o8meTYjbBF:W;NUL,d2Drjd(cp pa8A2_gbZzn8b,c@5Ok-VqX!.Y2|+FX;' );
define( 'NONCE_SALT',        ')e(byiDkwsaLd|j!TcRt|a#-UG5HkW]sHHX~0N=D>&RI7n7~QI3o*5d$vS4F+ATF' );
define( 'WP_CACHE_KEY_SALT', '52<%.|=R*|u4x[z6|PY4R{Z@Y>Y2A,p!*CY.Emm+EY|Z_Ob`0GN<_6qeTy[OO7Jd' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
