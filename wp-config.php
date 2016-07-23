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
define('DB_NAME', 'nhahang');

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
define('AUTH_KEY',         'WK| Mbi4)PGfM$8x5(u6Pb%^#LF DKuStH#]c8w|{6;J#*YYH{yKJmeSx;JN;YJf');
define('SECURE_AUTH_KEY',  '7$@HYLDIa v/F7.7)9VFiE`DZLBcSBGy%d?*B;x-U9A,Wf?PCK*p|f=#&R[bWWt[');
define('LOGGED_IN_KEY',    '27%vDa%n8a+KMWnI{<6JO[]]C!_6?J6.T}=.h#x;I2O!m|6U$F2o<$ePy2b^Q:(0');
define('NONCE_KEY',        'j!V8FN{#/@g6gysqAtcr#;YaDQ{0:F^`2&VcfkcIE_dTZ@?zY+)-6`jwx?k*1L7^');
define('AUTH_SALT',        'wPt0~OhZ,3s+=v`qShz~tQ$Z8%?6cuboGRt<5yS8e}v8P*5eGoZX1?]w_[#=O4v6');
define('SECURE_AUTH_SALT', 'tL]ri%6]e}}z<s/8Kb;7atS>0%1ts/[CZV)b956zm9SzY}3TBvHo0Md_6#E5`]`t');
define('LOGGED_IN_SALT',   'CJl1U++Dj7R*pw$Ism[8<R&D$m*,K2}$gAwZ0oy>qOB|GpPz+_!!n~,!!0r68nl:');
define('NONCE_SALT',       'hA3=zjC Y&j.4#,RyE_?EzG=C/JjR.M_OG7J~R16BpdD>l`qUIHGF*zW /{!X(&e');

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
