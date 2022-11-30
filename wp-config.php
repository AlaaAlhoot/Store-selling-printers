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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress12' );

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
define( 'AUTH_KEY',         ']f;t3limW-w{T>:UPaDr]_QQQpJE[^.Hf^~Ul=rY[KnVNZ#BGAv*Dfu^7H@B^R)7' );
define( 'SECURE_AUTH_KEY',  '7cwxoiL30z#_,F3yB/@2^N5>izS#jh!Rv;M1c}OqEq:Ky|9F@sdG!?YVt)QLu6$w' );
define( 'LOGGED_IN_KEY',    'gUtC.y2JAKS>awfO1`q^|JP)5m ~]&C;DDJd2Yq.gZ  bM~ymYPow9$CuUcy-$8=' );
define( 'NONCE_KEY',        'FhC*5,EX04S)XQe43`^c XXXY#;6ZUUvRy_mfJ{%ED?_|!S7&Dc-H>O=r+<~_c$5' );
define( 'AUTH_SALT',        'RJs_1}<sLaIvTV,srTtYrV#;H[5U;Cfk?592yk}36veK-`Keu4&szCbpx[9rGEq6' );
define( 'SECURE_AUTH_SALT', 'Op4kYms;{$b7U>#mCUc+pHLf{lxhHi=MexMzZLSGmp& p=qy8lO%i[U|^ss% %p/' );
define( 'LOGGED_IN_SALT',   'J-krvz^+;;$2}<1;$`cagZYob<He*wnqv5v?J1*g6QTP +m.kxX.o3gUGFsh~IG;' );
define( 'NONCE_SALT',       '*s{48x OO7aAX.5A:m46pg_yR[H +%^O#>;nLu^*%Sb+w$,2.>cBF!R{e][g&gr5' );

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
