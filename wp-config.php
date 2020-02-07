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
define( 'DB_NAME', 'kahaani' );

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
define( 'AUTH_KEY',         '7YLgItI:Iw/iib{f-z7Jf[w:SB5o+oX|la;#O#^IhdM&QaAC|{#aA}Q{0mhwBN5Z' );
define( 'SECURE_AUTH_KEY',  'R`%qR{P*-NK<D7y|~T2DMvW$F|1u]J]A[kR^bK)>G6<zzn`1 p=J;BAUlzL%7 jR' );
define( 'LOGGED_IN_KEY',    ')QEvlPJR!~+mo92e.+@MueU?2Y|[7)DFet$ehQw4$e;.WM/T!Smvg[gJGo3x/p~[' );
define( 'NONCE_KEY',        '7O0/rV>lx(ENe)rrC:4r_7G0,|unI12;%x^?^,{Kq?{u=wTsh}f|>rBirM`u6s>-' );
define( 'AUTH_SALT',        'J::kQeVjC|U1eji+VovOi~ib^i6_7A:!!AnYa4c8OY9Tyk^MGLr,i6RZ7QhL@]eA' );
define( 'SECURE_AUTH_SALT', '(Y+Rj|e{}BTkHIU_4+e//ch]bF+:S^-~C$O:kh$Zfw/xC1nmYe1v?bC/_SNu+.D;' );
define( 'LOGGED_IN_SALT',   '*5&:Aj}@osB_>]/?wtFo&/-m!Hyk@d#2nnxaNTaXzA2?-7Sfi/0;H4ds(?7I9)U`' );
define( 'NONCE_SALT',       '#D_<X_,HLy8D$~~4wp^aOa:rO;SWyzA3iy6%(Ph 2%bOoHAc!p]NpfXGlmuj+SxP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kz_';

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
