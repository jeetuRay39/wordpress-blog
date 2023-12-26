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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-blog' );

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
define( 'AUTH_KEY',         'BO`a;m5b#O92X(F.:kw=i;8X4cWJ|!`8?:z$7#%+9?73G7(GLb~X~)OY?U.UMljo' );
define( 'SECURE_AUTH_KEY',  '-D>|PVpA}kvWG*)LZCu0TyXkb E-kUT4:Nc[p?vp_xV96mZFg_gLMkknwdf~P>OR' );
define( 'LOGGED_IN_KEY',    'AT=>KEr+ucwAlFB=Y@_avM>&VL,aw)Q*!EyA3K>>U6I}Vz{Qu*[4^XHte}-GdL^z' );
define( 'NONCE_KEY',        'W{#shl8d!b9tz_|%ymwgQJdRj.iSgy%VeU(:<e90G,3,-%8Z9RAo)RI9z_4A)3mb' );
define( 'AUTH_SALT',        '9`>z7~edrq;><(vpA>~vEJciDgai1dpE}zTfBDLT*9y,w3qYm&1]bMvH)@uf[.Q6' );
define( 'SECURE_AUTH_SALT', 'OS`ozD4w+^Q2V-0HeXE(RL@$NMo?:]CA{z)(: omlBz%MxbC_nZ1,p02EqLK4>#X' );
define( 'LOGGED_IN_SALT',   ',pPg[g;V``=pLa}~HaaWeb9B|@r-xYkBil{ djp! Fseu_Uh%:YT^mI{6iUYh1Er' );
define( 'NONCE_SALT',       '1)iKJ&C`HUfk.Fc%B2L:4HdWRl=?O@#-/q*mfu;H!rJWu0mQs.9o,4nFA/`wp~v{' );

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
