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
define( 'DB_NAME', 'homepage' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'w3dvceDpCKPzgg8HWnJpCL6qMjpEL92vTKFPEbRW3uS5VWW1fcVwZLknsSBxrDR5' );
define( 'SECURE_AUTH_KEY',  'AI4lVOkKDpcDAvF7kTdBAnx2k34VLKbFOYvWCwi8AS5BG36XcjQp9lg7GaZlSiNr' );
define( 'LOGGED_IN_KEY',    'oKaBrdhqeQrUJ1mv8agQmZhLxFsz9J22qjIVqmbj8p7z71dYFDzuZ3HZVZrOQbEM' );
define( 'NONCE_KEY',        'mWZdYRs96yDaJAc30s6VTYXNzYK8MKb176VudT39EJJoCNJzPcxXoxyDpZYeeFqf' );
define( 'AUTH_SALT',        'oMuYhNjh4zCChCwO7z2KHIOxXyCOk0GrBPy7MjgbcLpmX8ZpQtOnDKO1nQKeZCZZ' );
define( 'SECURE_AUTH_SALT', 'WJNVnJvZWKhdVmObHBmR1iGPasKmA2xc9PEt5HMhNSW2or0iOa7Rn9Low34FpQ7p' );
define( 'LOGGED_IN_SALT',   'vG8StFGIOVWNy87ziDHYjTy8omSUQSnYEPKQm5inoZtHOLjaMSol7xIMFfm8Q6eO' );
define( 'NONCE_SALT',       'irOkm9MU5HlxAo3j4vUFEAxpMdtvh0TO5dgPq3akZBEnarBTjweadsuExt166n4D' );

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
