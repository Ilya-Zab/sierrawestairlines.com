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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
<<<<<<< HEAD
// define('DB_NAME', 'cj7a45416637672');
define('DB_NAME', 'u133582545_sierra');

/** Database username */
// define('DB_USER', 'cj7a45416637672');
define('DB_USER', 'u133582545_sierra');

/** Database password */
// define('DB_PASSWORD', 'vzIi0Q2!HV!');
define('DB_PASSWORD', '!4mi#>oB');
=======
define('DB_NAME', 'u133582545_sierra_test');
// define('DB_NAME', 'gzba45409287511');

/** Database username */
define('DB_USER', 'u133582545_sierra_test');
// define('DB_USER', 'gzba45409287511');

/** Database password */
define('DB_PASSWORD', 'Q0@8aq*9D');
// define('DB_PASSWORD', 'ltA}9)+rK');
>>>>>>> 8acd91725a71899cc9b35ef15e90f360ac38936a

/** Database hostname */
// define('DB_HOST', '160.153.156.21:3311');
define('DB_HOST', '195.35.59.4');


/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '(dX&BJ&8P<Brn8_a@N2HgS+3~~,c:B&BU]Hw:?ZT|?w)]X<h?EQ?.*5SO>Ca/!kT');
define('SECURE_AUTH_KEY',  'ciZo<0vj1AX<e4}olWakU=]]>.1rT6ghVgF7uhWu<QkXYe@ggM HRykYhkP[L~l@');
define('LOGGED_IN_KEY',    'bR>1y&j*c#uYOr]WkO%Y@$c@otmcx>YyIuIZC!v/A3/ZPvZ(+p0@+_(a+w;&hjmB');
define('NONCE_KEY',        't?]G5=[?Qcmoq1u:qj4H$D6sEifE/XcK8mhif|6kS*S)w89~e6s|oV/KAH5R%QXm');
define('AUTH_SALT',        'B)rlgE#QQJ]_W-mmE5b20c]efQrs~c6FB)ZO[<5uoiwc7]ON>5OW7O1C I<309bM');
define('SECURE_AUTH_SALT', 'L;mw@y?OXi;2Kg(q8%QC[M}~YEt|:<_SghoC?yDc`H7e_>pE:*!OR9]_[Z/TQqJ~');
define('LOGGED_IN_SALT',   'MjW~;#$e$`5|Q%WPVjo!pK2pi<#r}(7_j8z,O<,|IHcG5lFU[Lx?Ba#5W3[bk`-{');
define('NONCE_SALT',       '%`]E)i5t3~I0=/Nf^fxE,,9)m>7zpCd13`yJF&y{vR7bT,Mr?w&_*eJ>[Q6PU@%.');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
