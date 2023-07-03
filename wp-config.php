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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Bpm!N(|R9#+#]PTKD}d}~$3G+n3RwT|RF|}N-548mh^o06:D8oXKWm.wfpmws;;&' );
define( 'SECURE_AUTH_KEY',  '4M%gYE>!pSdEw&bq{X[/px|M*t=?D7)}82dcT!Swu=30N)1YwvpunY(yk5Gz:me7' );
define( 'LOGGED_IN_KEY',    'rrTl>8I)d} `<05tze2>!$uMfY&h70aBDAU?-MQ;:dVdiM;*Kj$Ju8maIe%C*YgV' );
define( 'NONCE_KEY',        'X%b<0j4f>tzfXZzN>T$JPj%h|k8c`LfEToI{:{q&_(wQyVIR0w:Q9Kc<V[1S4m&,' );
define( 'AUTH_SALT',        'aO}SBE5dYb:q?dX#1*F-/=P+m6Yz!OplkYVU0LT|*Fo)UqqB1-<fscHq kRKdh%#' );
define( 'SECURE_AUTH_SALT', 'Pn0Oq8=e|vwRI^G_B/VS{y])NeVRzn3]>jRXD(o{;nk!]rR#38Gn wR&`~]Upryp' );
define( 'LOGGED_IN_SALT',   '??=x*RGL`}J@~qGMRK%]jr*/V34*uoU/WJ=4X2vD*ZN9bv%cNPPnB;4K,4^EH2!s' );
define( 'NONCE_SALT',       'H[DIGa/(#.[){9_Wf#!uSmU  ze&Xw=5,ehKe4Z&=2.#2;2Q?tU4=6*>gc{m#,TB' );

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
