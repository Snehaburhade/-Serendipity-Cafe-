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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '2{C$3Be|VYxpL){1>?aQRu{jWZb?5=O3(.e_M3Stse]}0157&ecP6Pu IE*MI![(' );
define( 'SECURE_AUTH_KEY',  ']5>!kWUF`l-HQGL1rdK<Qs*M,r0pD,9<?c(ryNGZZh$S|^R]gBRqeXj,9I3:o9=?' );
define( 'LOGGED_IN_KEY',    ' .~1O.+1mI%gP^D>{=/c{*(m.,.P>%-tNX+b9}UGNhR)sF&?Wh:QwnO~O`u>a&A.' );
define( 'NONCE_KEY',        'lYaBVdg(rX1yPB]$1Q:oVyhKv^&U;]eK6d@}UkXOt)s~(3pw=4fs`n+w2p(!/^Zi' );
define( 'AUTH_SALT',        '(og:ARx4&??mi1x-J#:xrB`!<#=/,fpu#Mj0~0Qi|]KIdkwE|ta3G!jkW:&4:a}j' );
define( 'SECURE_AUTH_SALT', 'Q]@}bshT} :d{Y^-eLLXw~01hHU7{y<c9<V6sW~tN@IhJH`[,K4qjggP&`Qd#CTy' );
define( 'LOGGED_IN_SALT',   '1{.<Kzt0&`{W(:K}$;i]R=% bt_->bRvKI6}2/MfuW%/crM4^+kk5&Mg,*Q6_;]C' );
define( 'NONCE_SALT',       '2pJqV)ygP,Y9v5WUg=1fO;,R1xDr3R3Q&>KH96%(e[(En@Qn~J4VVr5_rP?RVJR~' );

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
