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
define( 'DB_NAME', 'strona_klaudii_' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'i&b|9K{?;du96yXxUYOjcnj~PyXQJ/-k&iF@r9XJv]kp^_Fr>`P]wHUj*ueT~@xQ' );
define( 'SECURE_AUTH_KEY',  '2,_)%8-|ssj52 xa:%g0Ktasg-R6~:YkN:/Ht*H/b9HE2{#1w3*&PY2d9#=>0``V' );
define( 'LOGGED_IN_KEY',    'm+{M]l]Q[(<aL?a0R!fu9UHg<{1!(*3|?RrhN_PR4u0| !qM9a<V: 0XVQGF=X.j' );
define( 'NONCE_KEY',        'I.D8~hmM`lBmSPyTc;N!8_z}_ukkI4x<^Tq_f(.*HI*q.Ov%|jQa0Blj:(TbQy29' );
define( 'AUTH_SALT',        ']uZpYBU`k(SW[/WvZ8-|BMG%8`7)]/=(sdM<FZAu4os6a+?0Pa5T v6^I`0g@WZl' );
define( 'SECURE_AUTH_SALT', 'xxPtUh20DbEJ&TtF7Yi0;Ui1v9FOI+dk^aoW^*~qDU!)6cM.rw|DUy$JfO%NZ>-4' );
define( 'LOGGED_IN_SALT',   'r|6!(vjp@(XAGc,S2<#5}x<N)SH Yb,4?X]di;J-`bJP5T[0.-D48C5;@:|t_lQK' );
define( 'NONCE_SALT',       '^Kkl3acQ7q(1)ea:t?7HC<18`r}5Ve 5Vup4&oov-/Ysl8*A-7x$/ZwX+`SEA}pu' );

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
