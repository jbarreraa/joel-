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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '~410`<^^j*3Upv>}-Ea>`GK/5(p0 ~c^7JyWWYpsF=/HCS!s.__h4cCqYF6#XQag' );
define( 'SECURE_AUTH_KEY',  '_Gf84~Z#@=ZGIC[0138z2Z[@1p8mdbN<@/*Y7I|(h81=*w1q|D:A=*N.GnJI1Q}F' );
define( 'LOGGED_IN_KEY',    '[?1~ksv%l[@d%9;?D|hUBwFVPlkW?qg_xg6b{]9w?CH@-]ttDnTRJWAdeid>,W[V' );
define( 'NONCE_KEY',        'dHQ$AXpFpr5oI`1:G3alKP(iCKKLg]R!ipi)wZS|ZkUj,+$mqMM-/Pb34RF++2T$' );
define( 'AUTH_SALT',        'L<?Q+nB5kK@V{!7}{*7>$|S89rX]7Nv@w|:ix@*=^[WY+x6vY`m$w#pK;%7 NeoY' );
define( 'SECURE_AUTH_SALT', 't1P)$NnS]I]zxmPSEi,V|&$UqJ`APew0W*>j^L_C!J}3G%/T)PpoQbMm@o4iZiIj' );
define( 'LOGGED_IN_SALT',   'V@chsXsr_LqgmQi=v]$IP)Blv `@SN?ej>gp_]wkXep9z6vnb!FDL//B;EbS]Hb?' );
define( 'NONCE_SALT',       '&Uc_!8s. <yg>dm|A?PV}D|Yvd;/d|8gbl2(D$1G!&W,w$^tl-5@XU!qNRZ)x/-h' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
