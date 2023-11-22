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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bookshop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'i89xF+us X>4b=y_f<FU/O,g7zDC<SqrbiPgFsBb$)CAO[W?d47Rhg:F:i2PwfVU' );
define( 'SECURE_AUTH_KEY',  'K)fL8nD-6dY7pG)p/bLU7/cZ&|G{[jp7Av0-DeRXs3R(X4UtA8H<KC3fOKQgzNlU' );
define( 'LOGGED_IN_KEY',    '$T;%`-@_0%lx0nDSwprs:$FM.tte=:QsR~sRXmNxc$N8  }(Zcax8I V{tm.&h^L' );
define( 'NONCE_KEY',        ':zupdYvv/^G9C~R}DL{Yk]4z?%2/^0`rk~]%b&`cmNY%XGA+55a3dpeXBROroB[-' );
define( 'AUTH_SALT',        'Ffk>=,Ny(3.>V}+F?M@N]n$Q v[u2Kzq`g<a_hwO:~4@}3Ne}T)2J<3TP}SeL$AR' );
define( 'SECURE_AUTH_SALT', 'zn-/c:]k%THwur~yuxjW$|nhG8p3~Z5vYq`1{iD<e0<Fy@Hkzd6~{,[2uR<]k,0+' );
define( 'LOGGED_IN_SALT',   '8E674UJFX,+>>_Jj 4a->i:hf7Jc5rfh>0JHIwlgMHt.H ef[@,V:+ZIn`xz=c]W' );
define( 'NONCE_SALT',       'E!y?c{. UC|;wbd(F3VZ1K4ija7$9Q+z-xu{*QO/Pbu8xQ#O3z~1pRxg<ov!zo]+' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
