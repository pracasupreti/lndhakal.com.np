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
define( 'DB_NAME', 'dbbghz3ly98gib' );

/** MySQL database username */
define( 'DB_USER', 'uqyrpgp68rtrc' );

/** MySQL database password */
define( 'DB_PASSWORD', '6qqgtu2zi7ku' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '[2J(vw)VAxVm1Oj6&nT>aMscs/@{keCOLNNqs9SQNG4ByN#xGA!8zFCo/fp*Ec/1' );
define( 'SECURE_AUTH_KEY',   ']L3giCgGOyt(Ay_#| Z~ RyM2Qa;1{f|MPKK`Mb`Vfj,0D  {/.Sr<IOl~~B,1,v' );
define( 'LOGGED_IN_KEY',     '5s;H1R0#X.5^ZC`F|ruPMvo`!/z$m}@9cvpez$B1o;D)juF)(jl?7jFu,j!{AxrG' );
define( 'NONCE_KEY',         '8wFzT7;~Voj[/spo$/W$tVpw%5T}a#yFSq$5Pd+jEDIFv03{s6B;y^HjtT:FEPu(' );
define( 'AUTH_SALT',         '~H<qQRR|:vEk;XOQ1ztf=v3vGZ94u>BA{Q>8baZ+Tl<vvU6j%{0v(FS3# c]OcG%' );
define( 'SECURE_AUTH_SALT',  '4]OgPgG7XG?a8`e^8jKGWs;|>S5@`mEgVDAY#b53[p_*5>dOf_}cj!olD FVhs$M' );
define( 'LOGGED_IN_SALT',    '3btNk<bWgdPaS9)!jM(jHmAzE.LX,eh852}JZV$6MZ$`EV};)v|-e3:Lht|n,5Sx' );
define( 'NONCE_SALT',        'qp7`l@2z&2G:m^XI!-#lV?Sa16BOn)$F7:U;Ug$D*(/eLMu6ME ,@oUox#Ku`ZHO' );
define( 'WP_CACHE_KEY_SALT', '44/fR[r(MyKOkbX~qLBm,yv[Zf.D{!TX!w-g5R/9Ao3}l(hB$F~.7j9iB&(U^Av%' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hiw_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
