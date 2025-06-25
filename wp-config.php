<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '.(;ri |<qE<7UWU%t[g7OI OWs3-enQQ%{k<<N;,e8-Ea.+YdCg:l!Y)6(_:oD~6' );
define( 'SECURE_AUTH_KEY',  'Z%`C|UtS=&WG&?IQ9Gn}WDU}y5fz}`aZjq>)VK,:j}o(WhOBN3}<xbbyaCMbx=9G' );
define( 'LOGGED_IN_KEY',    'xpaq0{C_F?}U@2gP5j]V elD9D19?Q~:z,n6HiMuC~)S&<1pLtx&U9O&h|T+R[Q=' );
define( 'NONCE_KEY',        'A&zUGmkZql>;9`WR2[X&CDgyF}?SxOxprNAYP[/SzJT.TGD~@qz4o82[mR/ =l:f' );
define( 'AUTH_SALT',        '8|%}K~l|197dU3MQ7e^cVGD2(~D4G[EO~n>CxPGJFuQZ6>J@m<hZbJ4(}@Ro+EJn' );
define( 'SECURE_AUTH_SALT', ']1)-Z;P*8LGGc-jMqfeW3mbc9vy *fwv-]Kbfwm5cL3%veaOq*=?q?Kv~+_q1a:}' );
define( 'LOGGED_IN_SALT',   '&2}@On73*EUh,Zh&`9{]@9R#Qb) ![O}0+^dSZU.QdOS|~ZB]BDtQyrr.GZB8`hi' );
define( 'NONCE_SALT',       'oUL/mpNm9K(XF d?BIXPG8Sr^vd#Qo*5^d`Ar%Z|Eklw*yK8ey~,?_F=zTxOPZE5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
