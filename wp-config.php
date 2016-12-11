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
define('DB_NAME', 'drugshop');

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
define('AUTH_KEY',         '%5}+Rrg,$cz`&=j@`I0t<xdkH~$TS~`mt`cQy4hXv rT~&#qmIu.Hv[FsmLl[~=:');
define('SECURE_AUTH_KEY',  '~zuG6`D.9jaXrX3wRVN?TO2Q:4jy29^E*b~aYpG9p9;)JsXU4$5Z !b=i,ufV}:S');
define('LOGGED_IN_KEY',    '(NoLDv,rP,P$X$H=>4wNO`_:-/D^8i:jS[-DzS~Xj3tKA`Woj>Tqm9!hrho`(@&(');
define('NONCE_KEY',        'zRK1W;XR.Q2IN2aD$Lt(dI4=J3?Ib&9p.wc{r&YLmL@Sj;T|fh6;bhmLPgdB4.;f');
define('AUTH_SALT',        'sAuY*)T.Rzm$ S81@LaY7n=96#2Yp2neO)&up/++Qq|4y#Eu5rP2N!Y2Nw`2.kpC');
define('SECURE_AUTH_SALT', 's4tv{B%pDB<cefW?x&v2fga,v-Ge%A=.nsO`bi1:|x6K>`U=aCR i; ;)zh~UK+@');
define('LOGGED_IN_SALT',   'bCU|Y?(=,0aS):STJgT8TB,rr9L?,[qKou4(o!;/y %+o.,9D x~FML9T*NERQZ|');
define('NONCE_SALT',       'e?HNi/lW]E4{ l77G_-!udl=9o})D,us{b`Z{(:a/a ~8uXLL;{isj9@6>y cDZ9');

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
