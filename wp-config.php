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
define('DB_NAME', 'roof_india');

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
define('AUTH_KEY',         '9Y16-SXQIq]&rjO56U#@.oc<?v}A@eH?q+%bN!KernLDF@y<5v5P?!PXhD;ld4:(');
define('SECURE_AUTH_KEY',  'xDOl6}q_Q7O(<+E`~>:h5h}[|{zrOLLy:cu:6Qm0NdArN#/kF|b*->J(d)B4^1a-');
define('LOGGED_IN_KEY',    '># T(v0[iSVbR~xyNk&|oPA)%;]sb:Ln9Iq7i/K#ZIUJ}I`GYKmxqHvlIa#8)B!#');
define('NONCE_KEY',        '`<TZuKIGUH.Mrz@~Qt0Xybe.luV[e]bE+F|r_ *dB+<=^g _=gUhv]=y[,&B4A{7');
define('AUTH_SALT',        ',J)Z]O#rbuwED#*_<(36/2?:Mlnho(7ru!LbCS?_P=iGR^Obt*0sQSKET1u-&eA4');
define('SECURE_AUTH_SALT', 'mcW|LXmieK[ZKX}W]Wd~7Vh}5 }2Bhu+0*<(w+Zt~ -pikY)f_7oAO!YX7<bnBo[');
define('LOGGED_IN_SALT',   'XTxI|CbJwk/-N@h~VkoJg+aa-x9!QK7-bYfRIJ8xur|e8.]=n}t(V3rQ`y_G0Zs=');
define('NONCE_SALT',       '*Ks99PjM3c 3r9UPmvN`aqcBwY9(3icrs8TfSIoGhp}>OT#PZ0|TuV&!6D*jE8)D');

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

