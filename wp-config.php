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
define('DB_NAME', 'amarte_adrianarealestate');

/** MySQL database username */
define('DB_USER', 'amarte_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', 'Ar1028807');

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
define('AUTH_KEY',         '[yv[O*_231?e(w7b?^WbWC2HhliiAeh;/u0dAzs-@X`eY*=,2g|kI @fUEK^7>Xr');
define('SECURE_AUTH_KEY',  'k2DdeE}Y,_{3U-ko:%Z4cRYOI@>`C2PgT%nZ?j8aqqKl8<O&;xSN2OR2)21GO_!G');
define('LOGGED_IN_KEY',    '?)0!armPpP{Lnf]`dVr~Mx%s[v4rz.01q-{]uZI~2VD,{](hL?m#t_K(Ri)nclTM');
define('NONCE_KEY',        '3I&ci1!WwbNF>>(OS|nMpV|;U%`N|(Pfq# Sm`{YZ*i#Hf@.WRvQinRR.`S0|KXD');
define('AUTH_SALT',        'Jh 8UG=Ky.X8W=rG14j{YBRD|LxspQ9e1.~p?CL}G%[2<d$I{bDk-RJ#J{nij])r');
define('SECURE_AUTH_SALT', '$r1^,-D_3v#g5>[R*<o][?eYj?3f{LH[;o)/Dqm`Hg?jZw_e[rudd|); n=b~ni#');
define('LOGGED_IN_SALT',   'XoN-RFct s(`m}5iJqAbq_@!-8mtp1n7Vu!L{de~g21y].grY75CI/,HH~l<Qfu%');
define('NONCE_SALT',       'XxF|FOpmLmRrMy3%t:-)OU]>vzj%|vmR>WGa;_6_G%<Yj5(}Gs-) )+=*cn_<Wce');

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
