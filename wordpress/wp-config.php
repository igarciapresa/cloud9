<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'wp' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'root' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '(-Oi[7z(-?<]3Ka&MIAPv~*w[F! )f;^1v_/y|+k^!RG!/|,k.Rv.H6#)$h>B@IY' );
define( 'SECURE_AUTH_KEY', 'n7#}4C-sxUq=ZDdicKzYlJG ?QU$+Z*c>Z0sd{r-Vaot5!$  cQ]2/<(x-}.|[hv' );
define( 'LOGGED_IN_KEY', 'j]Srq~Xj-27%U={O9E0/D|-5jfxKxxO#h0iSH0<[bSvicI ?[u}xY,}V[[E3oh]3' );
define( 'NONCE_KEY', 'ooNRK|hJoBJR|}1w?,:E}^kAnFnjiMEj!SkKNq|uj]T:hDbM7n[3 Y]Tofy0]y;f' );
define( 'AUTH_SALT', 'j1w8Y#5|9Ikhn4xTPI$Z_YIY8Ylr)ZI?CcA=$`,rb{D/$XqN0h(-_]Pdcg?a  d/' );
define( 'SECURE_AUTH_SALT', 'r+*8&TDGt^d(2&*eY5.9GK%1iC&{`aX(-Q[~,$Hz)]_U5<<Nw<X<#*vhHCI3@3et' );
define( 'LOGGED_IN_SALT', 'CC.t2Ei&T~tkOh2F7tL_-X48-/Ry/hPG+gnH8@K]BLUpL1HB`,Z}Snf2|]C&]h%P' );
define( 'NONCE_SALT', 'Nf+9GJY!4 ,3oI$MP~LfC~ A/u]l74N9Ox~paDAzJUK:)a];g:^:@Ee!#$0]FSX/' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct'); //Da permiso para FTP en el backend