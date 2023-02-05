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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'U/U1p<:uwwKC!KuZ~y)&[cN7FB/Slew)JC_ny@:[t1>S.?Mi+XFD*X! +u,|#:Y^' );
define( 'SECURE_AUTH_KEY',  'm2XuE(BlNTZIr+(8LeJ5Ct[.c<Ww]<F]+eA(vduZaliVg3oV=p!,sZ|tard+9smJ' );
define( 'LOGGED_IN_KEY',    '0k3ga?olhz5g?-;1C,h?rZ:QIE:jqi.:F*+::&%Ev~j)=9Bz=_OOnJ2f,>f{9$2D' );
define( 'NONCE_KEY',        'un_p3f^wDj)}PUVnbfM`3J2`<ri^F 2-NQ?EE@mAONXT=GLhkD!]EaIe0NuQa(HK' );
define( 'AUTH_SALT',        'yKDEU@bYEX{F%<UV&@j%q%6^d`XhQD+W1aC[0Os$u:xcw3u66_1JLq3[AhBZM&Nq' );
define( 'SECURE_AUTH_SALT', '%;Qhe:1S~7&IP$BzWtDiFtv<HR^G=B1Zs]_YX+@I}^q6R9H@}[E&T_pt,Bsab{`2' );
define( 'LOGGED_IN_SALT',   '(,%Zntvz9rfSMULT_3dc,R3QP)bt-;z)I~MO:mO:UdG:?T@4SJY^y6Au$y*29[oN' );
define( 'NONCE_SALT',       'p~e2ccV=c8U/hCxYP|81mi6Wf}/+Kw[~v:X-%92B$v`HEHi0.?R^ct)rn7pOoJ(x' );

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
