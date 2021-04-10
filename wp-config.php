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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mim' );

/** MySQL database username */
define( 'DB_USER', 'fatemamim' );

/** MySQL database password */
define( 'DB_PASSWORD', '12786sazid' );

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
define( 'AUTH_KEY',         '=T7F3SF@2+bS<5OYKET,]IEaga*FsUH-=p?9^VB.jv-s~Yug)@[yx[u=PAHqfZNw' );
define( 'SECURE_AUTH_KEY',  'c9zZVrh4Buz41tvaTT(<ENu.Au(+hK1O(b7=5c >QQqVKS#&: x|Fbm.H:0dblmk' );
define( 'LOGGED_IN_KEY',    'lftLT8,6O/+/5*kb1pckiqP&!cd%fzXYO5u}{O^k)C&7`ck+v_`v)RqUoBhh`f)T' );
define( 'NONCE_KEY',        '/&v/?RIJIoWs*t g~ANHfI&|As8IV&0&}2g$JUqg4;sr.gM-8KRYJcidwr()EJ0R' );
define( 'AUTH_SALT',        '3g1)CGB4uw1*RWczh9&q`&IgkjQO?aN8D)vNscWP,V$IvAR(3p0E@ >n0Vo7^J<N' );
define( 'SECURE_AUTH_SALT', 'FTSd4t=GB.dQwTb0Ee)|4fGW;<6(U!sc#7=FpsUUoav:trmjb}[l],ESSZ;eA_>|' );
define( 'LOGGED_IN_SALT',   '}(11>#,/YHhYTgJLj%D$31gV/!#h0EKx9H.1.He >J|u;ObXy?PhO>c}`KK&lu<s' );
define( 'NONCE_SALT',       'uC(5 r3=-NEULp![RY1tuvgj@`D%&}rfOYzeV+jraa+)EV-<,e@80MANmZ*neYTH' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
