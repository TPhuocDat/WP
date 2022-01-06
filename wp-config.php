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
define( 'DB_NAME', 'asiavina-fans' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'gJ++i_&2BY:4Rh&xIk7mX12`?OMU2m0P90tZ-9uKHe#S.LeClLl>fY=IEqPrvsw2' );
define( 'SECURE_AUTH_KEY',  'E.pwqT:cYXEuF[|!AN 0{n@&;bye%~Hv_d+b|HWx(>O%>lfj1MG/Am)>o5i]S0m8' );
define( 'LOGGED_IN_KEY',    'S0>K%BBq^YmEsrM$Uk&o{HXkChqv?{_79fXlOCI0LAns56zi]nC[hA8g/&Mcu=iV' );
define( 'NONCE_KEY',        '5u /: tP8m{1=IU4<1PaJ^ZG8Sg~Q;8zO`V_.<$yyfE_ziih5DTXAP.I9! SrZHz' );
define( 'AUTH_SALT',        'LpC[J$Zr6fBm)*2M/u/ZBp<m@<MAf*;hlg%Rb|e=<S?Kofc{2rJT@`WTmC@NOQwL' );
define( 'SECURE_AUTH_SALT', 'Z^EbBwX(_16 Xn9|<!CbTvK^d]kN3HNm`g*PeAuWXV&7~/VYl`xQZM)da%u1Xn2k' );
define( 'LOGGED_IN_SALT',   'Z=.YXX}FuJ0cn6k]&/jp-z@z~YEmG!%<<3r1pk2C#T1V#n;D%<;y3fC?{6xX%e}w' );
define( 'NONCE_SALT',       'YPt%OjEz?!3#aV$aDVy#+B2:Hz7c:/L#2h%Db(|C2@y$0wpg>TMZL@&N2GLteOQ,' );

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
