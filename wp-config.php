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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_terciopelo' );

/** MySQL database username */
define( 'DB_USER', 'admin');

/** MySQL database password */
define( 'DB_PASSWORD', 'Inova.2020!!' );

/** MySQL hostname */
define( 'DB_HOST', 'inovadb.cpeoo34h8f6r.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '|M(8C{L[QV4wCA~ezf](rCu]!u8Xy} Qseym(tkpaq_3Pf5Ha8n4L;!?^gq[Q5/d' );
define( 'SECURE_AUTH_KEY',  '+b_B!XGO)nLX/AE0+j{8Edss1 luek0S*v{NiB+!i`^SuwO/+*!LU}<ThC)+Ry8>' );
define( 'LOGGED_IN_KEY',    'Fw@6fVIT/58;LeEnvMc_0y*]  VP%mq]`i.^V2e$. 4:V10#E]c%vk:z<W[]@ic_' );
define( 'NONCE_KEY',        '%uf=(6ngx:m~]&%Eyjm{[WM?.lT9`oQ-RMj|38WPG6!8/5fK<U&(9*Tt%|e83>ox' );
define( 'AUTH_SALT',        'C,34Gs0So Y8L/?P;~j-dJBpc_q$(0`fad-wE0T{Jn-EzG:I4?4Sv72p$k&7&zTh' );
define( 'SECURE_AUTH_SALT', '@)6FS#:c2qzLbghUTS`/yXx{YN9MB`k<L_7Z9`knQ0 V4Z+Y:y8]&IP =~pru0(v' );
define( 'LOGGED_IN_SALT',   'pJ-<[L.!-+v+jFEnWQ<G>.zA|sI/ornuo)]*@(1&5=i$Q4<N.gbC[tM[9a7+T{}_' );
define( 'NONCE_SALT',       'G]N4gRj1MJoguU,>12+~ugQ<cSy*;<7K)0UX]%rX+^i=#Dt0d^DkijdyL6=)a|h;' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
