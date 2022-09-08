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
require_once dirname(__FILE__) . "/vendor/autoload.php";
$dotenv = dotenv\dotenv::createImmutable(__DIR__);
$dotenv->load();

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $_ENV["DB_NAME"] );

/** Database username */
define( 'DB_USER', $_ENV["DB_USER"] );

/** Database password */
define( 'DB_PASSWORD', $_ENV["DB_PASSWORD"] );

/** Database hostname */
define( 'DB_HOST', $_ENV["DB_HOST"] );

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
define( 'AUTH_KEY',         'g4HV|yB8S|z7Af03P+EeYD?]jS9i6oNaxE9`D2Pl5tIof#dj6I~UJ7?n..UCIGi2' );
define( 'SECURE_AUTH_KEY',  'Y>@U|gM6P5:y(Vm1}[3T<RyL%J-Hf{:L/(0XW86vi?@))P#z`d~&Y^#vvV.JEQVi' );
define( 'LOGGED_IN_KEY',    '7G[xxnPJR{9Ga45VhEvDRXvT6k^_6y*}Aj[MwZ.[LOk-$u({$@?klTJ3SKl_+l:N' );
define( 'NONCE_KEY',        'NrLg1iGADRx{H RbAzCmYT!sB7oOAF5rU0+@8Q*%2*y*2fpFNZYQk6!~QzqjJ3[?' );
define( 'AUTH_SALT',        '4G1D0*ukM~car/[aHF7lq_xiKm_.kQ!_ Yi;%:8xquS[Ior3qec}~1i)WNg8;(Z&' );
define( 'SECURE_AUTH_SALT', 'D){Nu,9OD+FgLUoAjaZ&~ympQy1li#.Zn5b4^t<ruisl9hT$I>.IzGEDpIOTC ~F' );
define( 'LOGGED_IN_SALT',   'C4]GWlSc3|W%H)ta#:iR7(jmTKBJ`FRN<_-.(9.uGYM,U-W|c+tb>)M,f9|3)wWn' );
define( 'NONCE_SALT',       'p1V>{ }:2X/*779ETNzQN>-68!s#{J-A4WVzq).p;t&N|o:<i@:`Pi2Uhe_LFFW)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_web21_';

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
