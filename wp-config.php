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
define('DB_NAME', 'library');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'FEdL K7/CWyqDx3qZG)Xp*Fijhlmj{mq>.A${?]e?M hv}MTwQnvRM6AJ!37=P!#');
define('SECURE_AUTH_KEY',  'UvxNn4feRuC9w={KvtekayQj%yhF7>ul!4B8M)4p9F$P9(u ))E,Q/gZimy#& 3c');
define('LOGGED_IN_KEY',    'K`AgvD{9crt<+1e13.Cqs0%?K+l{uD(e]%oD9uL4t(.;CqCyWT$x8A/iEW+hAqs^');
define('NONCE_KEY',        '9dop$=4CM,a?i@J2$cH9uggKfab^s`6bv ss1DNXA=[fvJ%C0:c(ssETT75CIp`.');
define('AUTH_SALT',        '}>p`*t[jEoi8TBBb!o]|f+;+Awqi<^,9@4-4uup+R{#>rPy ynt5M|.3:4./!O$(');
define('SECURE_AUTH_SALT', '#I(*s@uOYysJ8-<zl5+D-3!m3yG*}dGCEnrhp>D}M 42caEaRQT4|X4:Q3k)ccz%');
define('LOGGED_IN_SALT',   'B|S[?YSt1Rv$p;kE%`}mW|.NLyt8_q.qcquqygO&YU<HR,b&b>`yKB(V)NN[df@q');
define('NONCE_SALT',       ';y1xKxy/|=2q[oi]W}jziPP.!+GSCMY&+YyLWRaY4SHh{?Ag!weQQv#g^U7@[~)S');

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
