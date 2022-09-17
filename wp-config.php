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
define( 'DB_NAME', 'vinhomes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '1Y?3GfAV[<41nq_-Hl4^`04eZ:d9^_pw%msRj}H&2rMkzidYv&Wbjw8Jzt|T OB@' );
define( 'SECURE_AUTH_KEY',  '=2tLI_z`{*h;o*2p o@u*yE]~-j#5Xsj-OC%Gho-bsU,|?~16Lp5bQ@ktbL+%Use' );
define( 'LOGGED_IN_KEY',    'w<~_];R.Qbege6HY+-w{WPOc]5Fb^$pdZ1u>`ALal^R,@UKTUwyiM?;t|ctb;E1?' );
define( 'NONCE_KEY',        'H8ZuUgQ7Uv2(F0KNrO?|{?dr ~kmQV$5j?CbkPd3*Q`a]?~@JPzJOSQ.>+ge$h9E' );
define( 'AUTH_SALT',        'f+dNM%M,%iZB&=}I|VxSza$g!hF]GBjrD,qXw/baTc:0d3nHcZi=BD.pNq<]IME5' );
define( 'SECURE_AUTH_SALT', 'SQ8Etb=GxC!7RWNSp,}hTX}hG9ykcnY*a{?#<%Yl.$y.9*rgY}|=a(;Bm3+(=#(_' );
define( 'LOGGED_IN_SALT',   'Kd~<Im4|}P&}9lq{$UyfK;NJcA6N5Ghe?~OWoNNjgXcdj.<e+V>O6Wl}9guKam h' );
define( 'NONCE_SALT',       'A/ODZ(Nj37Sdt23i7qbbuHE2fMA)pv}6YvKn*;DXk5bP(r9nXmq9y~y!03G`w!L|' );

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
