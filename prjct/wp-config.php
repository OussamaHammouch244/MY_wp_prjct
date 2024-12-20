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
define( 'AUTH_KEY',         'z&&~ybG(5dw]Nx^f|&%x_;W@KNAa~Sn,vwi;;2G/s%32g~Ch9Gc]oQI$K#oI%feC' );
define( 'SECURE_AUTH_KEY',  'mKY, d=x?=$yFx~91Q6C-Xybl=XH#3@Gqrn(5OioG&Yz&/D#b4l;EK*]UT/c)?GG' );
define( 'LOGGED_IN_KEY',    '`|(teTq@[mW==D%O=*?bL^0{/`?W*xo&?*,!u F$Ej)?Z9=`>SH0 [S} M<9`D!H' );
define( 'NONCE_KEY',        '/JeTM[A.@LCx*Am~!3KK-P%f~Y.$;{vJ}ssl7X[5=T=F}8~ cP{n&msx(CVVhh,7' );
define( 'AUTH_SALT',        ',neT=U1?t>Yds)ib+aMYA`~RZP7S7EAKWD(&6w5ix~?sn~)=-/+gg)c$3c]0A13w' );
define( 'SECURE_AUTH_SALT', '0iOy7vY>Mi/A*K;*LlRAKXFEn5Bo*N#h*S9L^KgP+ZP[<Grg|ueRx{3a[WN2NQ3x' );
define( 'LOGGED_IN_SALT',   ';%0>E3yUQp0>aIyyIh2[-2{XcixPz0KG<pW[CQ2Vrrt7|#;(Yi[{OfB{::2=C,#&' );
define( 'NONCE_SALT',       '<pL~C5sBi:j)j2_Qfjc**]HC2c8}d+hwu.R}0CKbp@)L_}0~ctf#Vt5<iXZhm6ug' );

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
