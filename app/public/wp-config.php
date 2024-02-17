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
define( 'AUTH_KEY',          '*):!SC)NctZmS4ZP=f>:0M-ApHorFw:<n84XnCxD/iv/lXn0o?.IRbN1c- v!+>Y' );
define( 'SECURE_AUTH_KEY',   'A&lX~*e*xn8xRLPU/Ox(4e4/<v)1m%((MJw_RZZQ:$3tVMjg7)Aue[l0qB3^OrL)' );
define( 'LOGGED_IN_KEY',     'FMX:AVhH{9<PH}>(w06ZKbw&?x;+aQIuouohMkfe9+;jCFUgjgD)XLrtc{[=R{Oq' );
define( 'NONCE_KEY',         '!=*BFE1%5]Ms@1d~S=K,qv.$#efJl?8qrc.?!.)~OqN0qzaU/sm=sVBez%4~$@+1' );
define( 'AUTH_SALT',         'L_o/D$KKF&}x@(8kRMlBv:MBp;jx7<C.lW*|x_RQsv1V_dV2Zq|ZbYR*90vc):J/' );
define( 'SECURE_AUTH_SALT',  'r;NdPMM:5*RrJb@$dTfwM2,BEESOT;dA8@]f[{cMpS5(uv]k+0=+i2W;6p2WokHx' );
define( 'LOGGED_IN_SALT',    '<jK^_]l7RVDF3~^vd67@ft) &ok>b0.)rP^chVYuNrw2NWorVlkt2zf;+[=Y%9~H' );
define( 'NONCE_SALT',        'cfWvE.~!-=)`uXBr)-|B+:VWt22d,hY+pd)N1R,:@mp]~zAC`<EOZtiAdPew;rg$' );
define( 'WP_CACHE_KEY_SALT', 'vua;Uu0LSiBUP^Ba?8Px3L]}=^%ETmq/7j^GwvhBgI]SDmK.xHcdxBH7We-?grU*' );


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
