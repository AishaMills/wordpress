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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '}~n)5?h5K_/Ybr+.[}SpzAQJ<A(g8)UsrlCQT9_w>)uIa4<_J uG.l:,#6kF8$<%' );
define( 'SECURE_AUTH_KEY',  'x}yRr_aWio%qKj8=z9FFM-~x[{1Qte55hQ{4#$zx:8mY@72+TW7 [JWXJU3fiSz/' );
define( 'LOGGED_IN_KEY',    'kb[oeG8-)Zxj)6.v)SEL&LHx.5])+XgNug6FK%Vw=YT`HvQf%&7wj- `w jo_`4t' );
define( 'NONCE_KEY',        '`&a&_.8AXdxOwb(k++j)c/TE|l)gpIXsN8}^ESEM>Gq<xTAo(2l^S=L!8)!aVa|s' );
define( 'AUTH_SALT',        '!V=U?07dRnTC Hkv=zF0Py7/I@_2x4[:p9!kPLo$]t6t9AN>of}T8B4zMAbz~>W_' );
define( 'SECURE_AUTH_SALT', 'G!LmO[5pO~.y2boe9!B:+^6eC7QJ#mIT/|EaFd3|hkZK`Y}d`@&;.(R}lQ(go,Pr' );
define( 'LOGGED_IN_SALT',   'v&+nk]Z$$J3V&M.@18tlfRa5L1Ij4S@G6ndu@|7rQ-m467Cw2mQhY}4>G*tTTbcc' );
define( 'NONCE_SALT',       'U7g{3)^XNVQu[!-E]y-YiIe~K:>Yk3oH*Werp P<3}_P|w1By?9:@:6!k.P4oL1*' );

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
