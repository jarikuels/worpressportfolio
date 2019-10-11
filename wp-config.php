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
define( 'DB_NAME', 'worpressportfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N[Z4v}wWOn?}zT<D|bb1sw^Rf8YB`QHm]ZiD4r-m]_Rc^<r!SB]<wO,qF,CQ}UIN' );
define( 'SECURE_AUTH_KEY',  '1H+B]JViT.wpc<,10>%~DFYu)s1JH]_vvR&?V#t-mhA/_IzjdQa[7ypxN{/*IIMm' );
define( 'LOGGED_IN_KEY',    'Q@Wt [y]nUskh`XD?TG@AwFZO:0i4)IMIy@0{9aQKk]15,$V{-sG|z_w$m-}QPY?' );
define( 'NONCE_KEY',        'EN]M>}{?V^^C+#0!TNrA:S5=1Q1SQ=GwkJMO.lh2>tau#0uEd=C<U,i&AaV|0F9d' );
define( 'AUTH_SALT',        '9uC>2esjF)FV$tVb?a1-r:u Wy435eL6<r`@Ip+~p<d>,=&%YTxg_9k@44pP~^xs' );
define( 'SECURE_AUTH_SALT', 'TenfkuYk?boq#.bST4msEj}|#X|raNTE+11&8e}wq<+)oX0E8?ExEBYw)/M@W#N!' );
define( 'LOGGED_IN_SALT',   '%V<T(mJV5_ XmiB_Xfi{$}W{Q?tmwq+;b64;K:u3hQKtdl| i=D7/vlVL?={tY4L' );
define( 'NONCE_SALT',       'k0V9p|{0s?+b0Ln}._VvwY)nN8aN)Ed_=*gH*btss[ tY 27HhSA(piJlqvNlwwN' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
