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
define( 'DB_NAME', 'kosteks' );

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
define( 'AUTH_KEY',         '%1DxVIkqqPaPGZP+P+r6mX5t<{U3F|GvZA!hg#CKBcWDyRn}O&*hR.V9_G_/@@ b' );
define( 'SECURE_AUTH_KEY',  'm8pf.jao/m(jA 3z=tJg?mlfBS0zb^sgv,4$z5H~cu3F%sTG=$514(gr7j{(/nw}' );
define( 'LOGGED_IN_KEY',    'rqP)Yp[}7i%!M%&zAu,~ukb@{[he.4R)rYgl#10f7.X<ikZXN 8Q/~W+iowzz3mn' );
define( 'NONCE_KEY',        '6JDH0+S^%+UmvC;+MLW]?*.Cp2;!b-emsq9!r,M)FqJ?4FK|u/?yt=X.BH&-`ZUa' );
define( 'AUTH_SALT',        'b}d?iZ[i?l{G6lDE*hm_7&L{0xS0T%gJ]yh8y&6N_Ij,[Nh,A?Z`L%4;(t7r.oqk' );
define( 'SECURE_AUTH_SALT', 'XlP:eI2*C*C&_<hc(vQ~dR<KLv+Wug2[x2dw<.p7tqR|AiraD<}{#7MzQH{S-t2*' );
define( 'LOGGED_IN_SALT',   'U]!QQ356[ExL!a?9=,sE,d|^5gakzy][{.`k~%~d$noZx0-9Ku|$tb[BS3C751pf' );
define( 'NONCE_SALT',       '@51Ae00WBSaWOFH1UhhlrkHCh</vDcwzvrCdC%Q9sv+/-aX>cn;04 9ZD){37N(J' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
