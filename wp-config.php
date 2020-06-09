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

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3i>]Sqj(1K%&swqVMAavjL@}`vi-uSv9U`fzJl>.~*b2(AQ]D[;.5hvZ>3Igi>,!' );
define( 'SECURE_AUTH_KEY',  'WHUyNmZLGzdf-obzMP~;zm;<*o%U>59?$!ST#Ls3Ev40{f-=p5eryNt^-!^)|=+&' );
define( 'LOGGED_IN_KEY',    '[Q5+_XGtCqyOhV5xSX|kXKBJ]tX>sU&.M0Dv{.rX~jgk|xi06iKO3G1;U9O.F$^B' );
define( 'NONCE_KEY',        'D=Xi*IJqZ[|;&+a+re!,K.|0bqag=m?hEd?:83/YV9TY!MSCO.]5r,B*y&]+qZtR' );
define( 'AUTH_SALT',        '|S1dznG_wYW~{:e_MUUOPYnl:yrime{fmbIFB{fK[!w.$5-9HIBjHGLD-y( |gA(' );
define( 'SECURE_AUTH_SALT', '99:/lylCFS0tF*q7S-0:IS~zW5coefV/*}hZxVNG~V?Bz+I}cd d;Mb(A;r(bID)' );
define( 'LOGGED_IN_SALT',   '#srGRXy:=GQH}+sE<XsgcnTJ$5nr$N_AYB%u[v<nV!/FV)t^O&87PVu-+$`7?hAz' );
define( 'NONCE_SALT',       ',nQ,2)q4+curc}?Iw^y2/;1zWM3u+gJa7]5jgFnBqHX:A8#>#<}c~cCE e3Ru5+[' );

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
