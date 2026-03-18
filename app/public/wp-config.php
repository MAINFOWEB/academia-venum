<?php

//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '^(qSZ+ u%Hy6%nfeGJsSUo-p8-}09OKdTy)4)X0B+-X@#f`BU&:]0J&W<UQ8{caQ' );
define( 'SECURE_AUTH_KEY',   '~(],(Oct{pwwyExC]*YXU`yi-[Vx@;u5q_TSqAY_6VUI6 K;gLF65*TS9}T!r5C%' );
define( 'LOGGED_IN_KEY',     'OyYR<bQ1Pxler6 (K%=NW)!j$Ur$W35PKhDvHzr~-k -C?{@IQ[2R,Vun9?uNCy/' );
define( 'NONCE_KEY',         ';bB&(e<zi.jVuncx#swUw33]Do@4KFH}UnT^%q;_!O)K*oVf0u(}]@F}-ch9L^l@' );
define( 'AUTH_SALT',         '`-~>k$BFVj/u/7^Mk(MvTSL,ShxydgDq|o}ax{E4Xwjj{jlU2Lf)T!TBY0JunDUp' );
define( 'SECURE_AUTH_SALT',  '0in:e~eV=:hWOVL=>*OF0|i_~rX8o>H.^QxN;N+qbrIh^eQ#ZPgj:g=m5lP-ba%W' );
define( 'LOGGED_IN_SALT',    '/GK!72hx8$R`OL,zSP@f={~PW<+gNZnAbY$4` c].5r`qNT{yOb|Z)C-N*{s*%(-' );
define( 'NONCE_SALT',        'j[*P|r[rl9?f6f6l0qDnW8e/[WIAO76}[Y$oROT;Q_Y,5|~IkIF jxd?xS28VrTK' );
define( 'WP_CACHE_KEY_SALT', 'g^_uu;|0>hm=z]!J+kX+pfQ/t0|n#?(TLc.vHcAA>Kpw$3F]ne5ZE+4n(Ye#<yDh' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
