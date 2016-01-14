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
define('DB_NAME', 'jgalyon_wpTest');

/** MySQL database username */
define('DB_USER', 'jgalyon_102379');

/** MySQL database password */
define('DB_PASSWORD', '8vrKmY2H');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q89[dk( :!T#]XQN=aDN.P*xxB f<9k)76F)$xp+R@GndRd-B`=q/7-$3[D5|gxA');
define('SECURE_AUTH_KEY',  'nLkN`0ib:0;iLEB30XK7b`s5F|`!D8%-P`(3+7$3Uxjw>d&6YeA`zod>>X-QEwr%');
define('LOGGED_IN_KEY',    'Sx1*-dtCa~nqhyP,d_LC%-J<kqEE:($&*b6LOQC[IvSeHsMH1qS9ICRTVml=W +/');
define('NONCE_KEY',        ']HmK 6iXHXluK6wOA7%eG5:V?S$fx?t&+5xJm#]gka:Z++b{Baz[D=>/CX8 <ygK');
define('AUTH_SALT',        '?gR;[>t=f+R]agC~y*lOKJt9G3z{w/V;w[qw)Mm0306[28_PesH5*S0lG{ff*(T+');
define('SECURE_AUTH_SALT', '/O4O}|3C=wm#RHRnqG&f?[--{Srm HtC8ld A#y)h-eNw3(D,<QUdtieHK8jAst7');
define('LOGGED_IN_SALT',   '4_]FlUi#4Ad|x0Z{KRX.t3IXfSC#0oek]LrjDYJi|w#A^p7Ig+r+N_RSb=||oC~>');
define('NONCE_SALT',       '4 xWJXrALFB;+8g@4zfaI{Pko|B#}O ZP9*+v1x`[o4/IQwWI p~T8)t1UGAc{u+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dd91ce3fd0c1c5b07401b084dca1c140_';

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

/**
 * Revision and autosave rules
 */
define('WP_POST_REVISIONS', 8);

/**
 * Trash collection and deletion
 */
define('WP_EMPTY_TRASH_DAYS', 7);

/**
 * Multisite initalization
 */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'covdevsrv.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
