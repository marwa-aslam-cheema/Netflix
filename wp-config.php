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
define( 'DB_NAME', 'netflix' );

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
define( 'AUTH_KEY',         'a7[7r`&Eca([Z^B-3nTjX?;vxL)C4R`2.Clsw?59 HTJF_LW`.Ln@B?D^u9a[%)O' );
define( 'SECURE_AUTH_KEY',  'Cj 9BnbVM5,dknWx/H[G(EQ~J`|~V4?gHa40`17<iWe)U@OS8{u#p5Z2W6Epn3XR' );
define( 'LOGGED_IN_KEY',    'rVAjNB*([{;mJz2D s8~D4vb4gWfPjnSpa|1y`wWJxPO[~GF>vRqPpX- RZJoFBL' );
define( 'NONCE_KEY',        'A^R@$jG0*3fG:S2hxb{r:+n]S[(+aBJ_*p@OEk8M(;l*8+D<-wjPfJF-=;0L{9Hg' );
define( 'AUTH_SALT',        '5<$,d]xHviaYT.Z(4ewUi]W!$)L_ZVv7_-.<Hrb?|hf,SG87s}UCvW2s3kcW+2)_' );
define( 'SECURE_AUTH_SALT', 'y}r<){&gs@q{nY9-fkrHq)BC5FcHWLR/9Ytw8;EG]m0U>@TMW+`AF2x>D+bGgnu^' );
define( 'LOGGED_IN_SALT',   '%CP-G4q+4;QG:E$ync^5>6il!ml.0K&npQa4 ;j-Qp!At<?j-+>IT`)t?V1JV![i' );
define( 'NONCE_SALT',       'J8UsZ1{Ddr3hG>jHsaD)f(df5!)2F}:JBjDxGb=pPM=0B|L~%a@acbH,2O?F6 .Y' );

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
