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
define('DB_NAME', 'soundblog2');

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
define('AUTH_KEY',         '8!?c<cEyo7b3sXkW+J7dZzU}M:gF&w5H()1D*UXbHi /LHRs|VJdg#@6lZ-RRT/_');
define('SECURE_AUTH_KEY',  '{Gtqpl@.nqB}5WyJce!E5mv>6qu}{}0.?eF(,ly!I3@F[$PI4T1Evf_,4>1tr+RY');
define('LOGGED_IN_KEY',    '8{X:Vo$-@2[*$A{F`0nQJzS(uJ]i/7&^5P%ggZ:Z~UmID[eG%jFG oLk^jJW}+e-');
define('NONCE_KEY',        '){jl1eN5)PD{^CIIIg|`h%)ZRC|=x^?qKP4#^eL+up5`YtG>tkF5-goQ$f.}]o{]');
define('AUTH_SALT',        'ceL_`CQ,mX#}(c%lZVmePrj*<yw+Dni]lx@XcBX^r1r8@Fs(AUBfb[o`B*@FhD1T');
define('SECURE_AUTH_SALT', 'We1xE+`anI]9>CFV#|ven76cJ#!R:K^MSB}l>oLcy;je&, 5<Nm-%M6WKK =Lx%#');
define('LOGGED_IN_SALT',   'lyHu(cMa}g92ZJINw4@|@-$7LPmgP45^:XFDbv(M_cwo![<($ymn-t$ @w;y]B(?');
define('NONCE_SALT',       '<hFuAxgoAv%!HN[4I[=y(#hgX+H]LE]__@48^Qd|MDH/Wt27{m;$C5(a`R?[y@G9');

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
