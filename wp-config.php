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
define('DB_NAME', 'poliedro');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'y1WXhsH]~aPz%UH;aTsXjw41X4s,pq+a<S8!+l)wC~JN:xyTaw-1=6S=Mbb+h:($');
define('SECURE_AUTH_KEY',  'XF:n*%v`,hz^s>3t^O.zv3LwI-O+2Bd!r-}?H2@Wd+D aaw.V#?zMq3l3bBQb=$]');
define('LOGGED_IN_KEY',    'dH@6cTCHEs[R44n[N8XkfY/sR@u9*WF9oOOUHbGiIz,6Y_;wIiqQx=$&U%`[Ch2;');
define('NONCE_KEY',        '8<P.)AEp!Ql)0PwNaa;NDPP!4a<;T6aNe>MGac9D9a1Lhg?MDQeO_83rh@0=-U6j');
define('AUTH_SALT',        'HiSU6u;Uii5M@1@qwwGkAd)!|^hj1}sQUhT&#V6B+Y|93Kj~6,NTY~`!.4nWSiDG');
define('SECURE_AUTH_SALT', 'HgjWC?d*ORQOLXQ tB3e-c*$YKc&dA^hp(;$bBeYVN{PYHz.$31DpFxiJ|b-3&wM');
define('LOGGED_IN_SALT',   'J@rg/?Jh7TnBO@EBxx5@1S>n4%$WFo*@=ifU**rC&**i=5^Cm@9a^%/1eNO7kP+o');
define('NONCE_SALT',       'p2h1TDcP3+6]Y)e68XC+CCe!IbRa!B^ /EW_WQ!=n|6GnPp#/jPSG{HC8DW8v*|s');

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
