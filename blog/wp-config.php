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
define('DB_NAME', 'po7y9k5a_lkw868');

/** MySQL database username */
define('DB_USER', 'po7y9k5a_lkw868');

/** MySQL database password */
define('DB_PASSWORD', 'I-m0p9-1S5');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'fjer4syskq5l015tscxww1wdcycagclifizpsvab0cn1wrrx7fuqvdlbzg39omob');
define('SECURE_AUTH_KEY',  'xl7sq876jrqa9j1rhgigotcpuh2haabdgwxffpfrugyp1zdrjtqcgx8jfwqzmbrf');
define('LOGGED_IN_KEY',    'mygz2afezqk9s2xyv1ztztkzxm2gvafaplsa1zz4d12exqxyqygeda7hwsr6ygk9');
define('NONCE_KEY',        'pvs4yiv0lnmdfvlhrdxmw1hle2nu7u0513ow8bgoz7undfmf2zctvx40cvagaogg');
define('AUTH_SALT',        'kx3b0oxx6eywrvudcg9qrgyrthlsurgp6inwdqgiytbmli7svljeskrqqi674j5n');
define('SECURE_AUTH_SALT', 'fqkyc9mdbmsejr98zg5zyvek4pvfrzbhhafurx34dzbjccoiwuwwfqlhgkuzjtdy');
define('LOGGED_IN_SALT',   'ca2c96cdpccq7afqeerpkbsqqywwahxm9adm8vl6r6d5qzrynilkfiap0ulczzz3');
define('NONCE_SALT',       'my975cqtcm3nqae53mkf12e0mxyzimlnokxspxpzsnliqalmikaoowkql3urvyol');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpot_';

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

define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
