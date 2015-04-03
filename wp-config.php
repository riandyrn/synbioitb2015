<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_synbioitb2015');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$u?4*0W0m&!Rcy@R@/Ec=/.5H<>~!+ 5g}5dFNeD|E0(W<<Hs+%SL519+{c(B0_x');
define('SECURE_AUTH_KEY',  'rlTf?^l@yh;[~~Zo(5D]bnT|GXk!g$RU+N2-/,y*WkBHVN>Q%#2p=r {kyIZDne_');
define('LOGGED_IN_KEY',    ':]+xJfoGJcb (g6|PMk`X06D)}xu-|kQ-^vG<1wW@ARmQO^Km3-d]nsto,4p<8>m');
define('NONCE_KEY',        '0n;pi6D?t$%ORx/;|Tkrx)a+T=4xSb<p,y?GqEU]a=|q={dY+_b`YiI99~jN]p9e');
define('AUTH_SALT',        'xDVT]QD{cDASU=4L.GMCO-+PS6Fu|9~)vjS&&T7R SY$hhZ6hS`)LM!Iy+Q.jm@;');
define('SECURE_AUTH_SALT', 'L~[hFHu}T@|t2-:MUR2b, >U1F89k>?!`t~ed1%M;::]P+Y}@|W9 IU>/^0xs-F ');
define('LOGGED_IN_SALT',   '2=7DBU{c(Mhe)b)uMW-*/nz IGjmvjXJeYDc]Xi;fLtIr(0^t gW^R!v3n328epu');
define('NONCE_SALT',       '|&gkiN40(_:;yl7>`R>MRVCeZsL,l0<=|[a%#Lh[2k&anT3d|O}iB[5%ydiK=j7~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
