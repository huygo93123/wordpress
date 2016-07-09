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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '_~p^33]!ZydWl!!g3m_}|~0uPA#/jTFj+=mdlS&TjC%87.0*wc$+s)-.jX[:S{L*');
define('SECURE_AUTH_KEY',  'Pq !R6M~k=(G)420#Cv3C&hZW :}&R}e<@Od,1eK-Ie_lk-.(P~gS9:64(euG3_-');
define('LOGGED_IN_KEY',    'A1BWOJ@lTuTJv9C1Q~TxzeI#D9qwH6j Wc~e|.PiNe$%0R@rZ`o`CM:|A7$-2nz%');
define('NONCE_KEY',        ':%1&?F=NV2`,p{EP6FyTTe t9f^i@EeO7p2FXh}[bg:{{k6t7tk>w{|*0FUC{HuA');
define('AUTH_SALT',        'KrzxD.$/Z%yF/0=e[Co_Hf]wYj/F&x2fSMn(cy@?-{IzmP9gYneg7?K&],xh>`^=');
define('SECURE_AUTH_SALT', ']*I5`)(5Ug{6#|v&hpRb?S@GpF|d5@b/?[B9|1%e@b$&dyf)Dm:RH(1PyO<|f){a');
define('LOGGED_IN_SALT',   '9asmXHg2NBHS @0iYaj24yzD*oJDmr=)~Tv3t`U7*r8+D1nlbBFWN*g- 2;K!A#,');
define('NONCE_SALT',       'G8RWv`Bo$wE<?%kM`U>]`7bwj[LUCHP>johMt-i b;(]K$2Xts-Rp7{s>H<6R!xS');

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
