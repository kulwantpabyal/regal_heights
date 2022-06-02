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
define( 'DB_NAME', 'legal_heights' );

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
define( 'AUTH_KEY',         '|{Y$b*q|l9v3]rIbqG2w#Gr70@6y];,*Y.fOtla)^2:n3jsIlvoWv7A+QKq1:h?B' );
define( 'SECURE_AUTH_KEY',  '[>^P@E+IUzUH^0]r)tdcZBY{lIT)Yn0j(>&Njdkr0|NVNyEAR[m#LeqU7J#bZ#O-' );
define( 'LOGGED_IN_KEY',    '5l!zd-r5okoZFVP^N|Q35pazfoYIC%Obnm72>,Y6S+!hh+rS=#e&Ot;`G2UxE{[M' );
define( 'NONCE_KEY',        '?`W/FSD6j|Da}_TFj8[N`&G$kH4uk[4gjO.VWPWK j<,9MM./%&!$,OUl?MLavXP' );
define( 'AUTH_SALT',        '|#N&dJOcvY)=gW_5M2odcx2vn,0+q%c+6Mim|2uwdT9]_xC18;?`-]RG5xH+}af-' );
define( 'SECURE_AUTH_SALT', 'hEZW?+]rlp}w?2TlZNK.4YJE:Lj1!UEle<4e8%]LjS5a[%]K&K{8J4Au0r2JI5Ax' );
define( 'LOGGED_IN_SALT',   'L@jbY#n-L2MLy%lqS56KC!Pi~U1)<Q+Ow#8$jD|N&6hv?JM-Q-D^Gt3*qg2zcPSq' );
define( 'NONCE_SALT',       '&#2JzRx^!8e(Sce6)TIiMP{ NQQfRvCu@,s#-=B7`N|=In7H0t69I!MByKe6oLmr' );

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
