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
define('DB_NAME', 'neruhomist');

/** MySQL database username */
define('DB_USER', 'neruhomist');

/** MySQL database password */
define('DB_PASSWORD', '15Neru01homist58');

/** MySQL hostname */
define('DB_HOST', 'mysql.zzz.com.ua');

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
define('AUTH_KEY',         't`&b%/>q!&q(*YVFy0|Q~iyc&c~|iW!+VH`2aGEP6@+U>ix~<D#!v5>1d:LzSSu)');
define('SECURE_AUTH_KEY',  '1K/1Evcl4pt#?]{BBULx.i(RGH_%.Ec4EVLS71wQU?H-2S=h3~a^(o`kqK)fSGU2');
define('LOGGED_IN_KEY',    '%Qno3Sw/X!>(S?#2i^N/Cfg&yaX={DMu>=s@ pO#;|C5ICqU*X~UR|F|&xW &[uF');
define('NONCE_KEY',        'bkHAl;`S7HW,MxCBu6R%|gS,`/%v2`#2vQ@=!hw`_{T,%u4 b3nIQS-|&n!nVaR8');
define('AUTH_SALT',        'o!TYOvild2eY@~n~k6,R U&$T(nr}MhZjo8-uz7YH)RV#V+_85ukJ}9HXyz]sK3f');
define('SECURE_AUTH_SALT', 'Yt:O:(|>3O+DJm0[EhiO]id#vq9W6+>:^2+)^V>A;/?mM};hM3NRsqUzI1uVAd$`');
define('LOGGED_IN_SALT',   'pw&KB-*]0Y]-DCH=b2GN^9:sAL]Zkz [s(7t?fy0x6|w[L$pFv+-9iB0n%hcCQM,');
define('NONCE_SALT',       'iQ?D^|h$4gQC rpG0Iv,SpHQT1IleV ~RXh5Ya_j_Mg }HiRQ@_A-0|do(Y^Qu/X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

define('FS_METHOD', 'direct');
$GLOBALS['_wp_filesystem_direct_method'] = 'relaxed_ownership';


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
