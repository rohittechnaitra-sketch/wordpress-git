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
define( 'DB_NAME', 'wordpress-git' );

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
define( 'AUTH_KEY',         'k0IX}^^2LdAW)5Uq R/6F9U%zF4b!lv2@mK[G@5W-5ncRH_d=0SI!+DA/8yy4FdT' );
define( 'SECURE_AUTH_KEY',  '6`#pz8h|%Pt!IL]RdHiu|yOJTtqqM}Tm-0 3[6T92qB9U1wHgQ/YS~JZZxmsZysj' );
define( 'LOGGED_IN_KEY',    'S!#Uh{03V6f9zm881r+Qp/JZ~v[0%5;Ao/ld`!_tSDBqBN.i*%kJiv)oD_b{VCHf' );
define( 'NONCE_KEY',        'MC1+l/w8<{H#LFPTs%,-<5qk: Yc5kN8&;av-.<..1BZ%%7B;yS7q?h,DU~ZwR#(' );
define( 'AUTH_SALT',        'DZ<n`xUZd?/RJ>Q!ElQpRL|quC^~-9Lx%8 Fv9gZsp2{2,,*[ o#(`m3a,*ak+K+' );
define( 'SECURE_AUTH_SALT', '@GGO1d !lt%@b/B-a${7#!oq(v$e7beVo6CotKiCblTfZzlOL%Gw:jPa$).`Uaiq' );
define( 'LOGGED_IN_SALT',   'jn$_TX9m<R~RC%TJ&G<PSxHGg,?RJseHNHs2h MVz^[8<}{]B}DB;mkV(z0b3<jp' );
define( 'NONCE_SALT',       '+)sh/yG9uLc$NM ?Ulx fN)x8|S$4slonJVA+kDs?K6=LU,w?IY2_ayGqn@+#9dv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
