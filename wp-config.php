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
define( 'DB_NAME', 'tenup' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'c^qxwk6FEZkw` G.qmX^z}$p(1*Z#lzzZOcy*S_^<6KMOk-8KfR9kq;$[|>i8CnP' );
define( 'SECURE_AUTH_KEY',  'G5,}djQIrt?l$~P.2>=o,f!tu?(Ji$4kH1jC[?3lj4P,D]O77<iVJ )=@<(HiGDJ' );
define( 'LOGGED_IN_KEY',    '9GRT}SYT]GGz(m2gTvl!E_x&}Im!`[31F`7<tk:_RqcX_GF-+67e5l`;U3wVk31,' );
define( 'NONCE_KEY',        'P-#Tz!(Ycx4As8zi+zq[k?%i><o/fq{SnNwS+;.?bI/,=$bul1=al46Uq8)C>/DK' );
define( 'AUTH_SALT',        'RaeCH&-/NO83iW:8SSt.FwFIGXGStKB,QNVH/Y&[cc!3P7<rta4^o)r`y_xV>W|E' );
define( 'SECURE_AUTH_SALT', ']YU4/WdI3YHW9g-jMx$xADN,} oZ82HuxO7lHvozCklw*|mMn*ScxviDRv+n/lc#' );
define( 'LOGGED_IN_SALT',   'wB{3a_*5hB.=R*`+:OPdO;j7zjEZk,>uQ3hMp|wu{!z^9O>}08QlDV<i]Bm1?&<>' );
define( 'NONCE_SALT',       '2f |+J=!)iML4kD+cCIgF$o!r_yS0Co$(fw%N>s5,;UpuRo0;rR=e#A-?bk>MZkG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tp_';

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
