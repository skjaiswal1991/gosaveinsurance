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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gosaveinsurance' );

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
define( 'AUTH_KEY',         '7<S>@x,d*ge1xd5V(FY6FS m}fr=^U&dqPEgFvzB;yh(/?`m^[glkfffcL,$ Rp@' );
define( 'SECURE_AUTH_KEY',  '}]gm)rxXq#2PM$_*n..*)wp&_O!Mdy6n)Mc93(ao7?hLIcxIxF6J=oy-.&De$mgW' );
define( 'LOGGED_IN_KEY',    'f0 59@aA]Q*:scEJbk{Qp=-//oz#Xqcj@Sn^RrLlwm9$+pUkYs>{iykEn(9bp?#z' );
define( 'NONCE_KEY',        '&)Tc <@W#%#_V!-w>0lN49W-{Nb~-[$&2&OMg6wlghXERG]6/6l`x?)&X#+bS9dJ' );
define( 'AUTH_SALT',        'jbog,jMyUo~K,i!f,XK3~Md+LqX1]bcJmH )KQ~_17ZqfC?A#K?~Y)GTJchGQcsT' );
define( 'SECURE_AUTH_SALT', '9=rCs`sT5g]`T51Z1^*,_}A/QUS]UC5bhSQsBI>7y]$VGZ}?o;mw^RC(D!wcq[$^' );
define( 'LOGGED_IN_SALT',   'vRUn==xuP{[<2@)]S!P!.Aqy{9*j{!fL#rhgNC*B1P1eK#qd$C90}K]oYk`36xvy' );
define( 'NONCE_SALT',       'CF:^5))4$-9<d UY[,80m|S9i$pg1f;^!f3|aq$}mInm/Fy{zZE]%8KdC4zmT]C&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'insurance_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
