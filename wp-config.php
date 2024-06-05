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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_port' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ']ourg::4VdLgYhJ5-0i4Ghl[U[>4wUWJ&8TnFcct1&4Z[5&-hZRve<=]>2q1zox^' );
define( 'SECURE_AUTH_KEY',  'I]Kim8#aa ;J_7iEzz+4bVfKR</@=0vb-)m<$O*KdK*^{YTO;a1!dUI^~#r2yC&M' );
define( 'LOGGED_IN_KEY',    'RmIX_,l?2`9od2,)B 7xM)N|fqR.]}CAWM@nSIBXl^en]0=QJwSXOX/RuL_>c&9D' );
define( 'NONCE_KEY',        '#u*zgaI*WhK]kFEq_(%ltn6bP0Ydggi|H~bEP*zCz_TSO4AR_2`+LOr<,3wT ]mc' );
define( 'AUTH_SALT',        'Gz)cjSuClM!h]w#c{s;H,Mgdr],o]gyd^4,-u5_/3mu/ZIr#6NizqzoqY/uT0x9+' );
define( 'SECURE_AUTH_SALT', 'j[AtF$Lvkb%s)B[E@sQZEhx6__d;b8!!t U5t3q7%*O%)Zh>zZg4u:_Lxb8c{C,~' );
define( 'LOGGED_IN_SALT',   'z`YGt|7=aZG|A=,]bAYDYK-&PE<_?S!@wLAvJ5j`ksd,Ia?4u[?>%4mhC$#Xap E' );
define( 'NONCE_SALT',       '7Pwf59l/lb#@Iv7PpuQ3ERcBnq=6W@x*zyw)!Q-C8G9>E&-)ZKyKB;i0DjOTlnCP' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
