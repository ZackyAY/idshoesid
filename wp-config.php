<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '2JhFYum14m' );

/** MySQL database username */
define( 'DB_USER', '2JhFYum14m' );

/** MySQL database password */
define( 'DB_PASSWORD', 'H8wWwDB1qm' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'D=LxCF{X|XD&n=IY6qr-ua)uQ=6HwX,]4njux1pYe/Dd/)4;9F3CE+AWwv0(cO^R' );
define( 'SECURE_AUTH_KEY',  'n_5&Xg%orLlWg.geIHgX&KMEGA#i*L5dLK>DDbWB9BVKi;+OuX~mUky*Q(!Qj,eh' );
define( 'LOGGED_IN_KEY',    '=]81IZ9}X_1LW,+9DM6;m#NZ,v*PNo/:d0#w-[ ST$#-rs-CD=HsJpKFPDC<UtLP' );
define( 'NONCE_KEY',        '/>^uhk@8 m_}%Qx..+ozBf}VBM=R~<#7[:OU3dwA06#rT8;r*z(J`w2iu#Vgv^P;' );
define( 'AUTH_SALT',        'LkU#6R:t=q$*(I|IvVfcR!7]J}ucA./GrnfYkuIORV,c[Q^^ql;lrrzL[&w^nnN1' );
define( 'SECURE_AUTH_SALT', 'w*.^hFv@a?|U&k&6QP(?tKG/qQFHmo`^q^3*.w91)1;sBdQI8i^#{sLl)H4+.:gN' );
define( 'LOGGED_IN_SALT',   '1/6>C[UMUeT|8@,9meJsM?`[q;J9,:>~`~rV./`t%Rc|W^G30&P9vN}H*@|ecySs' );
define( 'NONCE_SALT',       '008gzD7T=`JhZ$FEkpD:hM76]<5?fFNnm3m2*>_)Up uXM,O6knxOWrGbMR^;aZ$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
