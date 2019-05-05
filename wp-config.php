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
define( 'DB_PASSWORD', 'sha150895' );

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
define( 'AUTH_KEY',         'DwWZ&;DiGq/ei 0Fdq#>UG.BI>L{d/RXQA5G6;NsH6m9[Gj#jzYJxK;84,Yq39Tr' );
define( 'SECURE_AUTH_KEY',  'fp@97W)$u(4v}9QXG*;ck+b0# )_d}LIQ(;kz+KuF,$$.vV?n`#8!]DT;bkNp-%!' );
define( 'LOGGED_IN_KEY',    '27|/dFJrepcOW;et2JfxdGv;;>4e*Zg#_KvXkzZ#].J.]1#^VipLNe,zFBpXj_Y+' );
define( 'NONCE_KEY',        '2B(){oF9~%o1zZXW[tMXcA!|(L4^v9d R9n6 ;7W_DgV8x~Qd+)sxAh#J}7MAlRy' );
define( 'AUTH_SALT',        ']*q<bPA}p*23x2eh0M!k1*Ri*Td|0luQ`(MJ%tWc$jgai=fzPv.yvHZeKC($1+P8' );
define( 'SECURE_AUTH_SALT', 'sYqO4GJ?@6O_DWN^4?w9u+7xjqn[N6L]N^#x$r6x[Fx@rIK/Rh?uiI96tv[S<Z1C' );
define( 'LOGGED_IN_SALT',   'mNg7jN:W;Z7juWL@J5!12bEO.Qi[.Rtr8>lr<v<dxf @O;I<PBFc/Cqd|ZMHoo${' );
define( 'NONCE_SALT',       'NJ1J7ozFKXTIW{SLIwGx2}<`yh`JZ_O#Xx7_v~T]p|vZ~3^U<u1zt6~5fDa?:o4=' );

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
define( 'WP_DEBUG', true );

define('WP_MEMORY_LIMIT', '256M');
// direct install plugin without using ftp
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

define( 'UPLOADS', 'wp-content/uploads' );
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


