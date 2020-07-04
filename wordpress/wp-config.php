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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'j~CFis]:PB? @h8prdx-l4q^JX)k~JR/9RL3gOK.iBwos38ykQ`un]dn[F3Rz9kz' );
define( 'SECURE_AUTH_KEY',  '`>RJp }&q9HUDbiiT~{O)QKZ@k?96dz+7cESj&fHv7)-Bf|<Vnjb8gnq@&KD1tjQ' );
define( 'LOGGED_IN_KEY',    ',>U0Nc#,kb:K5]eFXfR0IpH%}l2jA7mh2$y[Zg0v=FR50mN,wS:4PTPMF^0vaYz?' );
define( 'NONCE_KEY',        '#EaC8P9=GL/a!ABYso3nS8#i4^(FiwPv~s8=sX`Mi$}.r0P 4F/XL#~R_TCgl%lv' );
define( 'AUTH_SALT',        '{emNm(rLK{- (_;L]C]O#cfm`c9[Ebuj/YG1HM2s7(W~E0qi2wV5!SAyxOE:t`ae' );
define( 'SECURE_AUTH_SALT', 'LZL3{wK+ecWoNtDmu)+//HVmnO cg2>Jw}QSFzV)H^c6dCza#^olCPkJv_I~kq(x' );
define( 'LOGGED_IN_SALT',   'E#`}8(sX6sUfX`>VFPUDf{15MSFEe/h)kX7AO}|l,C;K-Zf0d$0w1bS6$l(aUD@K' );
define( 'NONCE_SALT',       'RumMv>%LFNcC@@PNYmW%;(![hfR0/~ZcL:H(dUiR={1p{&46^kK,B3sy.EVDnEEN' );

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
