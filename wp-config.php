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
define( 'DB_NAME', 'gala_holdings' );

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
define( 'AUTH_KEY',         '3{cal|-iT|n5bdUZCu&CV9c[_).FnKrfA05.T4{@,A$!v[$@Q+%F]Nn;.}%V_xh>' );
define( 'SECURE_AUTH_KEY',  '$WR.eu;nDy; *I16+D.UH|MmxR,:f5! uRAQ`p(vPn5]FfOhd~`(q)([junwEFrr' );
define( 'LOGGED_IN_KEY',    'zo[Dc?`@F(:UyfQj[%W;{%8! GX_.3_bo|ms-Vx2!`Z(?r0Vke)+j^0+=+KOcCPb' );
define( 'NONCE_KEY',        's|Q<i%VB*^VWj=ib^)GdyH,]HQADI9?=gY0rH_xl(%-pN:MKHi/rRn2aY]tsT+nx' );
define( 'AUTH_SALT',        'zS;cq5Yic04UOjTh%{6=noy_oMdAF4vtt 6^jLt6-yG-!65Ob6[sk`t@%1,<jNsO' );
define( 'SECURE_AUTH_SALT', 'HI:DKGN&c#Vg+G:x|g$`nRv&r#8;`,C2 v|3y<u(xYS]/;{KbiiIzO{)%%->&C4G' );
define( 'LOGGED_IN_SALT',   'd7;FyU ]E|-F{q F.EA?V>s%Y0v@Ke[1fZyx!UG*h/K[,;O45uL|]/>wMd>&2cF_' );
define( 'NONCE_SALT',       'Tvd$tj]v;PCRM.scp]gFYL]XIfF9vVe17@*`KOk|qfNu<A?uX_+=dJrj_N L[T}L' );

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
