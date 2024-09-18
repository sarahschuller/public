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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ',&mK;TArbe1WMR_Q;KKtbSfD:0K#6~!b:MI-ZLy?xn;/fu720h]I4R`&=?+)4L(D' );
define( 'SECURE_AUTH_KEY',   'b Xa?V+L`x1?~LqK<1Sx{:/-xwp7>AM-lm3@XM%!%CP_OZb5Wh[16y{b0Q%QZ_>D' );
define( 'LOGGED_IN_KEY',     'IzCQZb__2-}:d=`Ln[:Z@k`CZ_x3 /~+skA4nT~{&AYjVV*/]MO--+1Upg*;L.f,' );
define( 'NONCE_KEY',         'v,^xObJn 72{.4Vbgv3ML=Wr8~+LMr`BX{$F BBHTxeyh^wR]hbGRKY$pXeQ?b4m' );
define( 'AUTH_SALT',         '5LoS3Sc>v[*uhc&LwMII4jjlP~?!F}7r*t~.<5cjnzO2aGFKh?<_+)nA;9iI$Jr_' );
define( 'SECURE_AUTH_SALT',  '?en]R~(w2]D7d{BG?4Wic{~)ea#A{s;.c^|]1eL%#>n/E!/>!V{;C<CP= 8;v*@D' );
define( 'LOGGED_IN_SALT',    '<l<=^WDPofC=0<zw0K|~378x#[jo`qeWr8HB#w{3aWl.g@r+fz6BUF_EFNOcn1ZI' );
define( 'NONCE_SALT',        '24c?aI=E(5,NR]QDOmJ%SvX,~7]bW6r&|1C,dg<hcv;vj)%p!!CbbiFqv=U~?Bi]' );
define( 'WP_CACHE_KEY_SALT', 'IkHCLW,5w&uF(Tz1  ed[/B X0ooK3rWwYRkV}066MFF]6!Fn_LVDP>!VOQwM7^7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
