<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kutz_alpha');

/** MySQL database username */
define('DB_USER', 'kutz_alpha');

/** MySQL database password */
define('DB_PASSWORD', 'UG4qcsH33hNvmmGw8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'V+T&n-wiV^ I=P^fBAk 5J?s^Sp.BTaPz>Yn(X+Ixn|&8<(4}$t|M#L-dch$<=0q');
define('SECURE_AUTH_KEY',  'W3@9-(TCSF]eV2Sc>_?Zmpy,BS6KvaP>$Tc-YH$&N;fRA(bcQFe#31{}k^~t^8_}');
define('LOGGED_IN_KEY',    'xV=Av]7pkXSXo4`2}5_-^(bn]zhe$$?)W|w^Yf4EH0bL2z9Pm&h4o0MAU-Y[dB36');
define('NONCE_KEY',        '#{~tq:vo+M6g8AsX; ZU)Ggf]jLSpHw::UVd)w8Hg:gG;E.W~u$td045Ga4vD!TH');
define('AUTH_SALT',        'eDY-^+jkYz1`l)Pn+05Et&$?9[I|DY}uMHiw~%Q;w&mQOLt)BO_8b~gbbRzddW|#');
define('SECURE_AUTH_SALT', 'tDVgypbhM/Pk^&-1y`Us5V|Xb/Sg~L9ua&qyk7^Z[36(>|o`0Id4;2+&0+xhaM5=');
define('LOGGED_IN_SALT',   ')<jBd!xF8E|-RZW|?]0mrMmCw-D0{Kn+a<<&:/gQUvtCF^LODe#o4o^)+q^7s{n ');
define('NONCE_SALT',       '3qn+g0M:?(#,pt.?V,k+rj#2VY=h8K0~HT:h)L6.Z[X{ek|}B|<N{rsDR,NgdT`H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
