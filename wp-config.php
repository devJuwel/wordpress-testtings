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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'uDc0guoCNXBKFg6o3Dy9iMpYukShBBfmBHmqb3KgUmcU/HtpeqP8AWrUCvz7SEd46T4Jy7nCMOzoNitN1I8o9g==');
define('SECURE_AUTH_KEY',  'yk5zwtiSUmdbIeLs0VtIXROIQgxxWxOHq2V0Pqy9yON+u4fp/jJ1IWiADwVsd4Qz7LBZYpU2njebgUVEK+0isg==');
define('LOGGED_IN_KEY',    'tIeGgLR3s7kTFLX93mug97Y8iFb1uXsl7c/8zSl+PJeT94c8R5JH8LhW8h2EVRdn9aYuNzkRMpaelDOgs03aRA==');
define('NONCE_KEY',        'jQjfDQrorsYWLPtae/5y0v+qJOOLv/7EEwAq8ZQ1YFgIViRyOk2WgBDuTmOTosLjlRRJxl6j1xUYHjsL6/uxgA==');
define('AUTH_SALT',        'gY918vNT2vKGI5vVmhAZGj8KvzvuAV9D5nfDaaHqrPg7mpY/tvonXeTFg8/eJQA97EGcjSMpamEb6r8CNdOmXg==');
define('SECURE_AUTH_SALT', 'dMFSxZY0H0LpoMJsG90gvKSa9rSIp1zWFbo0NsLUkzMD7K8Vq56MwXvywB9fNkSWDQmfGTiThDTd4Z6mr2X8Jg==');
define('LOGGED_IN_SALT',   '3RWrwfQTgOZs2V0q1xskEI1Zx7a2UAGy2rqLZ32tkBUEJWjEYLgOZL5wSmEWlxqwkU8f1wQtlFYlYPIR+gX6Hw==');
define('NONCE_SALT',       'vF4YDX6VpD/EjW+xluxYZMsI67vOZIf3Xukkz5Q0MI7wnys4dysy8JDjSdGYJ36RjLJZzlPjwDnep66F2Z9cmg==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
