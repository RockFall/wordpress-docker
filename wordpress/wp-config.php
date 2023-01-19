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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '0L/d)3O Hg#pv2+r-x&lg|GJH*4?=gg7KML.d{$A]8)[pk9sSPS^jm fdJC]~1%@' );
define( 'SECURE_AUTH_KEY',  'p96bd6qoYmJO@fG*?,1X6015xLS9M-]>4dJL%-R81W6>1ZLTiu1k[/zlpo^raPjv' );
define( 'LOGGED_IN_KEY',    'a{aRd^hv,dIo!Lo+@/yW!^z,Xz9]4YYs-{GKh-:^%ox}8RLFaHS,gTY008EGf(7)' );
define( 'NONCE_KEY',        'NI$I1u^!B5=j7%dm]FIls)@4DU go4p{`>i(d%+55~5E|lZhU.bwd0IKtI|U^xHb' );
define( 'AUTH_SALT',        '!UBgQ}0Jh,.YLTM4Q^L]L.2i>psox*?Q|LEgt~T,B.fY_A%pS%F)4r8o{1)yR^(1' );
define( 'SECURE_AUTH_SALT', '9Sz+M3}1,O6^&0PY]#&W@QiRZ4QT,skAI(a8%d$_DpaU=5E< [f-ES#J|n.eJ%|T' );
define( 'LOGGED_IN_SALT',   'NAm9Ra;MV4@H@ui+Oy+ IUBE}=mj-aNkf04xp+|bi~LEP)%NLL5{d0U)x( <*:0i' );
define( 'NONCE_SALT',       'J&q+SyBC0f-!GFG{h2<q[y.4Icg*azic8.$}3]2S;UO|#EWf+yV;=@W;&*,1kOis' );

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
