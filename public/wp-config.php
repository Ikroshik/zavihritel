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
define( 'AUTH_KEY',          '.fEbDYbUi&D<dXTm}/`0^^MKUN?@R9.-.(~#SZRjtkWE 43xB`-W>OIu1Kdc:IsG' );
define( 'SECURE_AUTH_KEY',   '%pN)L8sIb-92=@m_RzQZ5q77XUmzGyuJ@}FOHG_[2~@P3m2kzE^YDF+p*<v~}T0~' );
define( 'LOGGED_IN_KEY',     'N2tS|T>#VrH-nOXFih%/HO=^i{0Txd%b.K_oRw9-!Owq|_T!YqDP4MyM!xX2tK^k' );
define( 'NONCE_KEY',         'QU)Wvf!#?l*BeG9S33s4?I]44t*KXq)a#&Kz]F**IXHT,sic[j@?E%+t$Kk-/[A+' );
define( 'AUTH_SALT',         'Li ob+^6.1Lc:Flhd0FwIB9^(Dr*mJje%Ip{$+K_jH,Ut,~R)Ti,N[)5L1 uw(Lc' );
define( 'SECURE_AUTH_SALT',  '20&5SJ#=Tuu?wvvM8k=xE37?.z[DI|1U|+TY+,Zv7Kz+8X{eNyDzuzQYi3%]#VN9' );
define( 'LOGGED_IN_SALT',    '<N.!SYON+ejI3_TT^`LY<A{O]@r:=WQN~A~3cP_!A S, ~#{,+lu2m|gLQ^^~UYn' );
define( 'NONCE_SALT',        'X@mrjiH|!E.E)x9nnV+5%L#prf_2B/r|q[VC{T-gLo`Sx17?c={{?Y:t% nTS[&%' );
define( 'WP_CACHE_KEY_SALT', '@`/-l%*U}^3cG|5YL!VO{HI04sXx}hpDP`n?@d)^;6)z(CS4ZE}*}*>r 3+=jc6G' );


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
