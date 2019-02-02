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
define('DB_NAME', 'new_wordpress');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'azsxdcfv');

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
define('AUTH_KEY',         '_h=$KvZ@[Qfn*bd2lL5D*p$e2w*Nw4L(An6v7RH1d3WwvOAZ[%]|/ZzF[WH[r;R%');
define('SECURE_AUTH_KEY',  'Btunum./yKvQ~eSmoI[.zz3}X,oRBChGPc&aA9(3uou$(gBmVHSD{4M|,gA3eSQ-');
define('LOGGED_IN_KEY',    'f$HDaEWqPIPOoS*gb61|Ry%==#PfxMP2%egZzHl@B 8{qs%(4H?58VmcnF/+ns>~');
define('NONCE_KEY',        'G@%DT!Ac/s$Oc[L]HD(1%|4-BSD#XLBL~oZlE.FgG&dV=-g,|S.dT|yD,7zdyN>j');
define('AUTH_SALT',        'aNU$!sI[e7@bn@O,P7vF}l6C{ Sn62toNw0N}T^+ws,Ymgc+DGl~n)exDx+g`s?y');
define('SECURE_AUTH_SALT', '<}):UFQ:Aw4.#+ze_7+vrMinNGP{ot~y;ScpQni3jvI~#](c|v0MHd<@mKFQXn}!');
define('LOGGED_IN_SALT',   '2nS&=_*%QD#b{W{t&%1/a&s}k9swnxh*%Jv,u2[UOx5JlV-T@^T8|40GAJ1qu3QF');
define('NONCE_SALT',       '?l,/ywj$Sdcm@XC!~Ia9N3v#W*#$3p!q=F[uM>jc9~}^5;U5ta+`]C0sf2muW?#l');

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
