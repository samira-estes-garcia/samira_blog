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
define( 'DB_NAME', 'samira_blog' );

/** MySQL database username */
define( 'DB_USER', 'sestesga7' );

/** MySQL database password */
define( 'DB_PASSWORD', '9f1QwsZkl89!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '[9g1N}U*q#G/{V]XuU7[;I-`d+oL6Yxx7=Mw-X_qMEt[u09-|cAx7d8jn|^nKD/k' );
define( 'SECURE_AUTH_KEY',  'B&~=+BW0gu(dIMFq(cPRv#frZ*OXLiIYayP!;G-[y)9IpU.6.^<m-30X+|<eEOQ<' );
define( 'LOGGED_IN_KEY',    ':NMMt;;[Cuj&Key8a!O89E6hM?-|7x3N]OVtgC6G?I3ntQaJaAD*+SM--8{ksKQ9' );
define( 'NONCE_KEY',        'Y8%[]L fgID=Sdl9ck=lc$mS&&d,jJ-F3:yaVnqlQ*^Kf*-]$n}f#RY%Up,q<J=h' );
define( 'AUTH_SALT',        ';C}f=syCjG>o[4NkL@3vJ]-u[3Dh8JRcwOU^^.Ffy?P92+U7Z|HSwt7_~*5 }[}Z' );
define( 'SECURE_AUTH_SALT', ']MM8kX#nQ|[[nY&ZFU%ZL/qrF =8N12>46a_ELc5_mpQBXX(-$H3A7o$8~d7g$1n' );
define( 'LOGGED_IN_SALT',   'rk8_^pZ^7.0Zu8P!!uEFG<y9OJ_tZUJoEa]*#iodfL&f}N=+^[B:<<5pv:@d9m+k' );
define( 'NONCE_SALT',       'g!f6dQg{6$(Nm._>wIY;zswrv>Q6X(gM@28FOjWMG$Ds5PbV@Ttz<4sx)}TwaU]+' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
