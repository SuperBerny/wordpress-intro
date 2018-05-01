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
define('DB_NAME', 'wordpress101');

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
define('AUTH_KEY',         'x=L#P/J6w>:GQy|fO}2F}a)]4Y[1 ea _)-fI,{o]g{u].Vbox$FteAMVV~f6/5<');
define('SECURE_AUTH_KEY',  'R#GrZ1`vq[BI*]S0R):4>$X2J(W^x&PU|?,wsEZQB^1JvoC>k) -F%TVc@x9+)MU');
define('LOGGED_IN_KEY',    'Bks.c42`d`Q_<Sq0 sML}%b0f2TJ>n9xpUvC)AOmTG)+n3m#)!a@n#G8~B;qz1`<');
define('NONCE_KEY',        'f1Mi|vDGG,u7h/Zs[W3~314:n6w*5(2mXC]^5C{3Cv|aWy;B]`Op`kc*x7h+^f0r');
define('AUTH_SALT',        ' !JgDYt(,l1<68oO>| ,*j&I z %4<#2K[9soo9vNIK8`11f%}~[p1`HNWAb{:S@');
define('SECURE_AUTH_SALT', 'h~THC|dh+hy`4X32jhJ6^n&`fs+xtFGTbpWs%v Mi>Hy}QY-q-}aO!Li;}_<2L.B');
define('LOGGED_IN_SALT',   '6gR=YGVYgnUYheRzY{R[R;s`=Fu!D_7mP$d/I;:8mKr4uxNqlq(G@!&kR2S!+s`=');
define('NONCE_SALT',       'L1{mJM_yaq+hR-6<D5@ P&x=E2`B]U6+>#x,Z$R.9Zx>NeU8O6m (s(%sTfv$cv}');

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
