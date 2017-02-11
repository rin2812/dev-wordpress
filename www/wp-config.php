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
define('DB_NAME', 'thicbf60_thietkepn');

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
define('AUTH_KEY',         '|}A~R )h1wv(&&/&X,I4o;r1K+B,;&!L0:d j:35??row7)%=_U>|Jhrzk?$b3RW');
define('SECURE_AUTH_KEY',  'DMm$|6He0Y0`=LKb6xwPHPb015s0~1%0XC+spm<fg,}:D#R`LvT[k6>k([>O[zG6');
define('LOGGED_IN_KEY',    'U:]p~iX#QEV=Fj/+t+]6c0Gu7KhyWCq&w4IKv!EWta,dAxB{IZv3V>L.WNHir?nI');
define('NONCE_KEY',        'C%fQ0I!kDP+YKP0rVgp3_.AUxB2L./n>5,FH>H,,=P?*2b),Y>/gw[I>,pWyMxsv');
define('AUTH_SALT',        '[J.KhTmQx4TY!?mGLe:ti^L2z:Zu<Pz |?Qfem1R]uNVB8 J7;nAE4/_cCv] IJR');
define('SECURE_AUTH_SALT', 'yPZ27DyRZ$l!&._vJwRcE/39L7)=)|y)r)i3a(d!J=py#j@N!c@Nz^STgnZj2qOw');
define('LOGGED_IN_SALT',   'kS]vgmS3O>[/xsn9Y9R7H^Q_< onlJG+i)LSoj64Lv5:g(qcg3Qtx[WF)6K$8^(?');
define('NONCE_SALT',       '$2Dv]2fU18299Q6%6|5P`:d_*(wFV7=/tar4Ucz3f2U+u H{sy-5>9 mi9S>!]$J');

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
