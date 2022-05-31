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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'websitelate_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'fb9rq_ Hx,<|N=G*$xoUC/mq7F8QS:{*Nsw>=$xoG]KcU8{:?&SJJMmaJTn@A(/T' );
define( 'SECURE_AUTH_KEY',  'KB#TFPtwQ|_Zk1F^ga=M6LfJ}reN1yZ eTs8oN@*01.vcwY4K3_:4aoRC%WuVq1N' );
define( 'LOGGED_IN_KEY',    'Y !ZcWvGmJRJ{mA|RI?Ur}?q06,uUZe=,4vxp_G%.if1iCRP%yflftiy>dJzif=[' );
define( 'NONCE_KEY',        'eYH+OWBk_?2/FmRa6f3&BV2?K[b#pcM*tiIC=tvGX^T2L]o+z_q3l^$I8TwGB5l ' );
define( 'AUTH_SALT',        '(kUe?>Zp?=^G*dgH3t60n`5[sf#jgq5gaNWcU9/Rf>as40)r/*C>H$ARz)fWY;Le' );
define( 'SECURE_AUTH_SALT', '|Uu5YqsIao#T>C1hL;%LsDveEy`5:HR-)N/SwwSo*}~K!2shm%|hGC)qMJv_GCvH' );
define( 'LOGGED_IN_SALT',   'bZvSn3zT7LQP/,FV~wa9H,m`?HilFKX.T[.LpU}hu@$a1;p?EN^@GKw~i2t-Vqi,' );
define( 'NONCE_SALT',       'Q/uC{<j4pq=$/_ir0Hd6azH_?cNg45(aqp>NnD<TVio6i{Zyb>BL*p1;=O6Z`4HO' );

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
