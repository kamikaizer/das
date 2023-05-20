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
define( 'DB_NAME', 'das' );

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
define( 'AUTH_KEY',         'dqqLwco5,ER?-<G/.V%M9pZ?5FEDiNm%KyaA@@ 4$4D?;2{8&iE%C{5SjtsgQwW_' );
define( 'SECURE_AUTH_KEY',  '(%qMOdY7f{5_s,K=!m}HZ%C0o6yYTv>Va~4fjY2QR/qe*yXQ%cuP*lP~ Oinc l,' );
define( 'LOGGED_IN_KEY',    '68*~VR@vq+nHAmF?LTP9vs;?Yh~tYn0.rq(J2G5uSsuz{~?!pA=$ fn^m/kJnUtF' );
define( 'NONCE_KEY',        'Rs!M#efhft<UT,xSTqg<mF~HlqwIXI3`BqKnLr./Z^Fv6K@~K-DE)XJU4wfYStL=' );
define( 'AUTH_SALT',        'ORNL1r3-Jx>eW:h/:{`nD(4&bdf]e&!ENHUwuXueRb5Q9G#hn7YnAjmg7Adyv0TI' );
define( 'SECURE_AUTH_SALT', 'O`Vc{&ut5hE,9aW9t:P_NROXD~ht;)Pot,d+U5%H+[4iZWnS3(sjR Xm;)9@GF)s' );
define( 'LOGGED_IN_SALT',   'Q[_$M],C]2/#l`|O? hmvj!*2<0&[=@2QDn0h0!.!GZh@&.rIwx~bZRDP+aYiilS' );
define( 'NONCE_SALT',       'oE~#*_6[f77_O$mOrJX3v|S2VQL8)W`.Cz;%nEna#XV+-Q%LHp!|]/1]+[&x;KEk' );

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
