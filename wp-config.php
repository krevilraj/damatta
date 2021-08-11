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
define( 'DB_NAME', 'damatta' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'JMyv8!HAi-;wy#b|N*dWM){--Q2.FG9A`|sZgEGHq @r7SlXBHe+9NcrN)ux$7XF' );
define( 'SECURE_AUTH_KEY',  'YTy|3!FYKN|0HNI+guf2M}<HvK){xdCvZW{n4 siN)c8+)Ba+?@pN[x#}f)yti/@' );
define( 'LOGGED_IN_KEY',    'WbZZ&Qx3M jTc `2yeZ1#U]Jeg};v|r%(sH(0&C162uJ&_{fx;YzF_!fw)SZ57cs' );
define( 'NONCE_KEY',        'r~Wm2V}Fy-/~aovDioe!9GJ^&P$x3uRH!AC1KRP+ <_=1laXR@{/%Sg&T6R_u8{`' );
define( 'AUTH_SALT',        'y{qTpNq,x]A,VJVPU11NSezYUf}>8]{;<)g[p(=,o-;@Zn]4| ?({uy~eJKR8aaF' );
define( 'SECURE_AUTH_SALT', 'Z.,A4=H)=gaj~*KZ;jXqzBz`^Csg&*2|v~yg jysJ_9d!US`~3/8)5oB?j[y,82V' );
define( 'LOGGED_IN_SALT',   'PcWIND4wmCh0BaVu[oXt%!,:E_6~MJXo9?Je^8@b=X/V5,0(y{d|fify(D(gSY(;' );
define( 'NONCE_SALT',       'yQ;+q6nec<Mh/xYK-B=S(yHg|PQZuR2JO~*}vlE;j3g:</5^<]4YP1}e}/pz}ypQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dm_';

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
