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
define( 'DB_NAME', 'udemy' );

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
define( 'AUTH_KEY',         '#$shqiUn=7(|6<up[j:Fh-e7L<yiVXB5HtFA;|kSQy?4M[9V+`?TPE$3r3y4h@&9' );
define( 'SECURE_AUTH_KEY',  'oN@U=MJ`)kR7EnVmJEV?6]!xUe/Eep7AqU7d)&f@$F}z(eG+]Q1ZIS3DtDF2{BBD' );
define( 'LOGGED_IN_KEY',    '~_&-kXW2S@tWqK3o8O{Suh83~%jAgIJ u+ds$vQ!In]eYuG4cy!szl*lG5@c&b$!' );
define( 'NONCE_KEY',        'Ju$*x#zF# MdGJ#HJY2t)a=PaT<27Opb^3o#l:#v@aIDB;~: W*|Qcj#BzOpLuIk' );
define( 'AUTH_SALT',        '#=fui,f7HM#k*.>1?7IkDz#:2y!4]5meM~}0PIv>rjM Ocl@PsoHy+*Fo$fd;R3w' );
define( 'SECURE_AUTH_SALT', '%_Xx.f^]y4ECoT|:XiRQY.f=Bk~it6TIM0.~!GB!@%T`AQioWTZf)ZhFYX~kk35(' );
define( 'LOGGED_IN_SALT',   'jFoZ|wBro Y{R} 7Xs.`R<&!7S+[[g~>78GU38P!btpQ!M_8]$yZJ8&p76P|sR{F' );
define( 'NONCE_SALT',       'C` bK#y+?i{no%o-QksX2b%[0Axuw5Hw:b=&r1H+[J!@]~DC//j!b9 t4+[)c0(F' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
