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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'JLwdTutorial' );

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
define( 'AUTH_KEY',         '[Wu~Bs} #-oJNE_Uy cD?Wr@Al=;??a 9p 8UtvQ/<Y}AY0yP@ri|lL)F4vnpI>q' );
define( 'SECURE_AUTH_KEY',  'iw4:Fzxj=!jaVo.tKV]azB5 nZ2!@&gb2^V?11oHHl+G9<k{p7~R19IFyj5`O2iS' );
define( 'LOGGED_IN_KEY',    'ETs;*!<7`D635rhF,75Om-$|mV(W^kh_V%frY3iy8tU&WnJ(=c:r-hltjrR=MUKK' );
define( 'NONCE_KEY',        'k,!+q&E8)Y;N>}?GjjeM>q5qM;fskRA/AatO~g?*KZ<#!<of=X>=k@M`y5_KC77R' );
define( 'AUTH_SALT',        'FLiO0hQ2qRiR )OF/:Sh@l [=tZHmd^N$bXG2p5D{9pJ0%1*`! p`a+Ejg7O2[H>' );
define( 'SECURE_AUTH_SALT', 's;wP7-}_Odrv3C|2saJ&Il5?Va-WzRUCI25 b^_|HL+guU 2rukw2Oi6#yCs4,8u' );
define( 'LOGGED_IN_SALT',   ')G3)7h5z@2P$K$Q6)7 31BQ3Es(/3]isFS `xA`WVG%FI8_qygx:6i8|mz-4Pm,-' );
define( 'NONCE_SALT',       '}fR<4R.QpV;+`R%J[o.Wy$t%qh?E``Onb2SPsL2}0U&Dj1Lor4#kTAs7#Mj/!~9U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
