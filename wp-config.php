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
define( 'DB_NAME', 'wordpress_demo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'IQ~b/G1u3LVj]q4[I,[anp=:AIdU<Xete@8LVl229g<{&sA0#QM[W5:~|hsxmvlE' );
define( 'SECURE_AUTH_KEY',  'Bzqp5<y#Fp}0xk*RcHzhG^!mtw0uf{.G$<|RN/:Hpt4R?UPL~%rzA,.~;5Yap$%&' );
define( 'LOGGED_IN_KEY',    '`nivh{ZlgejWn95<wuJ~cJ28a&k0%lNaXMYKF~6dR) W[zxn5+W51wRQ98Vo#=P^' );
define( 'NONCE_KEY',        'LEh^)RkB]:u+:Y7u M&$|!v&}7;;E<$+c|a9{C3M@Zs>4[xdveB.gqX| P^e0{3W' );
define( 'AUTH_SALT',        ')7ugsOT%<b5,hYP,Iihq/&S0H7,:RMhjg3=N[9e/~CuV.idL{PS_5Ej)J9a`f@ZA' );
define( 'SECURE_AUTH_SALT', 'OA;G(x&TS><>PtWXQ:#nrfwfCksnbE_f1-Zej*e9EnPEK*nJJ==v9-Cn1mS0b<60' );
define( 'LOGGED_IN_SALT',   'u{k//!r4MMwGFqQ3cAL)[jj| PRu*AXx/6)@,,vMt}b:gx%v`(^@w+)gs-OcgIrE' );
define( 'NONCE_SALT',       'T3<9),?9:f@tvLnNiK@b4IT[^isWn>}tGFA-]Z`nw[qw}]pEXjEMCcysj6Gn/Si(' );

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
