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
define( 'DB_NAME', 'vehica' );

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
define( 'AUTH_KEY',         'vgFnjHWk5DLea7cI8k5srrWOBOnj08rItC6oIS5oDZwxLm9cUURER5ok6nLdnz85' );
define( 'SECURE_AUTH_KEY',  'yL8zP3KB624JqW2xNcueZVzBdWgJjdRtIdHCqVSXY1lJ3ETg391BXYiJl0ah89Ve' );
define( 'LOGGED_IN_KEY',    'POrP29l67FkSyxMqfhViktfttqrI7WTCPDUWZoSLa21WY9ACENQXZyEhRJS7pd8c' );
define( 'NONCE_KEY',        'ugWFdj5m5aL7hKRPHeiYKx0dpbZ8OCzgGl3WD42ajSfIAiLAwtHOMTdKsEc9YQzC' );
define( 'AUTH_SALT',        'co8FeLu48ZYwxopt31MosmeGFd7FrHAmm2AY6CyNssxD21HMgQRBoXaUyrKJUUMh' );
define( 'SECURE_AUTH_SALT', 'FpulOL9OtzCfiiy7cxxFG0rGVwX9WEDRWm1o2IIkFBkgt5ERvAAOTIEByBbijkh2' );
define( 'LOGGED_IN_SALT',   'R5ETjka9KfRJpfy49rIiX13KnkKrnKnffoDcHtuv1pLjPcNwk5Y9xq1L3yGktv3j' );
define( 'NONCE_SALT',       'XGRYRgF6aWmmzwn0i8xY7g1SZndtWLLf6q9WylvsgHYmByh1kOFQhrgwVnvHCngD' );

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
