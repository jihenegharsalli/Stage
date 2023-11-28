<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prothermo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'E+0b/Xs$ru=zg(,aQ5I$5x<?7`rgyrS[<A-dZ2Dp7]2O ,}Q :wzwyiL(t{%L6+I' );
define( 'SECURE_AUTH_KEY',  'O1_fht~:/xk<|;_3DJ-G(ob/pRUm|[1*X?jftCc>>XFVS~zV!4d09j{f@0g~Z.Bn' );
define( 'LOGGED_IN_KEY',    'biD&f?[(UZl/%>_^BT19v6k?ArvN*HTRatV>/`|{Z(~V^`+~/>v^HeBC|(a_hymG' );
define( 'NONCE_KEY',        'vD==]&!IQ{<VInVp&>BQ.h}&%4HO{A{S=-;*k]tACqbM1:ba:KmUYq3[iwrz%*6c' );
define( 'AUTH_SALT',        'KD6qEgKNk |jh@3sY&?q!g&0^Lo&+&1HA_DZcU0v9u:EbG(olh*1f .fNDTgT?Jk' );
define( 'SECURE_AUTH_SALT', '?4?rc#t4F?Kk]+t*O2-wk*0DBqA@!kWj]8tsFOFUzzdQn%n,;Z=cO[KR}4R/ iV^' );
define( 'LOGGED_IN_SALT',   'y2R<_F|Ul`B`mGu?oaE2tyY b=COUMhu0&QO*)BX9CTc6]P6w/u>nnyK3(5iWZ2+' );
define( 'NONCE_SALT',       'rmE6_y&}y|km7UulTgc.R${M68s&rg-kASEKG&V5G6A5YQFWD.I`{ce-N2:UNF{X' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
