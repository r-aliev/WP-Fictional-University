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

// ** MySQL settings ** //
if (file_exists(dirname(__FILE__) . '/local.php')) {
	// Local database settings
	define( 'DB_NAME', 'local' ); /** The name of the database for WordPress */
	define( 'DB_USER', 'root' ); /** MySQL database username */
	define( 'DB_PASSWORD', 'root' ); /** MySQL database password */
	define( 'DB_HOST', 'localhost' ); /** MySQL hostname */
} else {
	// Live database settings
	define( 'DB_NAME', 'rashida1_universitydata' ); /** The name of the database for WordPress */
	define( 'DB_USER', 'rashida1_wp935' ); /** MySQL database username */
	define( 'DB_PASSWORD', 'donthackme123' ); /** MySQL database password */
	define( 'DB_HOST', 'localhost' ); /** MySQL hostname */
}

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
define('AUTH_KEY',         'lT2kQ55GrwTAd5OAN92AyuYaV6EiS97Ev4mjqIHjiQh4wbtb3H02Y2BtmSEFsGxU4OMVjqSiOuCi88xuOqm/WQ==');
define('SECURE_AUTH_KEY',  'JjlaKiISnc9G/n2f+j0ETBEvQoWTPgLM34Tny12GSvBZNQEXIr+rOB5I3ECUm9MUL+c1nMFC4FN7tZ9icY1B8A==');
define('LOGGED_IN_KEY',    'LvhszCiKuBo88hN6PITK3wGXw9+bhQQjRM/Wwslxo/2Dhk8Us7UxBLcalhz1NHkwFeAgp7fWduMkUInuDBNKow==');
define('NONCE_KEY',        '93K/rJVWQhzZS4G3gy+G2/9YsI6/X3KqMc1WqB9+vC7HSIFlYWDFZX2bwWoSWtH3xq19Q2MDD+NlYRHBLDM9AA==');
define('AUTH_SALT',        'Y2K+qIAHFOQMDkVXhnNCpcaFQfoUxmGIp6H7XVs6nFT0ZiFDhYKvlUbgyqr/q0shbsOe2+IhHLpIiDHFukhufw==');
define('SECURE_AUTH_SALT', 'LfGWp15zgflIXfpSPB9uskSCfRANUHURtu0Pk0NQRe+tuQm/RZLMrphXSzOTk3aTB2Y6V6Y1YBJ55LE6aeDerw==');
define('LOGGED_IN_SALT',   'iwZXV2ZSX8uEq5JOogm/IiVSuk/HixgevwUqBSzgJJNdpaTxF9VOF1t4rmcgZJorrTu5lzHgFgcig7RXwxQiGg==');
define('NONCE_SALT',       'vx8qIbE3Z0y0P9seNzgKapvHRDYa3jNl3gDl7njsXvhEn61g4Qr5oQSesZAsDuCyZl+jAhTc2fUjU1+hoRseHw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
