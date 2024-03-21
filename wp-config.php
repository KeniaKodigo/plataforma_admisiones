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
define( 'DB_NAME', 'bd_plataforma' );

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
define( 'AUTH_KEY',         '=F`A*:`b{Lw8os%p$fc0~O[Q,RXLKoDhCN?w6sia-Q&~m&YmMv]r$Puo5KZ>YF:A' );
define( 'SECURE_AUTH_KEY',  'i%um}p,7ze4n=E9O7pvRi!iG/l)}A^V@q V(^1T71+jR{D,FpH+@_Q9^8L$f3SKR' );
define( 'LOGGED_IN_KEY',    'x.4!:jS]ac1KN-!a`|}XsP^PWdtzJKcSckQF;wBiTVEQD9iez>+b!IL^`n &*dVC' );
define( 'NONCE_KEY',        'GC3^xE7isOH*70c1)uRZ-ez%XIuBgym@m9 pc-0s7vje-nm8u{RUEUmW*>C[=L23' );
define( 'AUTH_SALT',        'aZcD`ttj0?)+TdRv2+YcG$0DT[92k6=hF{XO{rHnA}Qif~L%H3^0nq.L)O7AH|s%' );
define( 'SECURE_AUTH_SALT', 'F0Q[lBbkz.,nims?TA9hdJ(&r,$kITIZn; #9P~e#:JpYt9y,-fRS~1CO~(^n%P(' );
define( 'LOGGED_IN_SALT',   'SkaT~OuhlYS5e?Yr lEBK=R`;=HHksuPiYedXXDy]f<68Qp<$T+;;r@):[DjLX@c' );
define( 'NONCE_SALT',       'iyp!uN=behI{A%{rr;y^RVB~gNX1AuSOYh^2[ 2z>w ]Nw$NHeh5VaJZXyJPa20n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admisiones';

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
