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
define( 'DB_NAME', 'agency' );

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
define( 'AUTH_KEY',         '@av(%Ezg^h)%_lcG{N?MFLTF0<+91Y|@C[RpFyt/:+=HqLG(7KfYTIO{L0/eN<Gv' );
define( 'SECURE_AUTH_KEY',  '(5~@Q7x 20%:`ctC,J;|{@ !Z;T!TQYRJrco:mJ(*CmB;5qu!7?hS7| 35hn!lfo' );
define( 'LOGGED_IN_KEY',    'ZbPFQlpL#;h!x~=u=T;NBN.$Ncej29VPoVr|(epd0Q^SCJunnh>L=n]d(D3,/RG1' );
define( 'NONCE_KEY',        '[c>b.a^&$^+>OOwf=+p||sNY?/{9Qt~]7]RZlFzb@kUn0}|heBKCha3R-bO#W:EK' );
define( 'AUTH_SALT',        'd{/DL`XutP?7f>{K7ai__JF7o<x029sz?$+{[vT-EbFgSX]t$>SPQe/0{Q?g}f5q' );
define( 'SECURE_AUTH_SALT', 'zUe*_{&c??m+CvIJ0]wu]=cnN{kpVHgS>]g-lHC=(1Y;=S}g`#64jt$xGc@BlFnX' );
define( 'LOGGED_IN_SALT',   '*iSrh:GI5-g1v)WJ:=eht89!ijVARmHZGu/2nkd(wi]3Ooj!bLb6Kt>vqo5^r9m7' );
define( 'NONCE_SALT',       '!5dDXcP`t2PLvC:om-O-mEiMEd7HTBq%?5nREm-joV}f|#Q;,>(eHZ)([Gz|=%r!' );

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
