<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u3136186_default' );

/** Database username */
define( 'DB_USER', 'u3136186_default' );

/** Database password */
define( 'DB_PASSWORD', 'Ijr8BI2whOUk07qN' );

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
define( 'AUTH_KEY',         'Zk|zKt99[Gu3,MS5*fquM6Wl*%sN,dG{0f07$=w)JE8SRQM/~K3h289ApUz-ZC< ' );
define( 'SECURE_AUTH_KEY',  'mlK<5B`J>F>#%FTQIqlD!DN@$a&K9@gI<2T)`t! srz*hlId~<ffRp0.. kUTSfK' );
define( 'LOGGED_IN_KEY',    '6:o@i- 1m!wd;pv=Tmu._kNw%E|&NXhI)~rY(leJH^}vw5;ZVe;NO_5+jKnFwaGK' );
define( 'NONCE_KEY',        '$slu;$jhecThB9v|C.bBXCG<b4]i)O*N?05!~id&0{fY2oJVCva,@kJEe)iVvfnc' );
define( 'AUTH_SALT',        'wmanScN3#//D,@qV2IgH|z8Tc#7U4Ho&(Zpqg~,(p|1lh;Rye`ivYMf0|muODlwm' );
define( 'SECURE_AUTH_SALT', 'qKB/`{Pqy}o=>HbMQJhk42=B`B?:%SM_*|6.Jdk8OQW@H&E^$c;(oOs@RO:hN+z_' );
define( 'LOGGED_IN_SALT',   'w8,^uzNi+@0F_pB>;zY!1.H.H,/A5C8!|Jd@U& Q2}:3nMi(fGTL!Ghcn-O?0]$1' );
define( 'NONCE_SALT',       '[n);5PU,WB:fj|VpO1n%D_Zl3ow@>e}V@oguQ#M!63 KPqY)MOK-Ud4n]avXsRa^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
