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
define('DB_NAME', 'db_techcare');

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
define('AUTH_KEY',         '8P%QRKiooa=pqukBl[z+{/z4+W6))m7LUs,NXoDd5h^80CggNDJeb8eL/XLew6=2');
define('SECURE_AUTH_KEY',  '?&N(X}W=KHDcm<f=PhvibDC4y${%)v&dz1e%,{iGYQCyasA4qYEg!oRP~6SNKVFL');
define('LOGGED_IN_KEY',    '@D]=$w}d~eOSV(^p?ti~`z#FuDem2S9*o;B[(l:qKD^a!-cjKrAh#EvONPoa]kwY');
define('NONCE_KEY',        '<qvuctp]`-O-mGoIX8T=DAAlL&.i]*DqIlOqWxs5pboZA-,,S0}-g%7s-Gx~#;b.');
define('AUTH_SALT',        'lCHzV&,`Wk3D.=GL@-N`v(G9woe%>Fk>34iNv!~-~,}yQOV:nhE*T_,,E2{B}ML+');
define('SECURE_AUTH_SALT', 'ONWgb$RdnY&}b(WExun   BYBKD%=HbWf6{JI4L;5Xe6h(?X7r3<|bdgj_Lz&KE0');
define('LOGGED_IN_SALT',   '!17EWx#Or>K=Z-SeSA4a*d>)RGCh*jE$taf_gg1x!W5SNYu1l]&iL}A)%@0n{@#7');
define('NONCE_SALT',       'rz#=iB>{YI,O(h]sx:@wxO)2s0hLvI!n7k}i9?pWhlGMP>$++zERGW|dK^+%3.(m');

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
