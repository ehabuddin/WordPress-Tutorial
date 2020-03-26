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
define( 'DB_NAME', 'learningWordPress' );

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
define( 'AUTH_KEY',         'vV$!}dnT*D!}&ySH|c4Q m,+9DtN@sNL7u!EOqGY5U#UJ?#</}|`i?69rE:(|E]+' );
define( 'SECURE_AUTH_KEY',  '9xB@F!QFK1Q@/EBO;PM v(:zL9G3zotej_<=I)T7oQ1Qz`z:^(P;Z ]IMK]NKFVv' );
define( 'LOGGED_IN_KEY',    'jnivnekq+52;gf-i+zF6Bwv%VX%z{K`y-6SQwwT9a7ck,S92>,G-@?:v.Zk/9?zL' );
define( 'NONCE_KEY',        '<^A_Er4Vf=fkHu R@vLuiNfz>TPrs<9a4;2E_0s?55xri.OTOEz4Rmy)J<}:1m~r' );
define( 'AUTH_SALT',        'P48b2f?{1cMe (2>3 (;YD3VN^dTimtg]|mmPG^7?_Kx0.RGl#?$ft2@L(7}2C5s' );
define( 'SECURE_AUTH_SALT', 'EgF<t$izzQ$;;8;eq%19p<[x)t8/v~yZm.Om<:(n$&p%-^&2v|LFt~:bT*Mcxldd' );
define( 'LOGGED_IN_SALT',   'l(qvr3VbuKM1RX_cjZA`plxv5y6}WA;d`?G0g?KyV+9^c JN K/{x4Yn-;v4QUfe' );
define( 'NONCE_SALT',       '>B({^{CCiWzuC=n#cGAhZ5?}?}A,&j`LI>uW%Hbh7*C&J|2,Im+}a,7mQ},R?yVd' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_testsite';

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
