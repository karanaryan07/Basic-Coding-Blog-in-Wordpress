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
define( 'DB_NAME', 'testsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'CF3H(9gVcH6HuaTx~GA%w-:u*?K3{t%?O]8G[-WB8z#^6e.R},S{Z20xp[o(nWBK' );
define( 'SECURE_AUTH_KEY',  'D[Gtbbn=@4:^Z2-dQ{I^q.o@k45XYW;I/Xpr3!hZ34hRG+n4&6FOAlQ5/6k2%c8L' );
define( 'LOGGED_IN_KEY',    '7M,_&L);BTwb={s^0]7ug+Ujc([K@]=0 I4]3;4%}B$}AC `oby$dLXi46(aak{#' );
define( 'NONCE_KEY',        'BVDIpLsc.(F ~zZGqa}:3ql`J4d534LD=/|dR5HQv!##Oat_/?_o.}{g4h`0+&r-' );
define( 'AUTH_SALT',        '4x*SYHYF]LDdKnXOT > |Ja>K(;UwWROppu7x.~keXR^W$?4JYsX|qG~$:&ltLl6' );
define( 'SECURE_AUTH_SALT', 'tO4q+zl:Y|02POYs;j_5+j+5Iq<a5kKogo{}:c!8VI3r9%idou$pF9&,f+!dmx.>' );
define( 'LOGGED_IN_SALT',   '%{FXWM]d<Yyq{m2|KEf7:x<S %XTv5km]DqD=y)DG_uQ1k[f<_.yB`PFLH0=|8^D' );
define( 'NONCE_SALT',       '-5!]ybO/yhqRz%Mc`Env+#/(8M`o0)C]xyhcRI)d`riC_YTrQrO >1k3~JAP|SOQ' );

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
