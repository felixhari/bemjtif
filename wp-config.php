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
define('DB_NAME', 'wp_db');

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
define('AUTH_KEY',         '1(a?2_P)IT}njAF*,FZBt?if+4]lSW)*?.Dd(%eJ=Q8ZRm$l:TWV%YE<`aXqfiOP');
define('SECURE_AUTH_KEY',  ')gK?#nv.NXKC65b&%Uxz]CU5!u+7d!3o6msdp. xHXQ)d9~]u=Ex~f%E#BLrKM:S');
define('LOGGED_IN_KEY',    'JU_`de~$GX)gYyfYE{-cM08mNr;E+}S<&{D-<LbF9O;O=(]5[C3n{r?t-E[(i,8_');
define('NONCE_KEY',        '~fmAFBo_2A$3504Oe7f4^i!Cgj:*M_,BpuBc;20S%<Y3*b1_d0UW-8azX)RU5.Tx');
define('AUTH_SALT',        'd,,Bvt3xU=<j4R*=N-IP995v3@ rE|3%Lu.K|)VKSc1F#~QW{[s*L3Q_j{8:6$mT');
define('SECURE_AUTH_SALT', 'J<TI-eP_y^r{8j_D| iogM;Y72/=um1~PHjhK{c(78ef%H.i-3Dd|>?+fv7|UT^H');
define('LOGGED_IN_SALT',   'b`EZN5LSth/,;E:Vd3D_hIjXjY&/`W,$){8oi9t5nd=7+9+TC#IHa<+Vi){o,7}4');
define('NONCE_SALT',       '0i}1V4jw@p5}kxvQ!EK2k)?ELaltE!5Lv*T%+@(>XP^@lV[O]VR6IanGf+#]bw8W');

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
