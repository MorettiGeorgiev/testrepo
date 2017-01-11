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
define('DB_NAME', 'git_backup_test5');

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
define('AUTH_KEY',         'gM7nQ!e!tW`:r%{@ziu|~?)GcUWy+2|N6b6H_X;f#b>oM(FrQtQ+Nou1 zLqXu#.');
define('SECURE_AUTH_KEY',  '-/J[V+0#qHj;2`$$L;~|BT<yrHRv),0 !gS+O/(^an[&<Mgn4T#@&Z-g^[M_UW[D');
define('LOGGED_IN_KEY',    'p?%5U2#0kV.YAJJ[;31g)xbDc&v88J0)H/pB60`.x~{gJyh49^Q#i4{msRKUJ1Kh');
define('NONCE_KEY',        '=Nq*+0}ag4v_}>;Qz];=Q;{2wt!{1z,`zCq8BpQjZh{u(P!hV<!13I/!/+oV~|{D');
define('AUTH_SALT',        '//N.Pn4_Ic]o)Q|zn!!v89WB|&o6h7aAW+[i/aMN#7k4OVFSz,LdT7EIGO@I) HU');
define('SECURE_AUTH_SALT', 'KlXNPy4,6oQC/TaJv:xymD!]M</Ih{EDul.t&xvzD2SynN?X:[GV00A&6Byede/y');
define('LOGGED_IN_SALT',   'dWl$voN7~%~.a.FM.~w[]<!K/%o{^-AZ{a5YgC[Y*&3BPH=Fe&)3ocqc^zM9PE|a');
define('NONCE_SALT',       ').i{|Q.6D]g7n-Lyap~AKRR,D5Ua$[;=|[uwf,eGtpx]v>wn~C1EUWz3-urTv?Zy');

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
define('WP_DEBUG', true);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
