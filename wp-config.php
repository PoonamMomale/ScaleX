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
define( 'DB_NAME', 'scale-x' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Poonam@13298' );

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
define( 'AUTH_KEY',         '-m(Ax5LT6cCcc<RPCFPr0?wb[s~<WomNtot]bK9iV/eQHV-{*,Nf`GT:|VOVQ9G5' );
define( 'SECURE_AUTH_KEY',  'q~.:SAaN$wO9zYr4@=zIZn|taUdl.56^;+2g^x,Q9 D6]%,mzq~-!:~[n5&.`|HA' );
define( 'LOGGED_IN_KEY',    '[#{TH,HCG~R~g!XC8!H;48R1[&%-H%H+NKV=MJ2trr_L9ca^iB-D,geqT0z_$uJ1' );
define( 'NONCE_KEY',        'OD5:6q(XdwYH#sYS?ANfgl(u#ts$$u<E0.8-R*nV%TY<Vo70p,N%WFw*}41W;RNS' );
define( 'AUTH_SALT',        '8Em;_{y59>J u[(%Q+}4S?bSZ4P</E9/*q`Fn9+Ls?! z)<ef.teDb,Wf<{):iFU' );
define( 'SECURE_AUTH_SALT', 'X`I>;}P=)1ZfD3%9Egx}{nWphMF0 4L|2l,s 5_BHWBLs|5P(;9ip-Z7BHjM[Fp*' );
define( 'LOGGED_IN_SALT',   'o`J9Mkw(W8LDwi`e<6zu:hShW:Lk!af)[O<:mH9S ->cltSqmx1&lbqne<]mnKj3' );
define( 'NONCE_SALT',       '4Vx2;t4;k~~_#>pZS_dV7~tVaTiG <I.#VTk[;o~el71Y9#%/`|D%:{~Iw =QNG}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sc_';

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
