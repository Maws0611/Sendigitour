<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sendigitour' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b59Li6}1)h(JXBP$7Rl7iaY*>w`>mT)<us3#rcOOUli.M2.5E(TvsFc#o--S?>x{' );
define( 'SECURE_AUTH_KEY',  'Zt-k`FX`qu}MrME@m+Mgo,:d{N.<x{:(YocB^k-%_LOB1%STgWrW-j2mFZxV(WAY' );
define( 'LOGGED_IN_KEY',    'v,fb4a,X~z2h!hG|)BO0{Vwzq5R.$E;yf%jC;}HU.pUS$@M_v vZaR7V!vj}Q?<]' );
define( 'NONCE_KEY',        '&0IsCN(s3RX2wrHfna#zd<uTTFfl$mf.ecM>!FW}L-^<,4e_]`_=/H`RO%`G4jDT' );
define( 'AUTH_SALT',        'skW`3!8WuP7-1vn,U_2&#c22]l%C}o]r)JrUw700Mx5Xp7oRDQ,]g5(2(3Rz!j6P' );
define( 'SECURE_AUTH_SALT', 'sqnNeBB!;HQ8Z[tR#!]]a~H1.R^iQ.q==/hQ=ibQ_#Xw0]{.I!P5~H3.l^}{(77b' );
define( 'LOGGED_IN_SALT',   ':v3NAtu6HWkY_Z{BeLaOyGO;3xB2|!mHxPbn7kG;>2|B?6~HiJ<es~ykoGHl{iNG' );
define( 'NONCE_SALT',       'oPMS8Q~Y-b*cC|TRW=`j@II~g/e4L|l=*i=2f2`{yr33XW;YCpOk(,y.q@}m~P&7' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
