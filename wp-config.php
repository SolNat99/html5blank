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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E@bSWBvlM+2/=FMaJYU^EW>}|9OESG(]3%*`-BbwyT%S!jPKw+]Q,9?Ublq*z)po');
define('SECURE_AUTH_KEY',  '~S(Q?iW-&l?~h~YQwq|D0=mV e2Z% }X>:aG/d/H)lU#Z2T^N9,9[ZH>]SzvM6vB');
define('LOGGED_IN_KEY',    'T]vNW:BhGHq%]c&:7A@^jA~tV_bIy9aL-vEngL MHcRuk.`V!)O=*kga/BvTqG8^');
define('NONCE_KEY',        'm^e7x8t]SP+pW|-e$=(9_~G/0<^[z8hT=i~.n;w{N4FWE:z$kI.]zuf&sab02JY$');
define('AUTH_SALT',        'i(/:OCucPHA38(oG`#YG**Gk%rWog=Y;$dhwUE_.,qLH>3zJ[3lnZcYNLHx5CQRI');
define('SECURE_AUTH_SALT', 'Xtjc:7--j6U^6&?$<9EI@OrFY.:zrw`40>;B|IUpR+C/G4G1BGUoPS:O!S,B>3lx');
define('LOGGED_IN_SALT',   'gRHdP8J9|PR48vwT*R7C2CC_ijs@?awFsUf|lzg.Ucm0LZ5-2:{g[(7F /~I_09Z');
define('NONCE_SALT',       '=pSPjo.Z)GWP+Sdp0W~rL2wUERmM<5bSM8u.i- ~OF.k|yvem/7gg-Pk%^|E!LTD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
