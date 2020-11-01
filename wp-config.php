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
define( 'DB_NAME', 'test1' );

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
define( 'AUTH_KEY',         'P|I/2HIY%Vz0EUgCY(~Yoej9tM0Nf+d~~mZ@AmHI6/Fio%q8OY:$/Y;!f1F11]hh' );
define( 'SECURE_AUTH_KEY',  '2fpw|%WS82|RwIru$n^vUIG<gi<#dpXCB/x!mEJqF[Q|&LT@AFo<!E<d8<(xhn%i' );
define( 'LOGGED_IN_KEY',    '#%~/*X#KRy_WE|}+&ZIRg5Rn]siiwnfCo<B<N^,RrMB6aOk_mIG^[k7)!>8sd3|z' );
define( 'NONCE_KEY',        '5C?d[3E`f{o)<q)uHUB}@3UGT]Z.5s56xKg>KQS{930(nmu8Yy4[4k=m[/j3 S*Y' );
define( 'AUTH_SALT',        '?2w;e5+WV(H?Km ArlM5Z?V|h:),D>&U@zfgn|x1s-jpp#7]]BXy=R,Bp`/5#N#-' );
define( 'SECURE_AUTH_SALT', 'Kg!F#;hr@VkQBC8JmY2).3f)+C[$*}?M>XyO0:UX29`SyPgWlQ !izAqCr@LxZ5 ' );
define( 'LOGGED_IN_SALT',   'm_)qxmjq2}cHrrqeZO-RchD7F~!}BYw~{/)OUH39sNeSpkz9HaY2`SJR<~8q|<#G' );
define( 'NONCE_SALT',       'c7WmmZ@Wvs&eW<ot(PM%1)RNsd5oYMT0.1AW[l2CYr{QC!p7}@0Td6kIzIDL^nN5' );

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
