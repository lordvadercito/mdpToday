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
define('WP_CACHE', true); //Added by WP-Cache Manager

$sDestDir = '/home/c1240192/public_html/mdptoday';
if ( substr($sDestDir, 0, 1) == "\\" ) {
      $sDestDir = "\\".$sDestDir ;
}
define( 'WPCACHEHOME', '/home/c1240192/public_html/mdptoday/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager

/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'c1240192_mdptoday');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'c1240192_mdptoda');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'dsdpgvikej8Jluu');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

define('DISABLE_WP_CRON', true);

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'I0g5(QsZu{7d6X+DrK|&G:(E*!Y$zPIN:Tj5w_l%L)qS??^bX|.Kb0M^0M2>s*Az'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '+T~>p%:^H^_q-sF`3Jeo({]}t&hQ0d)QV]l,%@bDl~Q#?eQX>; wwP>{NT2>Q9Y7'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'e{Dx^$V#J}IVVBIrJZ_`O<M?^5LOf]I@J<I#+{W!D~7W& :^&HuJN:QhqDLsE`On'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'dutx7k>JouKvrHR)5M$46=1jR+;vM.Vngy@Vz,1<lgcTd{t,mtGh)8wdyIOQ.l@:'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', ')))@46t^h4u%+Z?JZ&T.-[$ibd;NQ)a45BzU]E8w3D2s48qnrLQ(f}ri,i6JlddA'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '(W3[#C.Oc^6)h(ezxO6g=xm~~ioU>+Cr===nQ-o)*,SXgGl3#U4%tFsQ[oJb)~&v'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '*[@T=5M2uJMG@GuGl<#B%9&w JR :P0L70NdlJRfHR::6iEl?Tev3d=AEp--J~Iv'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '<*e)_.^*+zr.Cn)3O]b}baZ?{OLV-C,``eMrRZ0X_wu3I&sLr[8&gEJ:j.B9mj^_'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('ALLOW_UNFILTERED_UPLOADS', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');