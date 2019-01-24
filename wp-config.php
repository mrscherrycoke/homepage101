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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '101' );

/** MySQL database username */
define( 'DB_USER', '101' );

/** MySQL database password */
define( 'DB_PASSWORD', '101MysqlPassword' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.101.loc' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Am}icEWZOBLHnV}D@*!ni^40/pDyx/gcGUa%e+n0i~4p-SG]&F|TQrd1z7@+[iY5' );
define( 'SECURE_AUTH_KEY',   ')!~^J#Lq1.U7;emC-FzQ>vHxT>C<#?#`MlcjQ3cny`&e1((nqZ2Wk}5G=qm!i2;&' );
define( 'LOGGED_IN_KEY',     'Ty7DdNWA{Vxb#,/#)I]{,Adk)a[5JcMgy5sL+5mr+(M5hHfmHRK+{L]>6)|xnop&' );
define( 'NONCE_KEY',         'Kh6Izo|YK+.-D|>~;pgRb|.aeXUFoZ9|4mc?PU_8ie-euDJ/%#&)i=v/AV&V*N9>' );
define( 'AUTH_SALT',         'n:KG<CV@wBwf$d{;eN {M,(G-;.*j+mh^b k+$EO#<VTG:76|Q>tQn+xnyL7T<([' );
define( 'SECURE_AUTH_SALT',  'x.e2ZIUX*#cJG14-e;eAo^J{D5,gMd<$J]5LDLM.QLnaJbyXPC9eZaCW<OI1. K`' );
define( 'LOGGED_IN_SALT',    '/a8t]QR#&O#%`6?>^Y0=k7s o!3(X; :b-dB2~]rRFZWAO<8F=3oIn>zTbk&Xifb' );
define( 'NONCE_SALT',        'o(VZC>Kaly,SXn_o+DTw$`vrk3rnLc`KzVZ~A;{sz7Mb}ZrQBcl_;UB}Hfhko|~:' );
define( 'WP_CACHE_KEY_SALT', 'nOyk;C{g;*HRB#QU5;UgA^Zb<Y/<Sry]NOy}]f:tSQ=[{(zt_-;m@+ETMY|%BiRW' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
