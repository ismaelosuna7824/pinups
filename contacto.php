<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/php/Exception.php';
require 'assets/php/PHPMailer.php';
		
$errors = array();
$data = array();

if (empty($_POST['nombre']))
	$errors['nombre'] = 'Nombre requerido.';

if (empty($_POST['tel']))
	$errors['tel'] = 'Teléfono requerido.';

if (empty($_POST['email']))
	$errors['email'] = 'Email requerido.';

if (empty($_POST['ciudad']))
	$errors['ciudad'] = 'Ciudad requerido.';

if (empty($_POST['mensaje']))
	$errors['mensaje'] = 'Mensaje requerido.';

if ( !empty($_POST['fakeName']) || !empty($_POST['fakeEmail']) || !empty($_POST['fakeWeb']) )
	$errors['honeypot'] = "Nope.";
			
if ( !empty($errors)) {
	$data['success'] = false;
	$data['errors']  = $errors;
	
} else {
	$mail = new PHPMailer(true);
	$mail->setFrom('no-responder@pinupsfungrill.com', "Pinup's Website");
	$mail->addAddress('pinupsbargrill@gmail.com');
	$mail->addReplyTo($_POST['email'], $_POST['nombre']);
	
	// Content
	$varsValues = [
		$_POST['nombre'],
		$_POST['email'],
		$_POST['tel'],
		$_POST['ciudad'],
		$_POST['mensaje'],
		$_POST['subject']
	];
	$varsNames = [
		'%nombre%',
		'%email%',
		'%tel%',
		'%ciudad%',
		'%mensaje%',
		'%subject%'
	];
	
	$mail->isHTML(true);
	$mail->Subject = utf8_decode($_POST['subject']);
	$mail->MsgHTML(utf8_decode(str_replace($varsNames, $varsValues, file_get_contents('assets/php/template-contacto.html'))), __DIR__);
	
	if ($mail->send()) {
		$data['success'] = true;
	} else {
		$data['errors'] = $mail->ErrorInfo;
	}
}

// return all our data to an AJAX call
echo json_encode($data);