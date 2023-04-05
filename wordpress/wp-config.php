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
define( 'DB_NAME', 'project7' );

/** Database username */
define( 'DB_USER', 'root' );
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '1@B1LB3fCH,t,AVw_&kd(*Cl:~(N#2}hr<4$!DTH.`HQ}<]V UUKtlpp)oF5Np9b' );
define( 'SECURE_AUTH_KEY',  'c-_vD0sH$!_o!MlI&d0t[0c/7_@pc%2JG2W1,D~@rk(UDsM@PQ$.+]Fbp]IC[(:G' );
define( 'LOGGED_IN_KEY',    '#an|}QW7hfX73[.VFO#BAdR*2q}GeT?BWm]1HOXM}Z*!LGsD9 WIJ_zZz]U VN_B' );
define( 'NONCE_KEY',        '8m; DK?r~xmkG@G-Gk[s4YWE3%!::kZ(W>ER&zhr:;6UbB3gM|K>Ra8Qei/.vrip' );
define( 'AUTH_SALT',        'nG?wuqg_:D!?}W_  !akM)8}{fRE)QJf,F6wcM ]Fh;<p ,!kbS{-+W3)8e37F8G' );
define( 'SECURE_AUTH_SALT', 'rIeh1&gTv4v5)fRs.(N9M#=VM >gOy-#pm3+#vn,wbtraVlJ[khTI]U&z1K>>ht6' );
define( 'LOGGED_IN_SALT',   '2n+F2F>ZT#4bQ7HH;)*zqCqYC^;sCk6C65FNq_9mx8Z=r3sq$~$i<>Pb9L44nT9c' );
define( 'NONCE_SALT',       'L!mF8=n?;o@TCOo_Lin98#hQG3-VB9gALc5kR/>YuK.)e9#X;+S-5H>x)yL9B@,0' );

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


@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
