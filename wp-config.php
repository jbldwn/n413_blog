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
define( 'DB_NAME', 'n413_blog' );

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
define( 'AUTH_KEY',         'b)f0&skn/A@8:%fMR97szSlpN/*/S bNj~eZmp<Urb]{gwLi:v^pV|:hFS$/f|3t' );
define( 'SECURE_AUTH_KEY',  's,)t,UasJO^%0hrd<;E2R>[TdPEOsIZie[BcA7 8:<QrPI3/dC79c61CqSd_@boo' );
define( 'LOGGED_IN_KEY',    'v~*q>XT*@0M:ANS:1@>ux}!dBY?L+Q8CMw9*5Q95ql_Oye:/xs*YG.#{SjY^^6Am' );
define( 'NONCE_KEY',        'T`W3h4Oiln-d=f?UA]qunC &HtGOng#O#2=&5e*e`?[JpJIr`8bQv|E}*68p5( r' );
define( 'AUTH_SALT',        'l>BowN;f@X>]0Y>{JuJ+^28|+E6Nd50cY1!%6:)IYM1AC)V1{$uPAAC3Q;-`TW@r' );
define( 'SECURE_AUTH_SALT', 'HDA$QY,A=*Y~K@f*yM@e]h*g4PyG$NW^d-z=N73Fx.p/1>Tt*eQ|uv!NM2GMmyQq' );
define( 'LOGGED_IN_SALT',   '|Wu0-@qTp1-snDcVTI62.bq;&+bZ:8(?S#s+K!qAHoUt5qbkT(</ n~2!(#sDS6f' );
define( 'NONCE_SALT',       'tk`bb^3.RIml_@ea +)1[E8-WK}|.`%(q.YmvMwQ`NRe]u<!IEdF?BB8g0qxI<%i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
