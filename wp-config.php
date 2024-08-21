<?php
define('FS_METHOD', 'direct');
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
define( 'DB_PASSWORD', 'Password!1' );

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
define( 'AUTH_KEY',         '^:Z_nGo${FeBh?Cs CIIj-%8xu4q<5vM@`#18rt,0Q0K{8=Hz]GDZ3l8Yr-b$|rn' );
define( 'SECURE_AUTH_KEY',  'q[Bhws,n4,^q5FZL1f|T?,6<BLukN$YG=!20R  W_>4^sC6]1ohyJ7?l;ZA-*)ip' );
define( 'LOGGED_IN_KEY',    ',eF0)[`D`e;P}6a?UNtGVD&?f}@1gW.7o:vB1>F=pf2Z.;d|INbo>Te=ZpKPf8Ce' );
define( 'NONCE_KEY',        'JWbAJ1EB qN7!bU`$eS}j/ZML8kY>;Ed-tY@$2=Fp1Eh/p1;zF@(|%g1Jt4oiV~q' );
define( 'AUTH_SALT',        'qDS_I9V2Pb.{tt{5_6d;!O^DgS{LVY1xCLqR`;6Dr/@J>1Vq#>|ou}#W0i>LgUw_' );
define( 'SECURE_AUTH_SALT', 'vD+MHkU?a9kMd_]K0U]tTxYzglevL!h-+Z)14V~0W7T;]-;6Gvp];vvll&WB9xyH' );
define( 'LOGGED_IN_SALT',   'o:(|vMlks@Zrs8o,`o_t(.W<uLC;:Y6lS_Tg-C%,5CmO|3+@dXt,72j9F p`)`QP' );
define( 'NONCE_SALT',       'V/!,;TLA[X.n_#@OncjJh,.dV0X({v@JGB/f}1L_x>(XGI1I`7o(Xm&`%]<}K,A4' );

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
