<?php
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_34555142_wp415' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost');

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
define( 'AUTH_KEY',         'kpjsfgqmrtgmyejzqjuz139zap32j3qsx04vhinchar35yetl8pchwm1wq6jl97j' );
define( 'SECURE_AUTH_KEY',  'nap2lf4tl5mlha01xafxginfs4k5gjhncvn6ojj3xxhqt40cdkvogbscand1ldae' );
define( 'LOGGED_IN_KEY',    'v4wf9hyvhu2gpih7zh8k1lbug2qwiwyewhiglc9eeibjzvutenjj0zllkkoeeiiz' );
define( 'NONCE_KEY',        'fyg1vbwn0qpwnodijrnr4e9udyzenu6iglwhhi6p0hywpeg1k9yy00pedzeonyjz' );
define( 'AUTH_SALT',        '9vvz9ng5pc5pwdif9jqr2txipxdcenyjqulqfqybalv7z8zmzwo19a65m1dsml2a' );
define( 'SECURE_AUTH_SALT', 'rjgbslskvvjiuj1iv2aatkmri5buxagmju9dsdhwsxva051bfygrl50nnkb0lwnp' );
define( 'LOGGED_IN_SALT',   'qfh3v62snldkfcszegipjrix9o0iqh69qe1qt7fr457jhkowabpfas0gbxjpkasc' );
define( 'NONCE_SALT',       '8qle1uhh8y3zg83y6lntlwguoceamlrvclv19j7sacwuf8zurmfyxamervdqvbsk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdv_';

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
define('WP_DEBUG', false );
define('WP_HOME', 'http://localhost/sanopaila');
define('WP_SITEURL', 'http://localhost/sanopaila');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
