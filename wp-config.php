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
define( 'DB_NAME', 'leciestech' );

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
define( 'AUTH_KEY',         'J01K**2s}W,~K -bkS^J!+i}K pDD73Z`Yi?~w46W}s7|f;Gj1v<}p{z7hWUrxCz' );
define( 'SECURE_AUTH_KEY',  'd/1gKlIv/((Ygvaus0@E=G6# vmOZ779z=X]%puhxgvZ32U7r:nh`cy{+W_N&H6N' );
define( 'LOGGED_IN_KEY',    '600odrh178gYkD{E MLS|h3w^%G):Kzow>M`P^Q188mSWh#HIRy4f#FO8,]7:QEe' );
define( 'NONCE_KEY',        'wZ]?M080i`$7g/|yTJ6OWb;P$&,^cL,$~t,BDK,Q*{%vETqY8WJ%v5NWE^:N0,4C' );
define( 'AUTH_SALT',        's,akz={D=,{;&l9zC4L:j99lG1MkbKua/R-x#<ph8[T2,==7TF~|cq#{5h;/q~yL' );
define( 'SECURE_AUTH_SALT', 'qHk+z.[8;=^bW;&MZRUZp*g6+-j+X5<D+c-5,_|f&&qLPbx|9JM()1b,K@-4[NI#' );
define( 'LOGGED_IN_SALT',   'gW:t.ZRJ4a$(,b.ld|=E`<ya&)}66S~u(.X#Hjk.e57^#e;@&E?~asD}];$@~Y;k' );
define( 'NONCE_SALT',       'NmyBD{im;1hugXr3Lqi`LT9{@%)D+wbklKqdo.p]oZ-oS#Rg;Wy4arPDXExtU|W=' );

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
