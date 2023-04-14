<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'kasia3' );

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
define( 'AUTH_KEY',         'p)lmG/%%zS?Q}lV&@hf#&~)BSpF6jQml>8PA4F8*J:62(,gB#i( ]ci_D1$,u7ct' );
define( 'SECURE_AUTH_KEY',  'dI3-mZ)vK#eHzfGB2QOWW;SK.jL0=@snU.a@W!Od29Z,v+*[c_h}GBS337h^([cI' );
define( 'LOGGED_IN_KEY',    'Z2xLf=JXM)c;s,l9H0#1BU[=Ohm?Xui4*3a}Gv(lsh.hn7}I$B;aQh}*imu1U|#q' );
define( 'NONCE_KEY',        'Y7UxSN,;HDzFh*;|ZHBZ/aM6)g`V1f$6H#9<lk?],q`E,rJus/v6WEk@&/oYRic7' );
define( 'AUTH_SALT',        'E-HB?#3!/kLM_F98MUhz7V4VI&6_;s`*`DaWxg:Ek}FZ2ii6LRra`a(4SrJA?=^1' );
define( 'SECURE_AUTH_SALT', '9#/s@, dE:4`&Zp%<q/ den_,cC`y?A#M?~Lw*O5=f0HJq+`a69b*Mw5f0$_thp|' );
define( 'LOGGED_IN_SALT',   'sXX?D!-bQbotQPF:macVgpTIu>l]hs><`-*p]l9Hl/ekPbO ~YT+`:|6!y}ELWaM' );
define( 'NONCE_SALT',       '  .JaL)%QIer2+Cf6BQCO_]c#y$nu[6*F}r9BF64HL:1^?iD_KiEZmO2K&]Z.& s' );

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
