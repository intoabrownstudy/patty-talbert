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
define('DB_NAME', 'patty');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '#);k-nQoN*={RJv+R0:Fix|Xh U>UzgviiB+Jqa1!1: WH}Ob]$E),+TN+VQz1X$');
define('SECURE_AUTH_KEY',  't?j+gE{r3vAQt &m9Nt++-.UQh7(svx3G?rh%c{,[b{^0HviiM+[-sX@;UeAwmi_');
define('LOGGED_IN_KEY',    'nR+@-v|dkKA0YeFvIj_Xm5>U.XyCFlk*;k>;lItCp8^{)!/RCiEpqAu8^GNKS{*Y');
define('NONCE_KEY',        'KhdE~Z<s?MIHmYY*4UBYG--=!jj&98KVoY+qAnOG0]]+i-kOe){S[Wt)l7 PoZ,f');
define('AUTH_SALT',        'uv6%4>a04VO2t-[3*zep:~..^s[cb+e>Zul)F#>I%WYOhP.dkEN:}dD?pMGJYA/B');
define('SECURE_AUTH_SALT', 'x+w#v%DoKlm(Az<}w+!cBf=Zwfe4||cxrH-L7?Bhk}yD42+|6mTT?{U+uyE,z3eE');
define('LOGGED_IN_SALT',   '/h6s~AybMMN 3]/M1E)|OcMTD{H`e1$n@u|a_!#-3@%,x!Xj~-8!QJ4j)Ako&)W9');
define('NONCE_SALT',       '_.68%=UA3G1:(!49}XC!pAJOeL@I(`J9FLF:X_<Pcv7<o,!c| ,GY`72P+ol6W8}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_uyu35cq3ag_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
