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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shakirisonline_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'JIptIlXlh#$}-oX^Qni@`cocFm!/.hr6E+_>yz0YHhs|L25%i8R<!).F2MQEE.+6' );
define( 'SECURE_AUTH_KEY',  '(p+w#o{gds2)XwKzRal)Pj xhPnY2X,mUv^,4g(XgT]?mB:w9}T! g*Q-2G2>F[5' );
define( 'LOGGED_IN_KEY',    'QyvuU]?eA[HDDvL5pZSe=;B~~w;86e7.4WIx`:Xq!F<9b)@*%L&}qlfIz]|/2j}E' );
define( 'NONCE_KEY',        'i:b|UZM;4F;<_X~o^r?~fC+O4 eb^m6e$3Z7W>?glSR-*fQy%JjKvgAHE)$5Z}m_' );
define( 'AUTH_SALT',        '.~}He2P{[OdH@ @Ik5abFSdh3`@)`m`araV*d];BTTt@sXbf!C/N!3_|6l,_R)Qn' );
define( 'SECURE_AUTH_SALT', 'd~&eBj[zqYt#3DjLl64RNS/ 6=SL-96H>5r$O>*K-e|Pb!wWeV[W5>/]7XBfjW2T' );
define( 'LOGGED_IN_SALT',   'oR)fQ]M|8daui9ETtS9vKgdzL:;td-7!zXesVpe-<LyqQsDL#Gr*0ufW<R8Ksn/z' );
define( 'NONCE_SALT',       'L>*5c,]7u]B>~!^J3M;:JI@; E;6:e/l59KzunFm@T$1+f|o;RKp1H=9V{`!_;g)' );

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
