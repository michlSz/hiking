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
define( 'DB_NAME', 'enemer_wp707' );

/** MySQL database username */
define( 'DB_USER', 'enemer_wp707' );

/** MySQL database password */
define( 'DB_PASSWORD', '68c5!S]24p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'w6uztrtbgotsb9u8he4lrzdlrwnanh04tmiyw8vtwvdrevmvkul3numnhvgbbswk' );
define( 'SECURE_AUTH_KEY',  '0mq0yj3hkluryuezh5zf2reabyqz5q50zd8nzzvojhayoa7uyu7me4us6pfky5cj' );
define( 'LOGGED_IN_KEY',    'u4sm1rvxl8jnfcziqnatspaxvoovurgw9oikuq4cjyctgslhehynw0rdt4opyzqu' );
define( 'NONCE_KEY',        '5hj3p8oizlu1ltpii14ljah8ytuysqbx6htczg35a0cngyhktgeqrohd6fxxozqk' );
define( 'AUTH_SALT',        'ju0pa9xupsgq5viettxpuqsvfxu3juho4eh4e2snieiat9jkw5jjxfecbdwfpfng' );
define( 'SECURE_AUTH_SALT', 'yegaxf5763mxn031vwkhvvkgbhixv7vbaftec3emefbj0evtmsgrh8ltq10gqsfn' );
define( 'LOGGED_IN_SALT',   '4qsc0qxwe9ro0dgbzhgy0sokdm7ffnlmtveq1blhfon7vgnivvlaavpakgy9rmkz' );
define( 'NONCE_SALT',       'mco2lky8v4wh1fj1byvt5bnjpxt68nvo2dq87ahuvpz6e5dzysrm2fzst0ucoulx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsk_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
