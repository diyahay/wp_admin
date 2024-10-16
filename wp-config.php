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
define( 'DB_NAME', 'db_wp' );

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
define( 'AUTH_KEY',         'V-}ZFk!$S=u] T!Op]}u&6Be]dL2r!-,jK=r(s|76=EYs>Y*Qv8.)]PT_hIiGFaw' );
define( 'SECURE_AUTH_KEY',  ':>^7/+*iLF;4[^<qfBZ.9UV%UsV/9gkg[ VK7DH$v/=.D[Hu#5@)=ZK m|!q9Lr(' );
define( 'LOGGED_IN_KEY',    '-L|D9u~[_K&qfb`smp5$Sfs9`S|fRC=Z3CQC:@Jsekg>Q+~@-?Ce#@P(Z_>2~&Dq' );
define( 'NONCE_KEY',        '{,8ZTFtpU%-<DObi7u&g<|-Xq_Sc!7bXMtf(^49,M$>lt{&~2e487l&xN``M`K@B' );
define( 'AUTH_SALT',        'NY3 c;`6q*$;+Tz3^1dN$oct$Q>c~daG3laGY8C1O=C+&l+w0YoM{0Kbd{>OXLvK' );
define( 'SECURE_AUTH_SALT', 'Qm1-vD%eUEN;g{C:hfbRMO@*_C*!G@O*Wj&w-.L]qCCP@%E(D%%l0;?hfK5^x&L7' );
define( 'LOGGED_IN_SALT',   'DQA3)]: Xk+4rKqiZtA(vd`^jrK{qc>a{:;acP#lm-gU+JA7 )&d8(dHwh)HvcFH' );
define( 'NONCE_SALT',       'lD>?rD|ETPI`__wT;-!d<jC/0+F2 1{7+.G[mXDV;tx(&Nh3F8AA#JrlcABn=3v+' );

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
