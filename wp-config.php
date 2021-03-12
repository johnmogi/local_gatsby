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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gatsby' );

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
define( 'AUTH_KEY',         '3a3sJJKM^+k-@>{Tz@m65![;Gyn_z2llg,a 1pmE57Y]*JG(,+/a;%) ]K]:q^8X' );
define( 'SECURE_AUTH_KEY',  'uU;]/#CG>RP7I{(y[&LVcVxCH`o_Du|2y;,D!o6qjo @,v@:!@b1wFTtr&p-hTUc' );
define( 'LOGGED_IN_KEY',    'oCqWa 2fg@R:G$E?j _W^ad{hyn45|sDQ}F8tKI]c-(sO9N}tC8?JP&DQd#@N$b_' );
define( 'NONCE_KEY',        'PNMElFezUD3Z 4.yI$ZsXr,:64+4$[aLK~{Lk78#KxtG$,~I5O%=:AFJwr{I@P[]' );
define( 'AUTH_SALT',        '._WK^1Qh]Y?3pJ}] g.E2S.[9|2G s#%9d3Am;+$ltTwyiX[D9trMTrP[SX>k^-c' );
define( 'SECURE_AUTH_SALT', 'Lidx}qh*R@ O7EemfP,<g, XJA mBHp=R{Nr33fx[1_=NZr?&=e[:Kv3{E.m4eWe' );
define( 'LOGGED_IN_SALT',   '1zdfm%,dTiL-xU =FM9v^`)4h,}`5)MWD`>rhf:6in%0O3`2<tK%6K&.R3ui$Vxh' );
define( 'NONCE_SALT',       '-`EvCv1|~QJtu]St3f_fEbB7Ck~Cn<fA8~z /di|5Z-Wj&l&{nbd0KIk-v#;?Nui' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
