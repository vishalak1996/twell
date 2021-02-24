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
define( 'DB_NAME', 'twell_db' );

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
define( 'AUTH_KEY',         '22`}Cop~V#<uevW-=(4^xEZJtmyFF+2*P?6V2(ckhO(=e*_y}{TnDp}8@e;E;D,(' );
define( 'SECURE_AUTH_KEY',  '%I:jxtN1bpZA^v 9R0rG-?_2g}`*O^t^D<iUVI]CDF0f=2_l:`la>`y$xYOE]4Rw' );
define( 'LOGGED_IN_KEY',    'UAmEf!H(n4eUB4ZdM n$oeqElW]n[qgyp$}L5;pda<.yA8B-UN5g+cOq$bX1>:qG' );
define( 'NONCE_KEY',        'S+;Ln[l|ph&QSBO^(jP_94V,@_rUu1o0SZ~f+cRcZG^cLS(WLj:@&h(aJ?k#os!N' );
define( 'AUTH_SALT',        'TJG3mRR*O!<d[O|:(Mx`vE}fwRPdx1%<Lte{@-R>L7CPN;lMFT.4CAk/!,u&QxE#' );
define( 'SECURE_AUTH_SALT', 'DnU;m|@oF9[j*Nlg`a_7?J%Fzyy)u+^}V~:l$*El.2L5G RSigATWPMwi}vL4+~j' );
define( 'LOGGED_IN_SALT',   '8L:awDdcs{q=f%Bj2A@g]n;R~44>k8g[/sf;iOl{(E9sv`C*JL)y>/09M41X5`+`' );
define( 'NONCE_SALT',       '_C6d7f<y!7`B `lY ;Vm^0*uL6J.OQ=V#)PjMbRh3dEco9GBJ7s^9I_nH;;]oFN{' );

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
