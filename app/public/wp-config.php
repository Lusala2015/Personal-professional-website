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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define('AUTH_KEY',         'mr3LnP3CfcJfWb6q22yrpGIn/+V/nejzCXxrY/3zHOVE16cTUbQMiSRDJEnrc//bkutLwDIECOhwiGNzLBA5oQ==');
define('SECURE_AUTH_KEY',  'Bz6XbJsTyj+8hRvXl0GtcK7kV91h4yEUkZLEu7Cxit2zbx9u+uL9iqyN21DIv9fqCmghsALHzER/nw3Khl9KkQ==');
define('LOGGED_IN_KEY',    'VfoGGiCFGHdYWzxm4TXfctLCfkvzI4zBkJ9ZnQlIHAP/J1kGjEdZVpmOJZMbzsK0w+B984lnjB1ILRaZz7qg4w==');
define('NONCE_KEY',        'HQDt9Tr6lp/M+mD6N4+NYbcsl6jWVmUEzHv75ixeGhvdC5c1u4Bmd5wjmQs83Za3OD9w9uFfk8d6ikYq7KiSeA==');
define('AUTH_SALT',        'c5Gqq9Tpt+/m83mGv0hBJ8+N1TGpnPgtObwp96DWkoU409Z8b3NPlZZW9p5H3GIw7U6f0TbkimJni61okNPvmg==');
define('SECURE_AUTH_SALT', 'vgU/HMHEsPyAp2/PLcPnRYtGhNJxUO3mzT76e9z3ELm2wFWO5X6EPpAUxAlNLKpqlFNusIbMeDprepjl4E7Lag==');
define('LOGGED_IN_SALT',   'ewZ8DHx1lH1d25HVP1Kq17etRnjp1yGV7RwFi5TXAhEnms79NR4DsL5mNf1gVg6GcKvFMZWXan/PAlLIVxrV6g==');
define('NONCE_SALT',       'PBfc1/4Y+NLCPawTXtzSmcm5PW824dQ6MBE7NfirhHEOwzLbW4iUnfWJbsv7+qBO5Tr2d5JEkjYcfhXqdwnlsw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
