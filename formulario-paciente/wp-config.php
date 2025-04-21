<?php
define( 'WP_CACHE', true );


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
define( 'DB_NAME', 'nutriologoencdmx_wp1' );

/** Database username */
define( 'DB_USER', 'nutriologoencdmx_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'F.y2tnzPrLbw4hqG55918' );

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
define('AUTH_KEY',         '5bCoca4DBNsEhxfeEGahYwU17tt6R1HyTf3MUquPIaYd3eCEKUw4WnfuBiKZhgIp');
define('SECURE_AUTH_KEY',  'WmEql8Wyxuq2A00xQT3DGkL3x2oWXUxKq4UKwnmidDuM8dXHk8JywEQzU1iicJUP');
define('LOGGED_IN_KEY',    'AmpoEtQOTlMXA2xQbiwieXRUeNnyAi0vstsCP37HQ4rdf1c6TrwDZpJlGTxngyaB');
define('NONCE_KEY',        'JTVCMUVsZbIlQ6taNzRl677P53ZKccEsLvYrKsUUSxeDWMJBUwwkpoQyssTTUY17');
define('AUTH_SALT',        'LmqnyA6z3EGrQxadUzCLjZ1lwisD05LhISpgBcKUofsD1RVKcFiXSbjWcFZ1WmK3');
define('SECURE_AUTH_SALT', 'lDSribh72pavnSnflAvWXBq1lhOb6WgjFGD5fnGP8GYEPEwNh1UgW8mn9GhEJ31s');
define('LOGGED_IN_SALT',   '6yIRMVH5Rvphp2P0Mj5xVYy42J9SkDXUARMhJfdeCE3yTkFo0fo89qqtEjZ1HSK4');
define('NONCE_SALT',       'WgfiHAJyjrS1Io8kEYfeU59CRiFjSsqBCBV12YAiJGOrhgiEVhmOWNRK12pxOKu9');

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
