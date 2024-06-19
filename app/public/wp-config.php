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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '>a``?)~q=;&NiCjn-&caMV}8=TQ*8m6Y{[|WO*vJ50Rq1s}9B4RTZ:FSq]s^jyk]' );
define( 'SECURE_AUTH_KEY',   ':fVi4{j+p2Sj!m}T>Q:2L~pFC-wA3/mG.wxr9hdbJHBd$xhU{shE:jisxN^A%}oQ' );
define( 'LOGGED_IN_KEY',     '$kAeCk+uvOV)=OVDXje_?SP@P2WA ys{)BIGWbRY^@yp$OhQ7xD~&%Os^a,g=W(g' );
define( 'NONCE_KEY',         'o`>WD|.poQJRAU34I.4g,g_<bN<s8a  RT2ZdmrxRa3 }i7iB^=bJGT4o:Mhe;D?' );
define( 'AUTH_SALT',         'Cq/NsB[D51]jHXAz*P`4K0e>d,%DIDN(E}M2@-PSe5@2$5qpGEuH3p>r(Y4vk1yl' );
define( 'SECURE_AUTH_SALT',  'jvMeQ{dxK0[zG^Ld<Yqq4/&Ta>$)Cb]]4dL`@]<DB/2P0^(Ov:LRfy|IfW&{Wf8>' );
define( 'LOGGED_IN_SALT',    'X,$uG(OcHaQFjrw@:k5Tj4.H|dXOd6]Wjvn#CVF%G.[Z[FOk2r]5eXO2rB@B(B30' );
define( 'NONCE_SALT',        'SNnFw;H8(N)Q=7;8pCJK 1v?@ ,6YIG<q|@1>?tY-OMLs=]CA_MrM`z0B+7wwHRB' );
define( 'WP_CACHE_KEY_SALT', 'hMGk*y%lI;dOME6C;dJ%./qH+TN^)cDf(h[Dv;$Mum~2X@0dL&~(XV8Z#V<h;%n ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
