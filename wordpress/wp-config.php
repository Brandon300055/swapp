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
define( 'DB_NAME', 'swapp' );

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
define( 'AUTH_KEY',         'bKJ$OAh;4#CF)/U!scZf48R3:([SXBBQJ)u)FY>Wi8hOn*=y+Iks^mh@wT|oLFsA' );
define( 'SECURE_AUTH_KEY',  'DaP<PE:X[;q{J6!CfejRJa-+M<y)g]LzbZkzcd`a w0Ao/3zCFj#*w.8BT_Oz1V8' );
define( 'LOGGED_IN_KEY',    'E- [LHNFwikj-,ZCs;3S.MSJ?HA&Yccij),%?R_6T(ia2ZF<WN %dl)]Do591SsL' );
define( 'NONCE_KEY',        'uT)a[yS38@_$@0qIowxAbEA-o}:+7UJV7@`kn<xN|Uzs2t:r7>Fmn.t34O5x:sX}' );
define( 'AUTH_SALT',        'm79S(>R6mAl?}Wl7BMz!~|9zNq]v4xqRLv9Z#/cR*Ly8[DPmNA[fy,gs?h3Ulnr6' );
define( 'SECURE_AUTH_SALT', 'OZKr^ufO[*s}>T,Q#[/{.0%-y@hE=>%_2/+vM9YY2y*)>?yJT<fs9/k< 7Z%%Kc&' );
define( 'LOGGED_IN_SALT',   '|M.vHN} 0o~E&^h.w~z&<u/!(-A*@s^$YKHKG~{+~,y n=8H[NIx25ha) &MKy`T' );
define( 'NONCE_SALT',       'fk;htrF/<W(Y/zW2tW|6#LBKs[zUCEuq+~HBM<cJ4&Wg2P4W12Za7b$]tfDP4?K=' );

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
