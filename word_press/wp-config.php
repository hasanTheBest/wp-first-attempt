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
define('DB_NAME', 'word_press_mh');

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
define('AUTH_KEY',         'c3]5),-e@h:GmS@l,|kXD|K3RRn}TB^*jG4?qI!^wX0giQ+>Ya~&W/`7Zk_7J$Oo');
define('SECURE_AUTH_KEY',  'lc9(bW<kS%`Fe}2jd`EN3wt_FE,&5s#dtx?L$UD>OS=R0b`waFmgN:W/vaq6uTY<');
define('LOGGED_IN_KEY',    'p.;PpO2Rv}3uW/skp)ek7Z%7H[A{J(v6^gCrZGg+C^F5wS8D!]VY5_&dPP|XnJx`');
define('NONCE_KEY',        'hYHikfu1HSdpx@Vx.(e+O1J56Q9+X{W9)9>d-nJ1ckY]_Ol#8>^zpo Fc=24VMq:');
define('AUTH_SALT',        'F?,.tqy6ZQ?u ez(X3g4TZUL,+y2LW8C Co_k$yV}+$^[(A>CUy}Qg}TUB}(BD}z');
define('SECURE_AUTH_SALT', '@eF-Dz/>wHv3h}W*y|U%N~ `Ign:R_=I=/4,,-J&TI<V_#/P)LU?0BU7P.X&3X||');
define('LOGGED_IN_SALT',   'hg`nsz3H~Gg;-]fS7$cN:y2HDQ.)$g S^]k4t$,%A@kX[5jzZ>7j[:Kt~]Es-fJn');
define('NONCE_SALT',       '{La+}%[zJs,tv&z~78D|CS+M1~EC17&?r:rM SkjoxF+jZ|6GW]*>2~;v[Ld}rGd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mhwp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
