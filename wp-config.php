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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '$w<$J]RWnw5zs.s]Qi[?v3~aD{XAMz>7I}RJY{/L1&^Vz1X%17l6can}q{6P^ >s' );
define( 'SECURE_AUTH_KEY',  'BneFKt#`+nGs?<z[M@/]f-^|SAvw&iT`oRfh[?3VhgYsTR1ol#~QUS8Tu.FH8nAW' );
define( 'LOGGED_IN_KEY',    '&.L]o>Ie#d# XNv-B>a7kOo|*:<@Y?4j z6)1GM@VW*&?H<@i=aQsp[2;7$m>`3$' );
define( 'NONCE_KEY',        '(@DwsbUNn?r?-$& *LIBo[<njvRK^#bvK^I0N(/Ko]wnMsfT`_D`Od. ~0L]b&`L' );
define( 'AUTH_SALT',        'YnuHB#ozJbc23pwQ:Sb*n:oeK(@yToX)-a^O08db2cwB%2UO(D3:]ZPUaoS59BMa' );
define( 'SECURE_AUTH_SALT', '%b^Wue0r-zr3fl0tW;%0<tsPNc?}8k]U |AC8Y|ArGk/uKvSHfx/ui8m{nUvTUSE' );
define( 'LOGGED_IN_SALT',   'dg%]muY;zQ-q16<^# &JB2i}Qjm-&~e0}L^CICA]rh{Rr8@Cc,Mdc.:~/+u%y^T:' );
define( 'NONCE_SALT',       'd<a9Y!sJnQ|r:y#mxTgr.H{8mv^2@XJQvE[J8/-Z-Rx,fZ  *TCpNO`>3J[`){+b' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
