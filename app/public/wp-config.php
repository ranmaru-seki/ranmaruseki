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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ISUMCYQeg2ErA7brg00mD22t0JuPxFHUHXFyY723Rf8o78xdxGkR7jIQSXdBq0FE/fclerOg4HLJh/ZUc2oatg==');
define('SECURE_AUTH_KEY',  'sjKBeelI30MrHZ67Jkr+iHjuOEJWq5jwyn7pRkKViI/uo0Gv6yAYRWDBjWMMcOIJNw/U2TcJGt4oRxsrdKHYxg==');
define('LOGGED_IN_KEY',    'UDMQxEgDE9hMoQLc53DaPNBWTm9IJXbDcSfkvGD7eFDK7Pibo1fg2UMYln3S35cGLSopc8ULaAHn27fUcWnDBg==');
define('NONCE_KEY',        'lH4EW8yXbqBwx2LHbLrJPZb6spgKstloNCqggY4mJDpTJ21z886Xh5UFYM2WaHpZYpl9fobjSX1lnsDm0R+GEw==');
define('AUTH_SALT',        'UJOs3Lj7iPchGq+YHcRdJ7wZJsp8UkKLDkIlBSNWcVPGk7FLx8XVlwtpJFnA1ynjdh3V6847mUxc7JPZkQJaEA==');
define('SECURE_AUTH_SALT', 'bZzP9TwP5rKd6Cxvl/GS2VKzJapMOyKIbtxy7OV+V6g4b6J2bia8bvzx/e/Tw1fRhiAxgucyoFQsKBFl/5YcmA==');
define('LOGGED_IN_SALT',   'NSAfqL37GwLy3MljnkDOHMG80rbjzpl7xUySBVVwsOyNi0DVFS55V03uyyTkSoaUwB2VAVibugewIPtGeIOwcg==');
define('NONCE_SALT',       'ugsvOT/t0v6hizVsNSaKi/YPU+MsoUfHwM3xPy8O05MuMZU/0vpO6nqMafzfsuoVmD6s6vZf+lx4N3znAUTC1Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
