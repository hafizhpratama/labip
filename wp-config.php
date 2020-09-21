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
define( 'DB_NAME', 'labip' );

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
define( 'AUTH_KEY',         'aLdR7j)aHL|a2j<CxcGMUb@3T<f({_-;C!g)|T2*D-DrOlsB@&XNZxf@&;Nn8fQ)' );
define( 'SECURE_AUTH_KEY',  ']S0!&3tuZKX?6&squL4>}(<PAyiK#py*&zhcb+T<.nmB1b(+ppm@e&Q.|<mqRx>f' );
define( 'LOGGED_IN_KEY',    'Ur!e7w 3/)I$DXTl[I58|jpzlVV%c/sdgK}q$[%n)2a |^curxJ FH(9u[O&0C*#' );
define( 'NONCE_KEY',        'utHrVo7IY9q<>[Ws(B*vN2`9n:RM(!7p?Ve1JN?atOhvEG[}/Kng}WUM=I-/M8Yl' );
define( 'AUTH_SALT',        'RAZqjtvZ2L7(}ZW lso*DV`-=>PvW)zS(&`e5oR9MCG9 RjK/?B[m}fAF4k|mEvO' );
define( 'SECURE_AUTH_SALT', '!AxGSL6hmpkdvFT(=Q`^d7<S|9HyD65^e[BjASk}!z^J}z|kC3y$$W!P.CgHCBVK' );
define( 'LOGGED_IN_SALT',   'L0Q%O$f<rc(,?ki,3e0 G/73(,_P[s&@t1+>VYs)vc7H8,l:QTZC}jg!i|JPgnY/' );
define( 'NONCE_SALT',       'KiHS?356^;CM2S9ng=lv|`azN@`|G.[jf4)-f/f(ksFC[NO50q END%&nWOfoe6m' );

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
