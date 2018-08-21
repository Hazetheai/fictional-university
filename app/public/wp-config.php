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
define('AUTH_KEY',         'Ob8H3Y8u40DwpURkTfGTXdr5sgERb/csPk2ZOHkTZMkj5at5P8Y8HNl0/eM8eqIUjtZjeBcde4NddlmR2KxqCg==');
define('SECURE_AUTH_KEY',  'uhsqGMg6ip2w77XSoDNF1KILdIKQ8Lwr4ssqyygWMx/nnJi5s2Tzn/gx0a2irNgEiEa6en0wCRyAqJFA01XQig==');
define('LOGGED_IN_KEY',    'k3KqNDefhuKsOjM2kAZ30cJFhDg2kGz83pxWEmz8vS9YApw6i9RwivypRkTIzH9HoiPa9PLQ+haEXJELMpDIfA==');
define('NONCE_KEY',        'ECRczJhLAKGghmo2UrxiUbDWWDYSJGcUn7AyXMYHM4JNGdZPMaZCVGn9cv4JA0w5JP5j/rLW2pwW1Jge06ZW2g==');
define('AUTH_SALT',        'xAgwgj8zZbIosC/uA1nRYFkSbTUWMyEErxiP75Uk0L8Jt6HD1xVLcls10TVmB9BrBXdJ29+Cb4GMRKnJvw47WQ==');
define('SECURE_AUTH_SALT', 'qjnI7Ki3qpZbFDC4+EkD6anyiGp3tb4N6OksYrIdqwNf8aBJIgv5aCSS8f+CGAZ+lCZzlUoPXzwivvHcTc2Qlg==');
define('LOGGED_IN_SALT',   'U6GDe6oMdDPa2ayx2vw0s1Ko+2Aqf2Esu+VTEgpwI6UmXlRbSRL44WgAO7tlE50xnEZLIPfYkUP1MnCEfsuXwQ==');
define('NONCE_SALT',       'SNz3FOsdNnA7wvB7oed7hLOy9jqt98Ib2v+8SILY3YlfZaYt7ggo/jaQkeaKDrFsxBYGAixjnyKMfi5WrHqBxg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
