<?php
/*
 * CONFIG
 * 
*/
//BD
define('DB_SERVER', 'localhost');
define('DB_USER', 'dbuser');
define('DB_PASS', '123');
define('DB_NAME', 'dbname');

//DEFINICIONES HEAD Y SCRIPTS
define ( 'VERSION', '1.0' );

//CARPETAS
define ( 'UPLOADS', dirname( __FILE__ ) . '/../contenido' );
define ( 'PAGESDIR', dirname( __FILE__ ) . '/../pages' );
define ( 'TEMPLATEDIR', dirname( __FILE__ ) . '/../templates' );

//urls
define ('CARPETASERVIDOR', '' );//esta variable se define si el sitio no está en el root del dominio y si está en una subcarpeta
define ('MAINSURL', 'http://' . $_SERVER['HTTP_HOST'] . CARPETASERVIDOR );
define ('IMAGES', MAINSURL . '/assets/images/');
define ('UPLOADSURL', MAINSURL . '/contenido/');
define ('UPLOADSFILE', MAINSURL . '/contenido/');

//META TAGS
define('SITETITLE', 'Fleek - Viajá distinto');
define('METADESCRIPTION', 'Viajes de egresados a los mejores destinos del globo.');
define('METAKEYS', '');

//LINKS REDES SOCIALES:
define('LINK_FACEBOOK', 'https://www.facebook.com/');
define('INSTAGRAM', 'wearefleek');
define('LINK_INSTAGRAM', 'https://www.instagram.com/');
define('LINK_TWITTER', 'https://twitter.com/');
define('LINK_FLICKR', '#');
define('LINK_YOUTUBE', 'https://www.youtube.com/channel/');
define('WHATSAPP', '341.528.9819');
define('WHATSAPPLINK', 'https://wa.me/543415289819');
define ( 'EMAIL', 'fleek@aucklandturismo.com' );
//indica al paginador cuantos se muestran por pagina para calcular el offset además de que el loop muestra solo esos
define('POSTPERPAG', '1');

//EMAILS Y MENSAJES
define ( 'EMAILDEFAULT', 'info@lacueva.tv' );
define ( 'ASUNTODEFAULT', 'Muchas gracias por contestarnos' );
define('MENSAJEEXITO', 'Su email fue enviado con éxito, muchas gracias.');//este mensaje se imprime en el html
define('MENSAJEERROR', 'Hubo un pequeño error, intente otra vez.');
