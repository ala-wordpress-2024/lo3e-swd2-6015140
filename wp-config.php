<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techsphere' );

/** Database username */
define( 'DB_USER', 'Jason' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '7qTAcB1mVSQ0K}M.A8rSNv3<g(mc^=!qcV2;];kv66k?g;&ZZ#]$aqBLvwk4[SOI' );
define( 'SECURE_AUTH_KEY',  'ifn(!,kIqt89ssm+k_o}<Po4]EUE4TJTzG-7hL9pYwhN[]uULV+%n@(<<JEn%c,7' );
define( 'LOGGED_IN_KEY',    'Rm4bM>F.d_GmSMf#.`M>.Ek3dV&gJniF&L?$n:![wE2~Ain-sVJ-;n6zT}dlrEbM' );
define( 'NONCE_KEY',        '#o{ew>j<n0#iqa6E><fupI}]nMv/WNi#:iMJ~QUm*g<zo?9b1C85]Sk.0B87NNS?' );
define( 'AUTH_SALT',        'EJ,qy`B+_.LQ: -e$*m{+eS3CJ`M G0-0{%OJ:x4o5fBtoz+U,uXZn(n,6Yf-id@' );
define( 'SECURE_AUTH_SALT', 'g#BkDZ=H~)Hjjk{R9>ajYvobcON&!(<OVMc,SQ_qx}AUgVv~&vKtA/]^Znlo2x-x' );
define( 'LOGGED_IN_SALT',   'T>p+u>;7|u#ka@v#Ie&aC(DHK>8#cQ&wJwC*UVVQOt&OZ[J;K9|!L75HF$Oa=ho!' );
define( 'NONCE_SALT',       '3w=*Q/tD,TJu7T[zaq(7(L_ino !@*L%Z{1Uw622 E{^zyg}[^zVWpTxJVAiRXjI' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
