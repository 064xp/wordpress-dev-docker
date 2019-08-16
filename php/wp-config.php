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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'devuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'devpass' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'Mw=fjqkexBfz&9r?FM^GQz,|PbjFOLCb)9xj-a.$?(hRdw0BjykiO1RJ;?cW3FEk' );
define( 'SECURE_AUTH_KEY',  'A(2lO6%:$4pV]L/c:(rx6Ab+;@IB_TU^r oNlD0e:}~Mb.vDyNuN%B$s-i/]+K}+' );
define( 'LOGGED_IN_KEY',    'YLn65f#SIPuT,On>;iu66a 9r^IJ<Aqc4n=DLj681e<83s*SlM]vBcCb2_{/<*MQ' );
define( 'NONCE_KEY',        'yhrH>6_ Fhm@{J?>I)fKEYg(ms@0>t5|G2w,M/}owlId;<|?I?TW9p^A{`Tv{_h<' );
define( 'AUTH_SALT',        'r(m+C37(auU0[_k:K2% C*i/mK1(YBIxwF>U,r2sN9UMzLpWUOcoj!!5(Cfv.WgI' );
define( 'SECURE_AUTH_SALT', 'gzE6Zif4B/{-w?MGhfV9+dP$i=d*SmzR~e/0oh4 `q;mr`A.JIiXh}]u>xp!lr2V' );
define( 'LOGGED_IN_SALT',   'zYNUsLrGQ6gAg/C=Tdt4/cTU^uq]d|g~zG]W}Emh:>$h%_WkvgUboQTofn,?w]{T' );
define( 'NONCE_SALT',       'Wi+Y$U5kHz*H*4y;D/b0-x?7uaQ1kFO4tAHu{^]Q>H88I9Ra$)W?v%W?AylP4O6t' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
