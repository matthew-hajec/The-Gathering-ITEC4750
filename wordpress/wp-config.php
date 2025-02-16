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
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'wordpress' );

/** Database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER') ?: 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'password' );

/** Database hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'db' );

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
define( 'AUTH_KEY',         ']9=lq.bh]f1g^-/Hp 3TVXGB*b&@E*{<Kc#CO)IY#2|p@(mhU#{nld!k6VCrj@IL' );
define( 'SECURE_AUTH_KEY',  'l;eX~sVn?ueL#t^hR~wOWSc5sB`F08T*@MybO.+o)}UM9^1j}Ll(bvw;MBBqv`rH' );
define( 'LOGGED_IN_KEY',    'v4}jY7&/G|H&%i;!3hzm7EQLdb0y_N6V^ZRV-plc.9R(m9W)oAE+f%V*Cdy7[{&>' );
define( 'NONCE_KEY',        'P1BJj5@gn7. OcE(8%tG+hFQp0wZ2?0-IP&1zOeE3UPnqu9h|,*D#oE?<U(-mnEU' );
define( 'AUTH_SALT',        'abb[M GkI-xvHit$Wx# A%?]Y(*$3x1MuovsCiyV^fj:|_]{V)c1(L{x.4mSgxl ' );
define( 'SECURE_AUTH_SALT', 'i{Q9T5xpkD7f-0Ny02vV98n;b*CIiY8aNI~qqFvs8x<#7<q% 6w8C?{a_.-bwhGm' );
define( 'LOGGED_IN_SALT',   '_h_vS<)Tn?-~/3yeij?uii2=B=fD+/TN$&3NRR0W<Jd5yQIv:cozS ea]ceTw}uE' );
define( 'NONCE_SALT',       'zuLJSyJRnm?.%/b PXptLj*2d=c>JXVts!%F&91Cc^yZOip/+?7jBnp23o$N;ItL' );

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
