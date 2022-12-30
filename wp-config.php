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
define( 'DB_NAME', 'bigstore' );

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
define( 'AUTH_KEY',         'mIF<=>{n ]<Ld^W9DL`5Gg$5B6]c|T#!RQ26l_T7_^d H1eFqE2A +]m(mfSe1ov' );
define( 'SECURE_AUTH_KEY',  'AR<1--T67]vg$!LWI ].7>EfR/^d<P=CpI_E`BZu],fuB/4g=#6+R*&c!{`NHa-#' );
define( 'LOGGED_IN_KEY',    'pcq9NA?#^O!DkN(d)q9XCz^6H|7aFu2Hdnn~0]JHYv3I}nS)`}dp9_q2})6y*=y$' );
define( 'NONCE_KEY',        'eJo;b6cdW49`UYzTLOb_?)Kk(k5NrS`@L@AH&he&<Uip$4ltT#(y2W/8[SW}[YSE' );
define( 'AUTH_SALT',        '.z~#]r>F%%;qG@naEEo%/VR4F@]E=a&IeWIUuk[htf_T4[|P91+U,#c_1@Pad-3*' );
define( 'SECURE_AUTH_SALT', 'H^HbucG990:^Rng|M7G#O( *1HMTj ~?Mxi]S1sDe6?M9wZoZV0k^kNn6/>5nB$E' );
define( 'LOGGED_IN_SALT',   'i Yc2h=!1E^K~w%nX&?=3u<UNcPXgxRP67Ivx!2dYqKq{?({=Z{$ L*0gN[ukRf`' );
define( 'NONCE_SALT',       'Z7zu>W:.ZXl}(?N5r<Xp:&,}Oraw;. fI!)Taw5y!ZfJB&Zz8ve>h`qvJ2l^OAr ' );

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
