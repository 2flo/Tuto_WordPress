<?php
define('WP_CACHE', true); // Added by Cache Enabler
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
define( 'DB_NAME', 'tutowp' );

/** MySQL database username */
define( 'DB_USER', 'tt_usr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tt_pass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'AHV6q3HPtUTC 9@$R2CPI-OVI0bN,&J#!M`#k@E4}h,:Vo3m[wjG4LDoFVp]-H7B' );
define( 'SECURE_AUTH_KEY',   '{y&$ga{q0jZLI&i_[+w[Q~:H`8Z8xhy^l).nHjUb gkf#zg1d>W.$8h]!Ll*-$5`' );
define( 'LOGGED_IN_KEY',     'nP!_&9K;VyyMFo]=T9GtPtbnCDbN*3PD=Z*~Q^wO)a~u`C(>gp1AW==q1wq|5[NW' );
define( 'NONCE_KEY',         'Z|IcBJxMCBUtuo)f:4fsMw.ftm7HI6Tmg=X[E$NbVz+lrMW_IRL(vJ8Q4&`rT`@*' );
define( 'AUTH_SALT',         'Ugh;Z/Up(T+R$5zq=6UK*%K1q$9?ef47t028g,7Edd,T%*$-j{xun+>InmXveq3?' );
define( 'SECURE_AUTH_SALT',  '69:5`e5~ML}>awLjVrOF{-~##O)+A6(pU*-lE%$PI.pA_XT4|P~<4<LD<#jL#w6j' );
define( 'LOGGED_IN_SALT',    'ZnyV[bZRF 0ZX{BTks~fl^(B@EQ{v?1v4[0|z%YS~0g>tz-4TK3L,YF+=}>sXZky' );
define( 'NONCE_SALT',        'HyP|IEq3NTadJi#OQ^30% n}2@OdnN6Y5`JH:t#H.!}:2@nzgWMiKN0qWhfDNcPv' );
define( 'WP_CACHE_KEY_SALT', '>$l:hA]>HRC:WkfMz>p}Ti{l~uTzm%dHC-OQCVvMC|o{WtCG2yBom0&7cq}r]3*}' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wut_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
