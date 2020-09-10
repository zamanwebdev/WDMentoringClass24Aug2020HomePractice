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
define( 'DB_NAME', 'mywp' );

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
define( 'AUTH_KEY',         'MAj,i d4$,=y#KS*20zkaur+r1#[YJC?s)khEV2B?Jp`>+4?AA-z(+xXl(B/-a`a' );
define( 'SECURE_AUTH_KEY',  '|^R+CKPY8QpO(>rw0/a%r1[~<T3@ISf8owAmw}6%^BTTQM[86QqWFqN#fR^(kNF^' );
define( 'LOGGED_IN_KEY',    'O.ada!~ZnfB?/%yD<tv7p$s]FxLh?Lk3tpu`krx$jlE]mKizk(k-B@~}wI^)|0.L' );
define( 'NONCE_KEY',        '`<ebQ;andJ!ZFaua.g!kDh(I^w+>T*_HXcHJ_3TI[X2$dsmn)HI>GM0].(P?u+s_' );
define( 'AUTH_SALT',        '#l!r TLG:lX+?759dJZz&mi6;Ztd%SK]Kd922ufUYq|Dw[ckzk2RtZ%>]12TxD4i' );
define( 'SECURE_AUTH_SALT', 'OC?mp dga8;TuYWoZe8FAn|/!0B>ZQ-Q^m/BxH$;%p.N0RpcbIM1@W](N@,I5`32' );
define( 'LOGGED_IN_SALT',   '/~%nS8V1SFQNHduKlYL6)j`n18{+$^{qF9thxyV}.tTZVHg;!4MB|`1AhCfW*aMA' );
define( 'NONCE_SALT',       '=RgjGsGUY6u]jzX?}uibC75SLh-G|-V~*D1D?7?Yx+F9N0}xk505fAmob-^681y)' );

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
