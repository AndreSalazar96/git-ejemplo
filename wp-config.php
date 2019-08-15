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
define( 'DB_NAME', 'git-ejemplo' );

/** MySQL database username */
define( 'DB_USER', 'alrex_asalazar' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Asalazar123++' );

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
define( 'AUTH_KEY',         ' ORim[=wl<11#[#eFn].r{Ls><L+AB#+x0M]FwK:KLB/%0lO jXL[jsHRV3Vkb?O' );
define( 'SECURE_AUTH_KEY',  'Nv>q8lz~WTgt}1[)LH!6C)8]n6VJ/Y)$rlQkK3z6!pfS4&%I030($m$>xZeZvdL`' );
define( 'LOGGED_IN_KEY',    'i8weQ?e(R(YuFACQ|V{v}A1mAYT{VO&.#wRJ?h~r[G^;G/6@VW(+hZ;rL-x@8^CW' );
define( 'NONCE_KEY',        '~UE`T`cJ~=B1X7*?o|)_6aO`+8;*oW#3wL^FSuk%dqDEY-u{x.4:Ff954/%*[)C5' );
define( 'AUTH_SALT',        '>;|f|WR`LXX9V>m.qkI6U|Bey.>`/&r?_N)qwVnw5wxr;w#*`$2FR2khOIxE(R#~' );
define( 'SECURE_AUTH_SALT', '2?5XO0U(dGZ^#0~,$$mBXt}MfFnB,wNWN-peOKpfOP`/i1/J$h3Krj1u9,M@s)o,' );
define( 'LOGGED_IN_SALT',   'X3ow5SxVH#o3RiKnC<=0qnmJ6M`D|yd#Ki|v/#1p^?IMU%@n=.eIY+eg89_7B-/z' );
define( 'NONCE_SALT',       ':P3r@_~`FikpHux2cLT8|1#lslP$b*A)o4x[>0%Q>#DF)L>jLL?FX&@[#8a*|B1|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'git_ejem_';

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
