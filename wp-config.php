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
define('DB_NAME', 'levin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '.c:IW=Jg&lIzcDZ[?40:Sr|X<><.[@i@W-4z__bV*>,A/Q_Wao_M8{BJ7-%#c|n~');
define('SECURE_AUTH_KEY',  '5eU_QzPi(qQB[)lI>sA9q9_fTHj/$6 zHaM,DNF;Dv;Rx*N;qUsS+`DhU0vY3Rj4');
define('LOGGED_IN_KEY',    'j}E3pV)-|oJh;VkxI3!3yuW9B7De?kafDZNjoi}_|/Zzr]91D3~F$.,m+/ taERW');
define('NONCE_KEY',        'm<mv0&^S[ic#IQGGWhGlnZv-@N4d0%*/Tm#*8MeC@b?WRJm?~^;5iSX?:b(fxC`V');
define('AUTH_SALT',        'SXH/-!K.J1(cH)0-[yEq]i9Rqt#Oi>?E9Lk1p{gx$[j{rI;@qThHeAS#h68x>p#)');
define('SECURE_AUTH_SALT', '-xz([5-n+:}O5Z~UH`Ho}W9fr12sK`r<T=&qX6Z8dwAn^gr/T_s4g|Fn=at[lOP~');
define('LOGGED_IN_SALT',   'pG.<&A(UsUTY?uT|4Z/=/+rT/FRdd^>?x~I~:zo:+6SDS?FU{a4PYFJ>uZYsh]{F');
define('NONCE_SALT',       '_YruJNZw?F6eGk`M$~uB;Y ;RV~;FSQZ?m{bu1!&0T<A?Q)`OKoaK*4={730xUf0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
