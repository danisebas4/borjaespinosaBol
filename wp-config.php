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
define( 'DB_NAME', 'borjaespinosaBol' );

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
define( 'AUTH_KEY',         'ef5>4_R_>Ng%M5OmP= J//v6! 2q?xRt(vGMmdea*UX!poXQ$S(Zo>516 &MFWD<' );
define( 'SECURE_AUTH_KEY',  '$+Y`2XAM8rB!T>_8rOipQC.7$OO`|In6bnO;3Mi^qG+DmE]11nNq=w]vT`F0lT;(' );
define( 'LOGGED_IN_KEY',    'a{~#n<v>~WvlyACG:fAE_JOSL;<w&P`/GNm7B6t-]&i8@Eu^b^P.q|5cUnlp}5!W' );
define( 'NONCE_KEY',        '5cEW&7PNUGjitna2pN(l N0<p)+#v,/%t|>3:%;bmQU>SR7b&SM1!7JfVZt`p1 >' );
define( 'AUTH_SALT',        'mB7Txuz7o[H-7ZeO0d;05t-(2ES$lXq>Y5Hn2=_QkPVP?_(|x$S$K{/wFizrC7a#' );
define( 'SECURE_AUTH_SALT', 'Fm>rpgmfL/OnIzBG4:baGQd3O!T1kKk:[U#bvnQo)m)e0,mA^m?l/l-o-)1c|rCO' );
define( 'LOGGED_IN_SALT',   '!]tYJ0^,a]cP28i($[L*SY8D,Acr>>Obi<tI3$/hfp[OrPn)s<NB02@8Mcf.f!z^' );
define( 'NONCE_SALT',       '4hHO)Te Bu-djK[h`9k9^gMu|S9uf}|7DWL?w,mVOC3hBG0fr$}%aAf?A`@iA^|M' );

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
