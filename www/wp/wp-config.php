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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test' );

/** MySQL hostname */
define( 'DB_HOST', '172.18.0.3' );

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
define( 'AUTH_KEY',         '5Za/Qn9&<2gG{<oSL}g+0V*)Zp-3&oa%g:kQD,yQI%N{:+PhMgo^fU75EIH;h`y.' );
define( 'SECURE_AUTH_KEY',  'q#dDF^j&]ly*Zt=q*4z,E8~/vd/`^ hir>XemF>s#jA_7OpWT@^eL1(^?r%-dFu(' );
define( 'LOGGED_IN_KEY',    '};DuwwNJ3|i}Cq e<lf62(*4@J{#3CZM~~#Q$ZDuTMzmEV-*W32W_ubOhQ<1Y)]5' );
define( 'NONCE_KEY',        '#aMiCd7JR/vngN-2T)_S=T//:0|kN&5P(EfSI7itr:ywzH/44D,ab?LQ5<FKPP`.' );
define( 'AUTH_SALT',        ')InRe8Pv&MVv]z]6-9o,m-}KP|E!q0L+>?;#o3sLI_TlHm3%2J[cYr!,MHAxt,X;' );
define( 'SECURE_AUTH_SALT', 'M#Or> ,a:fv43Vi/4|:Xa1[Wre?N^jIBNwX0I>S!B)YwlRUhRR<k$8Yo 1p,&vMh' );
define( 'LOGGED_IN_SALT',   'NQG9`H1tq=ym uwuSXJ,LPgx.4xi3qxI*<&6?f0$SPU-}BU+{WC%AK,WaZ}h@Xb=' );
define( 'NONCE_SALT',       '@)_W!*c,[DdBg_07)?;Dj_u9onnrOs{Zb,1LX1gZKXWw`hk[yM%lUK^C<=_XYNQN' );

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
