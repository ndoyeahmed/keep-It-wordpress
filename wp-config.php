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
define( 'DB_NAME', 'keep-it' );

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
define( 'AUTH_KEY',         'j5XWiMlG)I~uI)SQ cBGdZ.K2~CKfz#+jEH#RgyWtW=(3z&jLjv$`:j}`wNtYBu,' );
define( 'SECURE_AUTH_KEY',  '~kl8ne~ua;.yTv/x68R?~0On<>.#aEYypQ79EUJonl{:0Rp?~3!yKhTWJ-A5846^' );
define( 'LOGGED_IN_KEY',    ']An2vrNn h.2%U:,&Xf7[)$?4eS69ho[mV20ObTOt+DVRd(0tltt+s9yBdnkM_y>' );
define( 'NONCE_KEY',        'dPj0%!X28wtuKBbkdvT?jkR?j!9kcrch@!3}XihH] ~ha+h[(~8S `.Si+~x1MA#' );
define( 'AUTH_SALT',        'e|rLa56Ng=Z=EAQHt5viyl)>BwDOJ<pLv5J_bQUu_{K+X@?% D^S`=$NI7n:h.?(' );
define( 'SECURE_AUTH_SALT', ',/16$m/p]de2QoS9q^v@2+w+W`ZZZN6xzCNGF:FA/oiP0J7<NYUfo.Hn$pvJ|.y;' );
define( 'LOGGED_IN_SALT',   '{D~#;X_]ge<efO4p#G  hI`g@X(@:b.:>6;dnxm},a*DFC^{^0n#=a^#FU%nlwr7' );
define( 'NONCE_SALT',       '!)50/r!_`xKedgg_lkp(seuApq9<PS<Hau$pqtJ+/b*.rGUw^Ny5%<@16)Q{1[+K' );

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
