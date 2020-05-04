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
define( 'DB_NAME', 'u441287749_WrFTJ' );

/** MySQL database username */
define( 'DB_USER', 'u441287749_xBuzg' );

/** MySQL database password */
define( 'DB_PASSWORD', '3dIgAjmhCt' );

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
define( 'AUTH_KEY',          'dC>[^/OlMKpUE0b%ePvU$P1?[tQkzf3~5mNyzOHt1r@zBgq9u-fYrq`/]dG/Wbab' );
define( 'SECURE_AUTH_KEY',   '/${rfO9KD n7&MyQz8v4 IzC;/dr)e^xC*wLYW0@bt-U2D+TAU|Fdz3iyZt3aLN;' );
define( 'LOGGED_IN_KEY',     '@({uPuwx*@dJ2_9P(nD=:x8$ufQs&-1~pR)UM0.los$yGY@(A:A>/=4H/|g^BY4b' );
define( 'NONCE_KEY',         'Ddh|)xDoHFG0a{>tee6,YSiof8v^#CW[>A*_ApX%ytB}?{^jikt/45`+2M3~0CID' );
define( 'AUTH_SALT',         '#}P*0K`_Z:SJO8k_PaBIb9vzV+yB6Mn*m:k*<::6#s.pB= EjQV]7_H!vE~~?St(' );
define( 'SECURE_AUTH_SALT',  'G>qK#yGC|vamaQn*aSLhrDiM{-t|D~6mp/NuW|2EV(P8jn83x.,_ar_+<9HNCqtJ' );
define( 'LOGGED_IN_SALT',    '_4jb#nTIx)Sy$eL5!d+956t)vbq4]25lD,#fEzw8XWpZ6Xzsn}+K^~z;0d%nHwK#' );
define( 'NONCE_SALT',        'K_wdRx>CredWL,05q;4C<ruOw7<%q:5W[!jOf-d/bxTH$H:CbW{s>ln)?:mu:%1|' );
define( 'WP_CACHE_KEY_SALT', 'bR>(1nu{FgQu9_YC bbUhAZ3/0}:`$/=(u*>nG 11/uaOs~?AIR4vZ.y${ JXKs@' );

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
