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
define('DB_NAME', 'Journal');

/** MySQL database username */
define('DB_USER', 'Journal');

/** MySQL database password */
define('DB_PASSWORD', 'admin1');

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
define('AUTH_KEY',         's0,!wNcVU$*Qq-UE6JnK8l4?pa@Tp!qlov$`#VzPwxtjp0`EdR.{jo]~xq[iaAYZ');
define('SECURE_AUTH_KEY',  'k=E{|].{tXnK.oe#0wkqPEk+wSi5ZO<o>u`SVG2%,fp+bxyc]QVp2CK]c8IG,Y=+');
define('LOGGED_IN_KEY',    'pYiF-4HfDJfq/vJY)3gd>xP~pF1%-/JuFEU_!$Mv5LT(aL@![S>xb46jXhUg.1h.');
define('NONCE_KEY',        'P%aY}p9nFQ)K,aUOZ7xzk{3<4.W/N;gvyb.i_&K3183ZMmX5^HK,cD/4?g-fJvUS');
define('AUTH_SALT',        'J2jX!PdQ~Bg*L.4-a?]!J), j R|+6d@(IWZ?a=^&)>tgKV2a#7b[Jg@b?Kxyel#');
define('SECURE_AUTH_SALT', '[V=dAX)l/7tq|_k>+[@yLKTg}EyK?#iem}}mrD,vLH.^Kh{*QJ${@7rra6+8:!z>');
define('LOGGED_IN_SALT',   'QP*d817NA|~DOkIX~s@,fy.7!sSAmGhM9%1@DI:U4Go~GWi{{TWd_`$u Z3]agge');
define('NONCE_SALT',       'W*pJ.2F:il:-+sD_}6.LGWad;E[t6c]t`{ts(}mp8zQNfhfqP8vnOSCA|9k!=3yK');

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
