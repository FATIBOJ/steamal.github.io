<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         '{H1DH0@(}hu)7LY3a5tk]a[~BKhr$yM#FxgM4&LnzhD5.iPRF>my$fpe}6pbV&S~' );
define( 'SECURE_AUTH_KEY',  'BF!JXt_3&o?bVlZj@`hkFi[|?Pom4EKNPM0K ?y8$#hA 7u}vgm1jS9OQVPq,Ni3' );
define( 'LOGGED_IN_KEY',    'HF[Dcu(?-xghOzsCnUj}I3^x9q}wEq{#S6ivjKpR6#vD`.{l$0RUP`3jFgPMke<i' );
define( 'NONCE_KEY',        'hB5Pw#Llm.~ci7?-#|R[yFlDEOG6=D>Y1zjLYng`uNI_+ GY}EpJ$v97^ScZlv+U' );
define( 'AUTH_SALT',        '>E0Zia~FO97N.W=Q)n_HE55i` >Smyn>q}1TsD9wKP!@&T<e>p^N7<vGTN{qctHd' );
define( 'SECURE_AUTH_SALT', '0<A`B!~s#a{p2O:g(nIFK/<tzqN)VE~K{/]rS!-Nc18*1JQV?z7PR)~pb9Ijx|_;' );
define( 'LOGGED_IN_SALT',   'w]?Jtj,E~U`y{AC sv9xs[)0IxDwgFQ?Tp~ 8laiWFTOkQM+/Y_33EzMrEd-8_hT' );
define( 'NONCE_SALT',       '0eOgD~)Alg~=&VT51Xt`DCcg m)p|,u?Bx5UrX2KC=5n.NcEI%PtY{?/KJ!Z~Ga*' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
