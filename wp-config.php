<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'psduckie_wor1');

/** MySQL database username */
define('DB_USER', 'psduckie_wor1');

/** MySQL database password */
define('DB_PASSWORD', 'Tw1U35q0');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'wkqPzD<h;K<F>IcGq%(hDD>mLg_N?z+%ejSkR+Diif&dF]a(L&J}=BIB[/GMklc/+MTm<>yFf/|&]KWk;$$g=ga)lG>}[H)XfAZ)x(o_BB*tKg<|(b;Fu;uK/!ZBD-hD');
define('SECURE_AUTH_KEY', 'jcOWygcb;q+aV@H%pJr]Ct]Big(/qa&nEAm/G&|YZ^hO)b=V+w/&h[]W(jQE/XW*CawuWIMOnlf}<ER]Yt;jb^GPUZx)g++VLv_>IBFh)ZZcDX=NLk(WRzP^c$f%o{nV');
define('LOGGED_IN_KEY', 'Q<qpZvBZ_*gB>W@@+(mO*C*cI+%zvaBSD-awxapwLv=kFX]GV=tvJ|FVI_iaT<rD^*K]iX+^{-GfVI@VtFSDh<Nriekm;E%r=AW^ar^US^Tm^t=*B;-F/YprWVLr&sd=');
define('NONCE_KEY', 'Hq$--Daxx]>%V/lEnK!)rJAp%$N*aDmPp)J!IiJS]wc)T;-BxN;y{LiW=^K%U+P]c^QR-dKWQKexF|BP<]jrS=%tL&suRHtyWm&@vX_^h<VUTM<pl]{hOykN)@BIpVb@');
define('AUTH_SALT', 'EprltLQ^Htmy;gtmuy(}V^h;pvEBYpTgYI*<|hOh^KdD=hZBdv;Qv_iv/}}^+$>mub=]KP&UtUYcdqeSbTG^%^B@$!DprwSBZZ@fw}h(GQ@K|s{tYbZKdVK^sUYpalxi');
define('SECURE_AUTH_SALT', 'I<aB>XnDT?l=V?*h|GpdYvNgbvG?Rpg/-Q?y^e/vIZ+nw{sxt_eKLk(@BonR_wy|qA-i(&G%]l=>qUP/hvxWTDKdhU}eJxU(M(P_ph-{mVP!-aG}t(hcG>es|eIO%MZ!');
define('LOGGED_IN_SALT', 'tJybF-x)OSyoh-GiKEoIYa@lrX_tv<lz!y^rU_SXyLKJT&cYfa^u%(VMa>Styz)bXv!takRRS(]!+@@G*K&%z_NvmZ=]D/>VM[^M&?aqSpY)-Uw){j*O|S}kSeg/&uw%');
define('NONCE_SALT', ']+tCk{*bQ_{%[jy${zFYzuLMMT>ohP+Nla!zs!S}gU<oC(KddZlq^sZ+U+B$-)Tq!SRu[y$*?+|)>Ew]nphbhi_+B$IM>w[V|(<vogiCAxn;otjB%gPh{}PGmU^nW>mY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_xkzc_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
