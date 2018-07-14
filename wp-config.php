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
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         '7O>XJA,<b:a^<q5Cs64Bzu8E,P;FV<qTuWrsU%M5i%p#T3xg{y|opN|+.d++~`K!');
define('SECURE_AUTH_KEY',  'EYcwgl^yN|#IvSpn[HiIp+QW4J,POY-e4.L1<mHm15dd>,#y DPEw{+H9ciO>!rW');
define('LOGGED_IN_KEY',    'YFU03w`|tI3,7L(W.*NeMIs1MV9/N?#xg]%dm74L|`<))$[vGBuO$iMg2)F]W!S-');
define('NONCE_KEY',        'W_iqF@-35O,CLO 8S+ob3k_##yITnVM*ZYgED2X8S#u5]o{`%snl;(#TzA`Q}3:N');
define('AUTH_SALT',        '[CvvaBfmyqf06O]iSd^A`}uqBB v/<BU-rhu]+Klp_3W;`p[]h/WBYwVsa&[h(dN');
define('SECURE_AUTH_SALT', '=9;a,%k1*m,H! (`<CrM{BPB/v*kRb[^~S=YYT=1[/mcaB9;t(CLj92w=6f&X-{-');
define('LOGGED_IN_SALT',   'ibOO`vw6!sH>P*sB;wo8$nr3C83:}J#awvnt~<g+s:j5G7mv& {ZN@4:%toMMY.6');
define('NONCE_SALT',       'b&i0.B6x*v<4[srTQ|I_l`ch/Kif,Jme5^!v[,zP_f5r4oOgLIWL2{TNE`tv#+kU');

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
