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
define( 'DB_NAME', 'woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'IG~ SlqYU116niBw6UmEBZv8; k8V[$e`%w<}9uKCe `GL$JcC%{iwi57p|(q]ts' );
define( 'SECURE_AUTH_KEY',  'zHwV$6e+4^Kf?]H]jkIPNV2[}+n.o!M}h>Cr5x>X`dB(n$[&Ks }p{<F)Sx[I<iP' );
define( 'LOGGED_IN_KEY',    'Z4y]h1KNAuItG)K!]i6t? 0QtZ>e={4T`Rc|S>xD~2bN:7Uhj!.r?}p>tY7ez>)*' );
define( 'NONCE_KEY',        'q0}GQ44(Usp2b76vctFbYb1;5R9p,Vnpz~t.~+*? ;RT.-+|=]duE5_F{*;Pc44#' );
define( 'AUTH_SALT',        '~c(p/}jKInu6D(,y]fZqjmaqw`lYgV|0R[5;r5/)>@Xn^Zqds{jg?$mkHi5EWO0~' );
define( 'SECURE_AUTH_SALT', 'RTy<f_.-fC-%_6L@GAW)_F;,<-?ZvTl*Vo4UAb(i&Ra*NsN~2BT-G1*tsPLDA:C,' );
define( 'LOGGED_IN_SALT',   '[%_hn iu-)LnP7r5 Ac@}07I@pFh(.dIqqeXjihMF3gs#.w-<6)$~=E|t?RIBo+Q' );
define( 'NONCE_SALT',       '~i|n l34}mQev}YtdD:-aB0ws DzaF3Cb8H?$mM? m2lprA5A:x,=yHdtF}<nQAV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
