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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ' VP%<f44M`51ieaIynj~rRz6%vIgQ55&_ SKLT*ngA(XQuqv4Gr@n<Mjl=zXEj)8' );
define( 'SECURE_AUTH_KEY',  'MAGP]Utm=8y#-B~)fL42OTtlhM`PH*2p*o8_}!X]YQ-k!}=5WEYqV8</4K_}hwy-' );
define( 'LOGGED_IN_KEY',    'Jq9em(La zJBbt3;1!.V,#XofDS]6_1+uasv$y@y%m{LzyaFV32 <8wrpS|-EJl^' );
define( 'NONCE_KEY',        'SNEz(VW=`WSO?Q1<[p4-?&]bvhkP5KN#R#1)~Rj+*n?]([c@CLDb/<Db%I1z;e`?' );
define( 'AUTH_SALT',        'gPc(u[4oaqp&=:hY,GXcYb]F60PS0 W!okoqZl(MA0EG@Y=3^ hI)qQ+)B/a>Zaj' );
define( 'SECURE_AUTH_SALT', '>s^DA+I14jly4EwDe0dZeKUPJ_UfYINUN!XNN&y^%8ZT_Nl3n2!-xkTMlY*|$@(?' );
define( 'LOGGED_IN_SALT',   'oFn9t.e.|@52puZqJco^kIOTOAU{k&FmmK~HK?q4YtOVf~6 2HhJOd$ar[vo0{r+' );
define( 'NONCE_SALT',       ',7`FNAVu8p/uE]05m|&8So8%>}JA+M#!ry|c!INsxYW+wSsq#w=I|m9)& cV[3my' );

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
