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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '5Jog(78nHiZbz%{tLJ_ iRrIFb$j>nEEgDAZaTV&I_(4AmPY>5-,2^I.Ka3N2Jo`' );
define( 'SECURE_AUTH_KEY',  ')wn(u~GRE|9LYsjKWu/-J}%^M0U|z|FUeflZp]G2~_WOf/|bKxnt[=oEy$RuBb]w' );
define( 'LOGGED_IN_KEY',    '-Mdn-#Zv?_)KMLzI^!+-]?QKP968Ra6qQT JRov%J5)TEZ+!d+vlM_qaK9qO~:9]' );
define( 'NONCE_KEY',        'A)gYnV1mfvasxX@DI&Ox]KJ8blpR^} 3F}gH3]Qpgc8>-:7E/fD1?D$$R>G[`q4a' );
define( 'AUTH_SALT',        'w,WGF0 _Yc!LMs*3!@9*hr&iHIaS+_SA(|+}HoV41hgiDF<D0--zpA# ie:;L}:l' );
define( 'SECURE_AUTH_SALT', '|yHxhL7%67xz83~DpkP+%PxQm>E#0u)d/%DLw:!qx~6q%Bp kggoXTYRle%o,L]v' );
define( 'LOGGED_IN_SALT',   '?]ZuQ~X!s^/7o%-d/#vPWS|u%VxF42oRRu.v0<!@3])9~fC2~eMZU3<U&C}ab5,b' );
define( 'NONCE_SALT',       'e;|<T=)5r6>!& INe`xcAC`:Uht!>;^?M +T~IP<yQ_C<!6bc0nNkMaga9QP@|<%' );

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
