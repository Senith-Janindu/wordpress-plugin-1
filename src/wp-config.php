<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'wp-mysql' );

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
define( 'AUTH_KEY',         'O;t=iFQ_1:O}MkDj6iv.u=fprq2[EXS(5jMMBA>1Cwt=b*R,S>Vzt{QS){I)~P^9' );
define( 'SECURE_AUTH_KEY',  '$GwG,%p3aq~^VbS6{2ER/P;OZ{:Cdyh@I?C2Dm8y]4O;^ YlB3TVHx]kA#>ymR5t' );
define( 'LOGGED_IN_KEY',    'T}G0b>~3Hjs~-}+x=N|s>A1fFt99}$m{09T2]BE{s4woaM7pVY$ZWBkz62r^*bv7' );
define( 'NONCE_KEY',        'nM^SJC%3vpHEO<$w^fN>$@a3.)[+lcxx:X{.;x!Q,DbQ8-3inOBk&jgyAz/-hvLY' );
define( 'AUTH_SALT',        'wNJWq8L,-]3BV(aAD&[Q|/7gwkD?%$9v#;4`F2iDx?c :;WETSh^%qw*@b0#YSV2' );
define( 'SECURE_AUTH_SALT', 'MjXZ_<KSsOpT4/|?|y5o_FiGT_5}:K}Zb*c):7~R_OzPLL5r+;1Fu*w=;O;~5h52' );
define( 'LOGGED_IN_SALT',   ';`o=YIQUedjEmK7F{WY6Or;m uD5(o?ZeQNh9;l]?k-&.XTpK(/jOa.Nxk]O`J(@' );
define( 'NONCE_SALT',       'GeG|)0BE#V+}B=YfI7-#W_0LltF#S~&)/N44a`+*6q--|,(s/9rE/s1V^n9T#taS' );

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
