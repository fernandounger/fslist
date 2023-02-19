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
define( 'DB_NAME', 'fslist' );

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
define( 'AUTH_KEY',         'JL QO*sV9Yl{e~:{MXhXi}vr3Sfc-<Pq#csQwRCf:,zRysoxfr|aMct1g;.!rB&(' );
define( 'SECURE_AUTH_KEY',  'ED92~t&-Y3(J+ZXPSZKKB{q!D^$R_OkPWV5]ed ?@Os1t//]Uu2*VHe5Y1phRe6C' );
define( 'LOGGED_IN_KEY',    ' wI>`=?7uS/X,zV-DeK$Efpae>u#hV6].}ydH#83~I2KyX{c8x.KLTD_~5$OWF_7' );
define( 'NONCE_KEY',        '>@l1gMl_E_+Od![:cE<XI[05l,Q^D>K`NO38E8$ADy=3L=:i050E*,r5n]HZeVE,' );
define( 'AUTH_SALT',        ';03c:#%Im*Konjxmy&9Id/P];;3;IZ| u|%tF vd(q{n;y0ljcY7q`I5~fQH-:Cc' );
define( 'SECURE_AUTH_SALT', '/^{0x98*da,lm/~L;XmxU2g)?z4QKw_k%8I)%A`6}+%wZ]aYO30r$/w~h]$n;>]@' );
define( 'LOGGED_IN_SALT',   ']3r!lyCKE5p)qq>9Or}$pOBZ|>WR+UASvg)r7ML;kiX7Vj=?<t6;q)Q.UWbgPY?I' );
define( 'NONCE_SALT',       ' RaOIYJl#3Sm]_c:D[$ARkw`oxK1C7G| N&SEq^}s#m4OR{?=u~coPx5({VE`rwj' );

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
