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
define('DB_PASSWORD', 'vertrigo');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '|Z])&)8B/9f0DCk)MOSR3#b2a5Yo+-%M-_S+@ b)qp+}s7k2JlFF)4wRj30Q Uia');
define('SECURE_AUTH_KEY',  '%)E>Z)&!v@f|tEc<#/Wl?hQ^xjLi*E]0wsC1%q?uScG/6HCy6wK5xxJ}P4P0c~^#');
define('LOGGED_IN_KEY',    '*R$Ma8<1FeOiqoHZq@-`$ri##1D$@u6,4Yn<}Jb|DU5(A]P5@xPai?O|%A+?@@Is');
define('NONCE_KEY',        ')#r+W{PctId>21J!d>XJ?WXpP$q@Xbq4zc(T.f$]c_~skCHoj<G-7PL@1xw/X&ZB');
define('AUTH_SALT',        'RbEkt.1se8R<nE<gt?&n#hi9#tDXJV:O5S$[HAza/u fdo6*5GDdZ8@2Tb7rcghB');
define('SECURE_AUTH_SALT', 'qPwIZYgf4RJ()f0+30yU9O1}X-Y*n@DuMiR^v*2;E@6yv~20Abwx^n==2!lV_gWW');
define('LOGGED_IN_SALT',   '!Gq1:]1sd}av]]$OFvU~-{r/-zsja)A;z@LJC=l^%qzEW7q(h8:--, !,O|{o#^f');
define('NONCE_SALT',       '~EJYF<nPsP:;TC--pdi$yGXIh}}lg:7 ui*[|L2Q.QA:]G&^G`Ew1UHx1#vu#1Ef');

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
