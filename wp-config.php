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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_woocomerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?U!-GZM&eS%^,TZ035CL~$QgVdxfy!ON.C#L=wz,he;,YG9xm|n >U^QmFXUT6N7' );
define( 'SECURE_AUTH_KEY',  ',pG_n1c@8it4DWh}53Tp&!R*V}*qKnF#AR+)H0>M)_Fq)4`):jaPs#&E|zyDT.76' );
define( 'LOGGED_IN_KEY',    '?>pag9TJPEP3I8^p+-9pa?[L]D4[6_X<x@X6z(^)Q#Z[$m50yGg.UnA2|$j5XM,t' );
define( 'NONCE_KEY',        'M8J=_=9l)TQ``pp h&w~p&MBYrd<geAl>~9kjFa|F|6Hd8~{|_f0qdAjn,:mLPST' );
define( 'AUTH_SALT',        '}8&l(}cN+%NC=N>3,<Ei<y[TR]EkuO1GTp>.X}ti1/0~Do~,u;vK;Chf&B/,0pr4' );
define( 'SECURE_AUTH_SALT', '*LFOf;$(Qtb:~}AZ5n*u5g:N-`//_1jA4Xooed(UZTa,pw(l-pxoc+u}P;9LF*,c' );
define( 'LOGGED_IN_SALT',   'Ek#j9Lu}PLi F38{Yg=nCbeoUgbM<=JeV(fSr;8R%<uRn|S|o78-y5-p))Vi`f<k' );
define( 'NONCE_SALT',       'F31EHw/Sp>0z/ds{Iw.[&:R}<f_Bg6Y;`_p;JhUfk?g*9u)VS)zc>X*.8X6Z-Csw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'woo_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
