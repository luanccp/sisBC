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
define('DB_NAME', 'db-bc');

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
define('AUTH_KEY',         'H(k&S<S1N0F+!D2p,<o`w^5-ek7P,NH,4HH9HgJnTu}vW~vCkDNVaUY:52QgyLzv');
define('SECURE_AUTH_KEY',  '6r7ZPF):E}.d})!9$=#]7 RW98qP8a%P&B9?~<-:i|<&8k^AbSvVa.kgW5r]$$Jx');
define('LOGGED_IN_KEY',    '#AM}sqrpQ+Vm*+22|UI:n;OQhN,o((?stZZ&Z{kISD7@jV h-Uua?*50-o=VDuUz');
define('NONCE_KEY',        ')CJYz>rs25S*&+!.4+l*f{_O*2@^Xrbq<^sQQ:S]8mX5oX32:,*C(T Asdpm~r:V');
define('AUTH_SALT',        ':*VYp-LeMX/DjJeW=5]Zv6// uXsis)Nv(hEA%Ov)C:tj5Up|psbo?Nh$_baBR>I');
define('SECURE_AUTH_SALT', '567Rbj4!$~mt~KMh5nIW$$q;xdT<.E@4$6N6oOo)t2ICd-&0Vyk3r9r.1_[ub@vx');
define('LOGGED_IN_SALT',   'BY+IA&#>Ac3RGZda3=V@l%DXOA+ySS)-<>Xr`$G`m~Qz%X.eA/T&i3u;gl&%S0Vo');
define('NONCE_SALT',       'Q5i$Q#ye/WtViYQS=BXm0Z]8^NLR$IXaRx3KYd9_0S|Jif.r2-iYFggR=74Q.n}|');

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
