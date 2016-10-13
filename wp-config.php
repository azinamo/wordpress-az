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
define('DB_PASSWORD', 'WIhxYwcH');

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
define('AUTH_KEY',         'BejktID~RAI{aP:|63AoJ?o(jxk<P!^_qF93Gk+HJ0~RiHCzVH F;<7e|uP<[W7 ');
define('SECURE_AUTH_KEY',  'J!7Q;6hNhiFAasI.w[S4Z3dWJ:LOtR~LUMchdZ:*:2QG+fOE^.L[u;6J!_t?Wp:N');
define('LOGGED_IN_KEY',    ']<Hs]`[gb#P~q2vEKM5mTegx|d1? @lJS`Q34e.h!VWP(W=K{Bwwp31S=Gp!gZ/U');
define('NONCE_KEY',        '}6):57TI+j6lQaH<f!{ hO{Qbw/Z:9y;OqhJ?o7w?*Sa6f`i$rmQ_ f|H(H&uo;4');
define('AUTH_SALT',        'Q M?1GSv}Cw3xC~DVk1v}6,s$Xy.ISrd %o`/Z57gY<NOcL-&1zyX/. 5y* }xk)');
define('SECURE_AUTH_SALT', '&hjS#glsUL>IjVo$c|YllY{U-2`|&8Ur+GmA_t:C?_J#A~7lN3CdU,TVs#^IpAyF');
define('LOGGED_IN_SALT',   '|$!P^_j{ [|?Aj:|^3T}[p%^:h~T%NRA:wSSa=f3jH:vv0a#G5.eEef>Z+ofn|pR');
define('NONCE_SALT',       '80y<V>pznnUWou-|/jlSa|F&Zcfybm`O{)r:2#2m>qa6RYFJ4myy2>)A@Ls7aSce');

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
