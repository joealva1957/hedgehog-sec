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
define('DB_NAME', 'ms_wordpress');

/** MySQL database username */
define('DB_USER', 'ms_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'ms_wordpress');

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
define('AUTH_KEY',         '1%>sGT!4@!=:n-De`|z{>>Mao(~tXC$4bdYA`Y d?JC4D&EBg-eJ:DR@Xu%Wx<bk');
define('SECURE_AUTH_KEY',  'z7aPDV1J-3jrs3^n45z>BJxT`FH[[)M8.Z1/btmY*f`E[ly/2MZH6S mAFj*JT&.');
define('LOGGED_IN_KEY',    '3OTTcVAedC*M@a@G]-*hT(=`{V.p1|nw&I<s9v$* `q<D?B/Tc3])6v3k4rpt2<o');
define('NONCE_KEY',        'EQBEr:cUtg@hE 1]uDdn~OZW^DcK_;5xf13Z~<ako?B@2SDcLv~L[:D(%TW*Uk0v');
define('AUTH_SALT',        '4,3PwqBbgkX@jo9.,RKzP~!~!!.G.I:wUKC=?G<AM0mb&J7:q02y4} pD~QC?r)Y');
define('SECURE_AUTH_SALT', '^E+=V-:QZdvybN%_=j8N~d=U&Q@zZI+6Xaf2&v:_nc:j:A!0to?6d0o7Fiq^sl5*');
define('LOGGED_IN_SALT',   'x87{lLv4l^8 -t#s<mh[{E#qG>2:5FJYZg[NvPZovXJ>rqz+t% L.8hbSi@U=D_u');
define('NONCE_SALT',       '.9yi`eF@fd#QZ_nmlvO@qupw-&c V%xgAM]gOMUB:L-y7H&@:%z80KKp=?y^=_hr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'px_';

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
