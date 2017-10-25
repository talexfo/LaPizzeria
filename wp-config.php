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
define('DB_NAME', 'lapizzeria');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'v5DJp+PEaB6#YI?{J&u>1$J]fJO5X]X@0mLUy6eDkypkur}i],HAW@C|^t4mIN*%');
define('SECURE_AUTH_KEY', 'O*_D eKLjlVyCz8 TY(rn/K[m,eERWzLY46V36w^$YIAy5KLTu)h]$MMd!MV+?=o');
define('LOGGED_IN_KEY', 'S/?F;VzD!1.TNCX0-E,gz~6!]2b}cIiuH<PARug<{.[=h5Si|?*of5|~V<l1yokL');
define('NONCE_KEY', 'z04YqAHy/v7%+|z q z90TowC|r@n.P]i1u@}lzV%lZVO=?3N8m~];US$7Z>4]P)');
define('AUTH_SALT', 'eju 6i={>a7v?#;+N{livz.L~=M+%q?4}?#el0nIxmi2(898Q]]r*}.-oq(j.hy]');
define('SECURE_AUTH_SALT', '+|Nv(J]/l]$C0Z)`.SQ`rR);ND c|S}DP48DYWaievN.N@p6i_hFkn+Bt;545{#l');
define('LOGGED_IN_SALT', '23erXP5.2OsRzEV;k-2hqmpqHf[=|3W]XJU}&HSGcgf?PG*cmWW3/7f6KA)Dbc&$');
define('NONCE_SALT', 'f8s|qTV+z!(J.=TV<7mh:>zQPWFD5)P&Mu6<H??V-VV jEZL:2-|`9@{)P%dRKo^');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

