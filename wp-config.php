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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'komisariat_ti' );

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
define( 'AUTH_KEY',         'EJkfWzK~?=Z5E=`o1/<O4M2(|okSG`Y1D672f!yJ/zugxjseR}at:h]H)r5g(!Tn' );
define( 'SECURE_AUTH_KEY',  'UblW(=k6~*Xh}PevNZbB Rx{G=HD2.}k8iFq.QR*[tq)>@l-$oX M_[GwK,%`<kj' );
define( 'LOGGED_IN_KEY',    '|v;`p5.T/jx~_b<V,Y.Qqc=ix$6{t1jj(8C[EnA#I%xej:mwyN`X@TeuLJ2r=87$' );
define( 'NONCE_KEY',        ')s.7AmkEl9Vl:E=cpQRA@5XJc&c@b~B#RD~&]fY3],!lQOiBXpaMl]]*kUt6JW]&' );
define( 'AUTH_SALT',        '8b3^N74|3UiK-.$V1.p-G-sH~2#B-(Wzqza~]#|NJ4Y!_|)^Lz=5dUv~_]-K>}){' );
define( 'SECURE_AUTH_SALT', 'Ut)OZ(${0DZcgV2GK5 =t:OYDiB#6r+oTMXZJ>d9 8zL&%HFxAG2l=T?[A>hz!DH' );
define( 'LOGGED_IN_SALT',   ':+4yUw^t+UKf|0~B;j>]FK.wW=Eo3{,=MTzp?[st4!S*Vw?P&?9nLEw_}|OPRdku' );
define( 'NONCE_SALT',       '$%qFKUcLYck?!V&_GFM&P9*/Y*@tr ?p3zx5J qsGM: {RL:L4XeDG25+Q]nIv!H' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'db_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
