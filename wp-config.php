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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'master' );

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
define( 'AUTH_KEY',         '+`[Y-zyz8}!gN&wq&>([3m#JL*{ouMk4 LVTaN&uOpH~%8Z.j[?-8}1o%HzpTDMv' );
define( 'SECURE_AUTH_KEY',  '?p`M-kiu>>Iy_-y1Y,ytZ*t{Re>W<N/?!3L>E[:Tx!h5Co<H,de30&%dr{kIzZf&' );
define( 'LOGGED_IN_KEY',    '4!_pzw7SHp%$ws{1IN1?DErV6Nd]1ocb1SEM;Z(!@U0^O79x+SL),Ewm:z(%F#v*' );
define( 'NONCE_KEY',        '_2~;BQYN@qX.Ze| iy6-D+Qi`]M-s](i$TRZ?P]f(VCkF__L2MzL9z=%>@NXeBN]' );
define( 'AUTH_SALT',        '(k(3%Ygq^:g6HszZwH+xtvU<}|#z9|XrSdu}HnIUl[=YFhzcz#n(DhD/gmr]h?[B' );
define( 'SECURE_AUTH_SALT', 's*N3stOS+Q{CR|f:dd(}P|+$Ed-wG>CW^qy;ER7NJ.J_tU#`s*(`iSbR490Eec>9' );
define( 'LOGGED_IN_SALT',   '4/Ox{2pL#nB7}mDLiGH1Zxt9%x*P/m=R<t3PU?A7oBc>.WuX,0C*-bNl <oeE4da' );
define( 'NONCE_SALT',       'qSFdT)P7126.Vj+qj5:42HQt*bA{q~|9F#^X7K)VO|IG&gZcjHXWKH;X5JW87;SK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ch_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
