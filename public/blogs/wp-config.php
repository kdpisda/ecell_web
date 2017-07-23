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
define('DB_NAME', 'ecell_2k17_db');

/** MySQL database username */
define('DB_USER', 'ecell_2k17_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Ecell_secret_2k17');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mqR}G3[pf9s83UP2%5=.:9BaAHAjY<GmD3s*Ku;P7$r*vB)7!$-8Uvx9F-5.1XGn');
define('SECURE_AUTH_KEY',  '5v{8]Fy,2Ka7S_n{342~F%5a-`qIfuw@7bh5~+9D$QNR)z@=(Dh,]gjcl7QCnrra');
define('LOGGED_IN_KEY',    'okLky[Q|.fDc42P<lbbizd<( A`3#ctlf.5<T2|ejG|3!,E/9]q^@L(49*?Bc%9B');
define('NONCE_KEY',        ';Y4Iq7yRqM) ..Dm;T9!0Z`b[$rQ&Bi(Y`u7*Cb{@h3%Y{0MZ?%3BB(N1/-.Vj1g');
define('AUTH_SALT',        'Qd!Oa]*bAjK!}y cd()iyVQK|:|~Srm.{Y87WAo6G3(X>n=,A`PNm(wtZHM+gIR2');
define('SECURE_AUTH_SALT', '?T,%mFfnhXy.5d[|#yiZRml.vH3/_u4Y8gA Ahi<Vl%B2L|3&)D@#23?iJ/x`u>&');
define('LOGGED_IN_SALT',   '+6=)[0G_R}qv~lo{iwoDAxSn6WOM=Zz`4}}0z/|<g{w31:cKZP]Lc*Fct?^Qlq0k');
define('NONCE_SALT',       'A!T*WTBy0/,D9lUq)df!;L9a}p_.4Z>KXOF^|_2mwL([fEaux`rDXxP|(A6NrbhR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blogs_';

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
