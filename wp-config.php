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
define( 'AUTH_KEY',          'j2&A~_xg=:]p%79+oK-ztMSRFW .X1chox~XKoEbiaiKO2`fm`H8$m%8%jp7vg!i' );
define( 'SECURE_AUTH_KEY',   'y8WdAOo`SYE7>)z<MfO-x;%%MC=q15Rnl,p~o-jt&(~zK)v5a*}m]N?PUt;TDpXk' );
define( 'LOGGED_IN_KEY',     'bw0a<c-RMnxCR}Ba;l&&M]}K=vIC^/@3xx[Y_p2L<GF4mREYb<)?1t/>w1X_3!P/' );
define( 'NONCE_KEY',         'B?Xd~N@yOSiE`]](XwqQpeqt4OYru#/8DYy;4_%~C$+}08<5x,$*fLEP+`M3f9Ky' );
define( 'AUTH_SALT',         'LsBwDyO9cCxEUY$iIHbt4DW`M&:.|ym>)]F(rIUn4-H9jV$FrolBJs_F#?M.N7,E' );
define( 'SECURE_AUTH_SALT',  'Z_0-Y7~i4>KeEbv/|Lb-D.#+Eq0_o(MnNMC:t*!a]1tk~G~<6d*I$d2!r]I~Vw%M' );
define( 'LOGGED_IN_SALT',    '%~]`O,m_}GO$f]+xUBcaO;vkE4/N|$kgHil&Bhmvq+=cQl^hYc&>RO=:tS)<c$*s' );
define( 'NONCE_SALT',        'eRrV,c6.k5h MRSLc3]Fc$Y`^rm8g6CD^,q+S5pGv;9usU-h-t[lD!P},-cReMiR' );
define( 'WP_CACHE_KEY_SALT', ' x7<F,PwnV|9VR|*+[dq-K(^:TAn+F3TwG^w[I5N~Q&/c9t&QWQCbo(@KYP9oqj>' );


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
