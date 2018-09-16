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
define('DB_NAME', 'IM');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uKL5Snh9mM98ezN6h8stTiD7bHawird1Frv6sGTwm64ZZERV3eAg3anbIkbQRAmN');
define('SECURE_AUTH_KEY',  'fcS1cBuVmx8umPS3vTrb7eB3wlSWGNBBNCUYBiHhu7dYktVDxNUS7tW2sxS6i51Z');
define('LOGGED_IN_KEY',    'SlEFVfkR9Fytqc2uW4cpIFdycrt4glijhRvO09KyCGjGZfuRiYCzvkKsd26b1F7E');
define('NONCE_KEY',        'z06ssbRe27LD22Dbh16nDQ1LdOCjKhltz6vGvRa6KYqxvyNkVQEeKUVAtmxQ5HXA');
define('AUTH_SALT',        'iMSkoMeNXdmpn5uv4nvIGUnQokyaGr4mhMH5fwMJTC6XqCZVvyjmTRN5Y0CjOsd9');
define('SECURE_AUTH_SALT', '65ll8EiN1CKmhxN5Kz4M3IVDU74awZ7GPsjtN5MB2ZLwadVKWYhqRw4gXNVlWFfW');
define('LOGGED_IN_SALT',   'Ub0qfbc17GxVXelgSa9exo5hA2kKOKOKMB9pJyYCaIYElzKHkeTZKyZObSRbLBEo');
define('NONCE_SALT',       'NYDDa1MDj57FbmmHVzkpkPoEAdau2UQgyJlnsUyRj0eVlsjTAcOusjj5UO3AWYP6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
