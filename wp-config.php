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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xamppb\htdocs\remendios\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'mmrem_biojoven' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qweasdzxc' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&1y.FJliRc[L._vI1vW*U@[#:}HOv4XPp2A1B;gRp+.#hU1.CX4|ff@*B x6P>$|' );
define( 'SECURE_AUTH_KEY',  'a29f)if,(/~StL@&i6%Wmml;8)hy3?^V>IKz#`DP~#8Wz)Y NA%m_RG=4X]tI4[D' );
define( 'LOGGED_IN_KEY',    'auFdTsX^K8&%r@su%LAJ1|3_)6.Ee_iObU :s7m&T1&$xxk>g.NE5E5?VC17dBPC' );
define( 'NONCE_KEY',        ';Y(wd1tg&2d9+BSz2&#sZ>0%w45xV#`!$(g ;r?n9+ R<h!A8:u<[fx+UT17GbHW' );
define( 'AUTH_SALT',        '#LOnJciVb i!&TxD-Hr@D/t-0q0?hDPhI(nDq5.fP?p|Q2wkp^Qo=F+zp8o!${_Z' );
define( 'SECURE_AUTH_SALT', 'Z^mqVY;O_e5#oNJ{;B/3A^|e49G4 Y9Mu~d2dt^$WS2F;~^wW[dRBJ]A+aY&^]`o' );
define( 'LOGGED_IN_SALT',   'VXl60B13>::T]_!)KR@grg[Xx(af/z3,54hMHpNE3J{>i4.H<;ZN-Tj@`#T17{>&' );
define( 'NONCE_SALT',       'S6/,_s>rj< WW%P2bLyWX&//|k<fn4v=|z2>bZ!6]Edi uxgMXl=3;0beg7r|#Z)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpme_';

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
