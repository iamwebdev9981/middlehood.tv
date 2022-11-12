<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

define( 'WP_CACHE', false /* Modified by NitroPack */ );
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
define( 'DB_NAME', 'i8992965_wp1' );
/** Database username */
define( 'DB_USER', 'i8992965_wp1' );
/** Database password */
define( 'DB_PASSWORD', 'R.19YiBw0KDkGJ3HQmm18' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
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
define('AUTH_KEY',         'CGvA7knNcH8yFty6P38N8zy9neNWnKxCMyqCWkTeD5xQNdMTQQluDpFxYoR7lQFB');
define('SECURE_AUTH_KEY',  'GUaE1CH8MSiWWfRCOH5LAvcviXx7QNzm4RiKT4TNty87yLKJ4a63rQNe6OWf57ds');
define('LOGGED_IN_KEY',    'TWiTueCfHzrwiSxHVvesaMXya9GfqbXphCUG6gULdd1UbMoshpF5XAYU4sUhqXjx');
define('NONCE_KEY',        'tm8mYuNiVb0gqEAZoWDE5wLpiXEb2KAx0YgXoIUnhI7t5l0ZOi75NUaCvvnf83W3');
define('AUTH_SALT',        'ZeWQkmgF2r1mObPUQH1TSq7pkWAc1979jqHODfCb3KiKpzMAQWzTdtp6K8ra2mmK');
define('SECURE_AUTH_SALT', 'xSXErilo8hecbXMTC3kLauWKQnKWmhAqIeYkykpudu4GHqjsEwe5mC3x45jxVOHv');
define('LOGGED_IN_SALT',   'XARF88iUUazza8LDuvjh572cL4REEf8L5sQUjB0c0mWofbXxAcYIljQIfMk9YTkt');
define('NONCE_SALT',       'kiwnqjx94RT9OvX2h1ESQQfMOE7rxqOqgDAjzCAGg6287a3DoBGGwn9T9vyynYA7');
/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');
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