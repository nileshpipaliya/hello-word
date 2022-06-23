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

define( 'DB_NAME', 'eagro' );



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

define( 'AUTH_KEY',         'r}g}P+{fFi*d,1J!6pa:#]2c<ZX{oMJGgvmQY7yk_P/(gMF/fP`/b2[MyHJnoyy6' );

define( 'SECURE_AUTH_KEY',  '(4-bq]*kE=-LUt66XrQ{,<&ML!%vA`iQu~r&i:W:D@+P$h?1%mA^_~~e$05&QtND' );

define( 'LOGGED_IN_KEY',    'B@P Z>Rk[!6d6NoV4-S:ShGHEO<2ZCHAf|>;Lhj5xDZ/QqU[#Z2l*c&voI.C*tnA' );

define( 'NONCE_KEY',        'Ucn`G-^d]Z6BXnDz|#5fx@8_j1R]}5dZww!<Rb+V6vCB:8Mp,egrU/A}$}fX>%%N' );

define( 'AUTH_SALT',        'c C?(||UD0E2GW3A?h8bj}vFlf-.6@aw/+|wCI7~m6}W0ehBy1wQxc:D.Lmf1Ch/' );

define( 'SECURE_AUTH_SALT', 's*h4KW|i:~(/xig?Txw|<:`L<1EjVK;>k0B/TFMkiua454MB0fBG]DI/.O0=R~4X' );

define( 'LOGGED_IN_SALT',   '<_nE*mG}.~7TjY D6j[9HY*C~y1!/fwJzN}!&KVP:rreO:c=>$ ZdMX+(XiCQRf%' );

define( 'NONCE_SALT',       'xFyy YW+jbw%$v4nN<00Z!26/QA1uZ_kE<3wta[0O-EUQA%NM5@nQ,HMS(4SQsp(' );



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'tan_';



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
define('WP_MEMORY_LIMIT', '512M');
define('CONCATENATE_SCRIPTS', false);



/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

