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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '?Ih(Hs+GxSdWagH/AlkZ%~1M<5$e%#XauU9 YItj.Orel=x1XXw,uDI6nU:>VD}I' );
define( 'SECURE_AUTH_KEY',  '82CNV12SN14:j2#)/mP4]fKR!T]7Ss:+;7wQY?/P~P3PG+cE+}}Tw5d@=.g^~MT+' );
define( 'LOGGED_IN_KEY',    '1CfTK.m!Dd2363a?uDbfaE<hCPGh?o>!ev5dZ~z$w0`xZtV[7N !E),Mj5;34Bly' );
define( 'NONCE_KEY',        'a]2EyIW%mMSwC@j25nmJxDrhO`[F7fgQ5G_esa 8cI|YCnlV/CNc/k65{,*]%JhW' );
define( 'AUTH_SALT',        '(Q7gX+xqir>~UT4<HLLF=;bcWFAmIf,f]xFCE7*f7Ec^ZumM.L39xD#`;a*+6~&&' );
define( 'SECURE_AUTH_SALT', '(Fw+_H-BXdALdp78fz^|h-,,B-P4mrsq`T9.J17})ReG1 J3bRQ?E=_GfXFD!m6_' );
define( 'LOGGED_IN_SALT',   '>c5q7-L;lXX#LKowOQp#f$UQ#QM,=o!cVce>L3Z|wo.XoR#n?i bB^l+~g 9kS.2' );
define( 'NONCE_SALT',       ';tyX ?oIJM/b{R&{.nzQ#`c%_>8rYqxo@5M#_Acv9kZbeH#nv*S*=yn+63QC@RwP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp34_';

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
