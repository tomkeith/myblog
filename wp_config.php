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
define('DB_NAME', 'myblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'tomkin254');

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
define('AUTH_KEY',         '#9Eol0 0noNy_lmS2rXtUuKL(TQe2uF8>>QkBnCkaPg,CH(2BHy#=Ld1gJH2*L)U');
define('SECURE_AUTH_KEY',  '%~aZeY$gS+!/zs/8u?&,[C?OQ-@02wN8o=emz5evo:P;@vFMVH$%%:R]M~;yxC}u');
define('LOGGED_IN_KEY',    'DF`6Bro8Qn[B9zz,ftInv4%*z&}=~Ik{^R^0v[wCTPa,Gx8);n0.rr]orEwW|LH^');
define('NONCE_KEY',        'CWS~U*%s_mRPm{&TYHi3PEuWn6CyeZg%1Y`p6yaNE+{2fL>Y`Jv>%5c3jZ+KdD%2');
define('AUTH_SALT',        'D]DK}?7>`TX404pBU.:-/@>D/7L~iU`%ANu<P(EvvCEyYlU$|ZV|`MHn+bMgZ;3j');
define('SECURE_AUTH_SALT', 'n!KTzl5@^;BdA(G:x3nRQ-`X;gEbH7:Rixl72;2,~LHHVz@f-jvmE/2,=.T&yYiV');
define('LOGGED_IN_SALT',   'ZvU!;%!R^MwkTr}AC{idqy>ki8C+Be.`-M$vFScy+UNi.MD*&N}OchO0?*7KM#5`');
define('NONCE_SALT',       '98<#zb|1#g9RxmJIb><)7]h5[6y>X|u?#:C9rX9(ENlIh?u#1Cz~!a*xkVagTe&<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
