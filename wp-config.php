<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_developer' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|ppmaY>k=L:O)v]2ZhZTwxJo@)THFts=-w1 n-fF:lJLPC#{,J/Y%L8)uOd_#t[)' );
define( 'SECURE_AUTH_KEY',  '[p<C8&&x@R?i.]b=XB>usL|g.R;}{TBo2Mz(=3;q,fq[%3`*+ti.u% ,1P[bk(9|' );
define( 'LOGGED_IN_KEY',    'B(E%qFD-=41oKR=e`]b.8{:a Hnx>{*8d A6B<+>SFTIgOzD9oY2nl169BHJTj!E' );
define( 'NONCE_KEY',        '33U.2a(|OrsAQNfw7u`GIHWg&8F&ER9]m~v5:%j?kHLFf0yC*YVZO^zqD7r#U);r' );
define( 'AUTH_SALT',        'A8poW f prCT{OX?w#ha9-D#(qXm~ntaicWC__eU$!WnU}ki13|UQahNuz{(=P`l' );
define( 'SECURE_AUTH_SALT', '<SAOV)Gb#=](i&hy$J?i<GhA21S6>.Y[6)}*uP:]j)$+R6oiFNN(M-]#HWh:72])' );
define( 'LOGGED_IN_SALT',   'wG1Q0K}7m+#2+r11cMP`zamli3e+Hn,<>Hnb*-~A.&TJ)jX^_;)ICT2Y04RzNG G' );
define( 'NONCE_SALT',       'o iO8XYI*r+`H1>-[*qip>{DAy;C6W33~|%R4lW[~2rT)k9]MO3WT+gv?PE+bxx-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
