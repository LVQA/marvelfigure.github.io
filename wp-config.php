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
define('DB_NAME', 'shopfig');

/** MySQL database username */
define('DB_USER', 'shopfig');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'Y3si wYz%8#e3{9w}tRhKfI?TPK|LEr~NP|gZ10rZ,2[HGzT,.p-3<@e^9/u<n_ ');
define('SECURE_AUTH_KEY',  '`<po3>i&]~9No[6@pS~;<50<t_g[lx($rj9BZ0ShEu$mI2T_)J>`f_,>S`b?Rk_v');
define('LOGGED_IN_KEY',    '>U4u]9v}=+@+N(FOU{`VfiXwGeqD8L7^;Y){M,gtk-n1j>d7QQ{7Fvg7r<BjS<Ph');
define('NONCE_KEY',        'j#tk18_G?ht(-rUHGks)=Fx_` ^DmtUso`lG6@@1l2}p) .g5G$y@vL?c4`U_Q@]');
define('AUTH_SALT',        '!e!T,vG8O)IEclBZk~,6~<mOx.sEvOMMRe>aD`=0t2VuPhvJF|0SvEHGs77`?|c)');
define('SECURE_AUTH_SALT', 'o*<eQ4+Qj9K1AxjC+iQoo4?Cx03RKS-])W98h6Nb!e>ngtM4KzHp~qK]?  <ic48');
define('LOGGED_IN_SALT',   'O?F9 Loy,c0mXu{d7[s.9T7?U>q6#w9C]6{jv}j^V9<<()>2hRHgS?5#`Qv4=,}h');
define('NONCE_SALT',       'DS;U6I8sn}R:e-5)|QKdq7vojke0z#qi%6cb*0kXvWbyRxk81O[3?}@Mx.wNAN3&');

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
