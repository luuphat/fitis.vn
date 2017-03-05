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
define('DB_NAME', 'fitisdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'na=a:?b>PVf{5)EV;9%D#dXHV^LlAx_w*)AsAatmnxj|7CJmE;Uh@b[uZq6O)Gd|');
define('SECURE_AUTH_KEY',  '$mHjxe>KF^~^.ek),Ahd#!mq.x|?-Pc<XN]P)zX`kvCkuYAppM}^-9zb1%i&XRsT');
define('LOGGED_IN_KEY',    '^px`]/z-Bq/b}f<G&gXGQgO+FQyG*XC|, yIF.=E1uB-4`C]Pe9.|uRBA|a[GR2e');
define('NONCE_KEY',        'I[CsmU8/r]we_(aDurj~IH|hj{j/ #BusJB.yl~8{V%Og=7e7<(BGXTgp*ZAAv01');
define('AUTH_SALT',        'W-b}~%x=l@dg>z[jR&&22Q^mihW;1|vbn)2@RFe_DX;t;#h`ZV>guwQ5uIJ+y~^7');
define('SECURE_AUTH_SALT', '%-Tupg&d_|uu`|artO9%QfI7*6ttEYZzZ73-=)l*YNu6+s0)v4{09z(UhRhy?sI=');
define('LOGGED_IN_SALT',   'KrA7Y+O+Iz+5;eSg9X&{IA| MSQv3|{Br.C:|yGFEfPm>8sw;R)LlU^Ti1Z>PTFe');
define('NONCE_SALT',       '^?#+~|u?b 37e|7l^xQYC?z8o d <>l/emIOjlP)8vrGG /8.Z`eHBbp53A1?JL,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fit_';

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
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '64M' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
