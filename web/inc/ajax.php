<?php 
/*
 * AJAX FUNCTIONS
 * Funciones que se ejecutan por ajax
 * 
*/
require_once 'functions.php';

//chequea si es peticion de ajax y ejecuta la funcion
if( isAjax() ) :

	$function = isset($_POST['function']) ? $_POST['function'] : '';

	switch ( $function ) {

		case 'get-form':

			$form = isset($_POST['formulario']) ? $_POST['formulario'] : '';
			
			getTemplate( 'formulario', $form );

		break;

		case 'compra-online':
			
			$respuesta = array('mensaje' => '<p class="msj-respuesta">Su mensaje ha sido enviado<br>Un asesor se comunicara a la brevedad.</p>');

			// Valores enviados desde el formulario
			$respuesta['error'] = $_POST;
			//FUNCION QUE ENVIA FORMULARIO CON PHPMAILER			
			//sendEmailPhpMailer( $emailReplyTo, $nombreReplyTo, $emailTo, $nombreTo, $asunto, $contenido);

			//guardar en base de datos
			//saveNewContact ( $nombre, $telefono, $email, $mensaje, $fecha_viaje, 'contacto' );
			
			echo json_encode($respuesta);
		break;

		case 'load-template':
			$template = isset($_POST['template']) ? $_POST['template'] : null;
			$page = isset($_POST['pagina']) ? $_POST['pagina'] : 'inicio';

			if ( $template != null ) {
				getTemplate($template, $page);
			}

		break;

	}

	
//sino es peticion ajax se cancela
else :
    throw new Exception("Error Processing Request", 1);   
endif;