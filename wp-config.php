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
define( 'DB_NAME', 'wp-project' );

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
define( 'AUTH_KEY',         'kV8BOnv0M.;K1F!hmK$M%dj&AeMW~nrozi|C_;hh2#.~jX6_o#k|3UvkvWmat1M4' );
define( 'SECURE_AUTH_KEY',  'gK1[DC1dEjkHZ_$*D [*FL0Jtg!rt[eDLc}//_B5{R`![|JvV&&{(CgGwot:1-1m' );
define( 'LOGGED_IN_KEY',    '01Egs~*!R.nHNH92{EHThrIR0a%_#*;m3S.:o*1Wk:;nz*bK:L8(Z!cRM6,Ry=!)' );
define( 'NONCE_KEY',        ';xp~47d;Knn7Hs,P#Q^$1,<j E[:-_4p/r`5NE7NfUfn(aVSVW9tDS>q2?nk2QC%' );
define( 'AUTH_SALT',        '7+ZTD#n4xv.KDT[vosJxlM){+2viL0x< :l7M28]Cr/!H!1|U# qEiE]-#Y.IBw5' );
define( 'SECURE_AUTH_SALT', '8HGdN<l>DA%$tXIk@||-CEx)OmAk81{o83%![,E$3WrsU=B-VrlL+t&hj/Z<v1A/' );
define( 'LOGGED_IN_SALT',   '4X}+/%2yYug`Tc&iD;l#r{H=p4I/4^H#Wwn7*Ci{K%QYc[rk{XbSDL$#_$42F`LJ' );
define( 'NONCE_SALT',       '(`~GW%doW*fC`YexGU<*lmO5*O,b= 9=fbwbOy*DSg6KjV$;X(?!i8[]N>03xBkz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsrs_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
