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
define( 'DB_NAME', 'admin12' );

/** MySQL database username */
define( 'DB_USER', 'ruralmaps' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Chen1011' );

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
define( 'AUTH_KEY',         'OZIy6;.E[#<g#0Ojc.W06RT=4g7<gw$5C@CglP;zRurD62!azo$j!=Qf<nS2$tRv' );
define( 'SECURE_AUTH_KEY',  'o%1}qnuEkkYLFRRwcZn;xv^QeYrc go%FB](Z?0f}ff<2Z`zOTHI LIF^j$4HnmV' );
define( 'LOGGED_IN_KEY',    'ZNfw@0x_@wn:2ItODA.c,o!.cr@^2)~3@W&r.qM>Jv.epru4s &~Q 1zxJUtjI{q' );
define( 'NONCE_KEY',        'ykOPgKyJ}`!HncP}x!9!Is;u~)1>X91_q>)tFuR+%K}O-eG+%PSH`HlJsZXdU~m>' );
define( 'AUTH_SALT',        'c.F_:nRiEW1mgORrO6je4VjbtyXtD;i8n7K(C`*rlQzxvKceV[tGxX ly8<gTq1K' );
define( 'SECURE_AUTH_SALT', '_<{51Uo+-6M!CS>eEHD{BK<hqg]Sz:qs*bn,7Fq{E,chKd+pm~3ObB[KD?<AoOWf' );
define( 'LOGGED_IN_SALT',   'q/op>%|H2u&AmXL#b0w@#G )p%L ]U!-koA]BY&V1gR;0}4u2/yCU:TE(s|~o=Yi' );
define( 'NONCE_SALT',       ';i4tF6b.r)7:c;QB|6Oa9&@!. #U}N!``KB)GQ;V|GeL3-h0jK/{uy<|?j!]_1mp' );

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
