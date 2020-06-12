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
define( 'DB_NAME', 'wp2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?6:dE4O!;*S,l5@e>{R~pWI=nb?_{1rw3i,9qBmJK&Pp7(6965g%[nddOgxy|~()' );
define( 'SECURE_AUTH_KEY',  'NFW*|3I]wv],HUL:Wr]AGl2K!VQy3Gn`+d)sDcD[h_RPCJ&*<Ql`Ag(H-$6bP,4Z' );
define( 'LOGGED_IN_KEY',    '<{P6R:d)]ZQiGIz(~7r$]N9t_(wSJ#L[Ez.bWYh|F11L2V5E&O&[!`5BrbTpTliJ' );
define( 'NONCE_KEY',        'Rtm;c1wwe{np,]PNoA^B@1j6~abB8gFh{;=t(ie1IkeG]-8pa)Wj&2u/(s %=~~<' );
define( 'AUTH_SALT',        'Z[L*ToLg1!xnaeLQJQbA}f%yeVq,}RT!nolskvDuN7N t[G_7gvyMi4+!MVN<`Dh' );
define( 'SECURE_AUTH_SALT', '`{TZ[8XGm#/oz7eTWqnZ$y~;B3hIYDul.E]?PBa46s~MiSzU$Jc@Q`|sX1t1W?1+' );
define( 'LOGGED_IN_SALT',   '%>y7[E_B&H&KRFIc+f^;2G+ADeSOr{o;ku /0h[M8S3Kb75_1{B%ax+2_M&s&7hV' );
define( 'NONCE_SALT',       '0.U6jG5jA;>S[h!3 Dq9R$Z[@J>6Lbm#`Fa ,8F6]zsvhwY-cw;i$K(_gNP^8Gh@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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

define('FS_METHOD', 'direct');
