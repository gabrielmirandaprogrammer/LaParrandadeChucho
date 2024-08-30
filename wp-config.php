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
define( 'DB_NAME', 'dbpagina' );

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
define( 'AUTH_KEY',         'zLL1Qn]tr%vn6S_[7R:v?^p~9aB5>&-|*0+*v@vrb%+1o~eMDy)#0;^|Z.V?fW>c' );
define( 'SECURE_AUTH_KEY',  'YcRZoEXh?tEYuq.D[fi;R%-d6);*]+[]I X(.ZM/6|gPF%UMk^%+)LaBKu(UOVNx' );
define( 'LOGGED_IN_KEY',    'Hl6X,znYP(R|@EB31Gc/,6S[iK~> cWnwpz.L>u-c|+O]NB52@}6M*-3UL=H*d(v' );
define( 'NONCE_KEY',        'A0xMU}Q|N*FG#<@*OSh?zMxpSj=KgH)q2^IMStD6`7+l)WcX5yQ!W|)-zwOWaC8B' );
define( 'AUTH_SALT',        '3{1I_ewzC<>3p_|4(Tx97i%&sM %QS|Lqrd{;yZ)?Rx(J[F>fl=Uau-g{(p*TFer' );
define( 'SECURE_AUTH_SALT', 'k2MMW^=+KQsmQ!Q/UKOu]StkL)BM_tX /%<|}jn.k8ar8uvU)!4^ml[eqA@o!LLL' );
define( 'LOGGED_IN_SALT',   '[YSp<%),iw7K[S(Li!DVCsf%O79AM6XiJSk&3,^Srh&6<2w)7#7US%-:a;RZ3T-8' );
define( 'NONCE_SALT',       'm+M>X;zpi;`aF<!Gp$bgT}em-J =sKNgDyEmHs}{ #0ivadJ9F5*tq4.<G/sW;p!' );

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
