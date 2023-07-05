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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'k*!Q/o!7=1`-]br=1CmkgNNy*mtxJvcWk_XiW,yCSuH<fAas52j:NfH|8,E$5t70' );
define( 'SECURE_AUTH_KEY',  ')>r#OODz?#@ (X>qgj_G;B#syA$tlEe<70LkLGtkxP|BZ7m>,=U|xCT9;IJ}PyI4' );
define( 'LOGGED_IN_KEY',    'K2CzjOwWH{UjjZ|}J)c~1@oZ0m3 CW_m_]B;:r[V8MrBSwNX.iN;sPb~]t;jp#lc' );
define( 'NONCE_KEY',        'wDuiGiXOX0$E68?TrgBsMjN${@%6,Cm>YPoDp.!=L~({PXf=8D3Dls<:cduY91~X' );
define( 'AUTH_SALT',        'lYp</b<7Pg7~wPlwgHD$ull*vHQ6B50&DmmhJK*AT4m_;iDZ_9p-~xF{6t7IG@QJ' );
define( 'SECURE_AUTH_SALT', 'k-5>puxruU]8&M6;nY29!n^k0R-M]Bo[5M4ZA^/Fr[M+}0vbFTpWaqF&,C%!)G-a' );
define( 'LOGGED_IN_SALT',   'oq!4zx=7P062eZi0n{{O~-so$?E@$-#:hx9?I$6^S_(3(<]O.vD_p*NCv`FI{m(}' );
define( 'NONCE_SALT',       '7>S1-BY[:?/DVKXWXhb4uS;UUDVO*8Y@UqBrF4>{i(b#~87p8gCac>u95Zq?vz*8' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
