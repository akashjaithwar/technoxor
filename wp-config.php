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
define( 'DB_NAME', 'technoxor' );

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
define( 'AUTH_KEY',         '8aI9c_K3E&y>Ik4Z *+ Mf8-K:W}j0>-pY%}%!<_*> C+jgzuO>,o EClICK%=jd' );
define( 'SECURE_AUTH_KEY',  'HA+bkv(+kSnwr/0!V{M={RXq7#l-dZ<*O/g2Rrb,f`:OM)pM*KVGcw|Bjj _Dbrw' );
define( 'LOGGED_IN_KEY',    ';s|^Mb<a|{<;LXyiV6R8.r%Bx7y#[wZJEJR>A^s0E8$<G:-v4)Z{YV<=O;P ciA?' );
define( 'NONCE_KEY',        'hG.Z]/G.P?O8KK+e#K5UypeeTk8hN#Bor?D9y-~&~X./L~=O-4~X:3q kdT9HGe*' );
define( 'AUTH_SALT',        '5;U{{SRl$s;9_U.K#+)y]I|>3Ig-6d/=V:AlxCPkvsJ2O_*z*`-M;b&fyFMdBs,7' );
define( 'SECURE_AUTH_SALT', 'T7Dk-Df[Ee_d6/IMRX}w+fKOjKmBhvU%sF(!`X>i3urov8JXUPx&KwsJm=I&topb' );
define( 'LOGGED_IN_SALT',   's/:5,Oz<]]D=|(Yi@s-d#/<,DA@pm,p!HlKrNq+{{3kE9n%Y|lHfn.K_K~E@nu-*' );
define( 'NONCE_SALT',       'L&yX#&K$[EbVe x^mel]vh=0sT#Q?ITs8swl_@Z*G`OHj8N9~;Rulo#sbg^MYy_5' );

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
