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
define( 'DB_NAME', 'uon' );

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
define( 'AUTH_KEY',         't.(G?RZJAV5F]fvn0. F7)B.h8B{Pq1yp<-%=$ -d&{AT<# X4Sg?N:MYq>{RTno' );
define( 'SECURE_AUTH_KEY',  '5f[Qw:KITo$?^*TZ%^7LN1:/~yU=Qr68R$x,I2Dc54+Pp$hhOjg;,oIlkq8T8}&a' );
define( 'LOGGED_IN_KEY',    '#hHC!6J&N-JxSn2<;8RC@dYco X#)gt]xQ(;@x-s7y){*0@gst,HjZxSAIz]VuQ<' );
define( 'NONCE_KEY',        '0dUHh}l@jtOT![:<ADC#Ildqpofd5eG}2&D%$Jq;%+_h|;H;gQQdZomQcaGMxj8p' );
define( 'AUTH_SALT',        '32<9*eZ)HGIhrw(t)&@{0tF1qDSk?:2;1@.JW:]}d38Cp!H.em.iO6^+sKB$VVHo' );
define( 'SECURE_AUTH_SALT', 'h$Xw &WG$]cAG`.F&=|J!*eSI*(k[kWH:bZ1K|]W=C4BGOv#gfvZ${.D5}I%tgAv' );
define( 'LOGGED_IN_SALT',   '_r&aKTL~fzzkkLMM1hpay9?LfXQ9BGK==6fER*$rgzt#Lk=)*cN8Xh~Y]4Y6dG}}' );
define( 'NONCE_SALT',       ' hCLT,!%AXz.o:f_fRa9p5}Sc6sj3w~0xG@y`mj|]fyvuo:ZR>jWsd% u?zU$Vx0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ytxuonbixty';

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
