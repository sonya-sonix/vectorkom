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
define( 'DB_NAME', 'mybase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-5.7' );

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
define( 'AUTH_KEY',         '[J59,KGKi]B&}4`8VD~<[0c!n4vy,Q`ECy#L6i%<%}unF*nh&1i`i$5yxrb)huF+' );
define( 'SECURE_AUTH_KEY',  'nC>. 7HG7POK;>i)84uEptBNK_C$$FF<r&y_AeVwxZpqwY<ok$=vAk4^7xz!|s)m' );
define( 'LOGGED_IN_KEY',    '0Hc$Af8]m66&q^vg1g2,:+Q~[Vz|G6t >O8CqDvz!Wyb6ydQ~UH/1!e6@*;Wx-S.' );
define( 'NONCE_KEY',        '(O)/}D/pVD^)z8klu,;4_98U-R2O~qLn]V`]BDm&VmWITR}*Dv~xo>2 LuzwospX' );
define( 'AUTH_SALT',        'e(f$C6Oc~.; Q@Y^ Dq5_cEkiS$e48=`EW}`-mR+FIKwcH:#2qqC`rltlaA q]iC' );
define( 'SECURE_AUTH_SALT', 'xCeR{j$;VyXfESw%)sbZ;8$N~2?|Kt(?eYb],&Q5w5[w%nkO Ad/1aB$KF6/lMiA' );
define( 'LOGGED_IN_SALT',   'g(# SgbrCC-7UP&/gHXV2{bxZdPG3Hqp7es)`Zo<Pde:X8PSKP,f_yB>Whr:T|y`' );
define( 'NONCE_SALT',       'YF@RD*a36#_/zTfo5Pd*eLN!tr{)#Hd0su3MF[+/SzHM]jeA~Dld]>F]KcMW]hRd' );

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
