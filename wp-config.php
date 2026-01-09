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
define( 'AUTH_KEY',          'J1t!_<6zZBMaJvm}}#x] 9.>C(bYQW1BR)778}1C~n+9s!#oN*prnbULrhH`:Cz.' );
define( 'SECURE_AUTH_KEY',   '{[S0LQ!!>2T-v?r-b]-43y%>((ijvHSZNAs4^dfc7a%(ksr](vWht>o?iu/.(;~i' );
define( 'LOGGED_IN_KEY',     'b7GC +f$:F;_s*,~(kg3ajzfX>lwXgfc+P:fwcCjA*]{5?r p):`wXOpmYdPH3y&' );
define( 'NONCE_KEY',         'y<_@WneC$#G! x O7a>.3bx91PaAV3#K{mch+3nR(yf/Ffq[)`831E)CKxD#O29T' );
define( 'AUTH_SALT',         '$roV<7P6mi5a*peo.Nu9P^e|+i^O{i{;}23#E#:EuB,Wjug.J)-#(OF3p*~7UjG1' );
define( 'SECURE_AUTH_SALT',  'g/2+$!`Uy.EZcrQ/ZC+5K^*x~rd01w{3O@<I5,|||mr,ICgYI[t>mpfN|M_flqS}' );
define( 'LOGGED_IN_SALT',    '3L:ke7Oej53]%4I9z((DmX-=g`d5qAAK_|PL^V`$Wq1B[1mPbBE2A/`?[w*L5O89' );
define( 'NONCE_SALT',        'tfX@2J o$3IM=<6}J|N?z%tcnd?$skN$j!;Nn;^,RD0>DVf02nRlMpPc(aQM<DuS' );
define( 'WP_CACHE_KEY_SALT', 'U_fs9(V|0er,DJrOA@62zlzs[=O@;U;9,7v:#k|!t7Zg#&=Sw*cBGeyHowL)$]s%' );


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
