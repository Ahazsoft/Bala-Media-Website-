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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'balamegp_wp603' );

/** Database username */
define( 'DB_USER', 'balamegp_wp603' );

/** Database password */
define( 'DB_PASSWORD', '.2SR3G!cp1' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'fagr90kbda3pkenmc0cwc5mpsekeq2rmsulz6zrlz6csjgwsvyxwhm3l7oiiamw4' );
define( 'SECURE_AUTH_KEY',  '5xa3owhxnu8ky5u4jau1tmokvgjop9jhv9owxtygfmc6mjbpfm8jtgbvhihdgkpa' );
define( 'LOGGED_IN_KEY',    '6qfmbhx9d9bmfj540pvrselyw4ikrahalruoac7wcbq9urk8frdisigvile0fnnt' );
define( 'NONCE_KEY',        'edr0kisdvq6yea0nkexeyyz6fhxlz2jgsjenmlaykfjesm4ra007kqpazteo0cck' );
define( 'AUTH_SALT',        'iu6aijvvo6rxaww3g88xpemuezuw5izbxrzdngdubqdgpm9lqg1weq2kmkmnehfk' );
define( 'SECURE_AUTH_SALT', 'pf5ywvl0lba9gd3ktcux7brz1eccqpid34seymdttda17zis1v1jti1wstgpntal' );
define( 'LOGGED_IN_SALT',   '3nxvrowvu7uyiza9wgybxyv43ijx9sn8no7uml96ivxy9qojqtp8gaeqanpcldtc' );
define( 'NONCE_SALT',       '8usdpgh3zahmmdusvjyb8mhsy0xougdclneltadhdvstlf7l6zzfhoedvkfm8nhd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpz6_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
