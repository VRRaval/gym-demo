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
define( 'DB_NAME', 'elem_demo' );

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
define( 'AUTH_KEY',         'F=/c~~%3m>-/sW-i&g6D(o^fuJ:;8gXuww||l0;9*-kr`3- F^/t_yXic}hiGf]}' );
define( 'SECURE_AUTH_KEY',  'Af0H/.jZrfuG>k34ic~yj22cEhOZC+>?zGj!6|vUr3zn|gjvw@sVz,te#KJ98!>2' );
define( 'LOGGED_IN_KEY',    'dBI$8r:@o@0u$eic_zow/9.&>_rpfbMR!$L3ykzflO@@,NoGs|U#hd#ogVPbi/:|' );
define( 'NONCE_KEY',        '`VpX2|P+PX,H$Y{$gCJw4%Z6@H-~a3vd]8~L`Mxe-l,laDD#O?FoV@*1<7VdTRda' );
define( 'AUTH_SALT',        'b 8]ZP/DDeMlP7tp-l{o_G,g5jc4.#Qs>Aq|DZg?V?x|?xT)SBP`vw-fYvtr|erO' );
define( 'SECURE_AUTH_SALT', 'B]#pwbXW2jqk`u^y5D1vW n$H-OvXR&luzkdRU6&#^evR(KSRR%RUPf}LwTj9jIr' );
define( 'LOGGED_IN_SALT',   '6R0;r1cDC58K&aoNE._;3t(+cB.~&w$0fK+x*=pnt/AT$oVrjN=]nC:ACPD6I~Lb' );
define( 'NONCE_SALT',       'VVVh[Yvyj|J-6&m%gz~Q3.}b_Z@PVv#NPJhHALQCCXWD$6k|m;ssb/gAHzc-H3=o' );

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
