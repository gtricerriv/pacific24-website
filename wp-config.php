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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pacific' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '(LolFUl}b7G1DmayPm1VZb $-=qOITNn`{M.w%jh,|QRIv@GX`k=OH]kl>:D5QFt' );
define( 'SECURE_AUTH_KEY',  '{MV.=g[G!YXn}/>+DRSN$J#s#06<RAJ({Nt`QhCt.%zVTMfLTC3,Mvd9*n/NbIX~' );
define( 'LOGGED_IN_KEY',    ',@f41G~n<{e/w|4o`qDmNHjR&hfpG(u5W<+||^~wTiwj}x_]dTz.FQgc]2z,[kE|' );
define( 'NONCE_KEY',        'X>}{I!R#/W/[(c*P9;iALy|?Q*CA;n+xj]_0LSPiUibnl9NkG@5TPD8_rW0PVdxq' );
define( 'AUTH_SALT',        'NbN*tu-M)5,_J<flEiXEHw_XNSh4BH2TWXrR)<==0^eE`tk@M<@oJA][.3DrU93>' );
define( 'SECURE_AUTH_SALT', '.a6hTZ4/*ntCIbnGc;FxpDPrx{cACy_LJ_`uf{[G|Xc-FBA/<X~-r;,HzQQ2i7-O' );
define( 'LOGGED_IN_SALT',   'x0k_,3H4P<WwraANC)m9V>Uq`N!k2w6!)jbWS(=Z^;L<BD#,.C XR 6Xgt8jfB?D' );
define( 'NONCE_SALT',       'G3`9-5~GK,6zCU<Ky)-6,`QVT_$q<TI|5MgFnKGK`C%^*U45E/RZ;*92D%P7TdB/' );
define('FS_METHOD', 'direct');




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
DEFINE ('WP_MEMORY_LIMIT','256M');
require_once ABSPATH . 'wp-settings.php';
