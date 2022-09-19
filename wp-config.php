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
define( 'DB_NAME', 'haircare' );

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
define( 'AUTH_KEY',         'akvdqfb5xiiksuhimvnjovogxp7f9wnsko3v6rofd8ngrgn83bhxkmlt6q2bu8fc' );
define( 'SECURE_AUTH_KEY',  '6oc4pqrkjf41kct0mm9u5xhbvlzdgk65drjgxoek3khyziqf8ngxk3fbzskvvo8r' );
define( 'LOGGED_IN_KEY',    'rtcgmxu3xbfn5zshzyjsrk8cogcrhuyjudlyrkxggkpy8xb2clw26guqmiwhdiab' );
define( 'NONCE_KEY',        'jgp68a4boddhpj23wrjmruuymvmzdsjc4nnbap6bmybwbkwvn9cqkaakrf6d4ijv' );
define( 'AUTH_SALT',        'rqbx1tw76eimcbifcqrmfroiq84zzkig1io6gyxmsb4j9kp5cxgv5k4lrp3lgr7n' );
define( 'SECURE_AUTH_SALT', 'eiyk4molvh1mhnev5taxhbymvyvuxfixxinrz0e7bfgotoaznhntlactsr2g7y7e' );
define( 'LOGGED_IN_SALT',   'tcfu7b0zqwmblvps0slvelhlzdswzrccc13ji4earbgsyhh3bvd5nkikmbtkdype' );
define( 'NONCE_SALT',       'mwu1vhbudb2ggxgd8rhtizvcwycv2wirgjqmsvd9jaz0dmecremruqq2dslf2rcd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdj_';

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
