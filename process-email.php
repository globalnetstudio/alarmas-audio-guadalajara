<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Inicializa la sesión
	session_start();
	$_SESSION['form-errors'] = [];

	// Inicializar contador de errores	

	$fn = false; $ln = false; $ph = false; $em = false; $be = false; $bp = false; $qc = false;

	// Asignar variables del formulario y limpiar espacios del inicio
	$firstName = (isset($_POST['first-name'])) ? trim($_POST['first-name']) : '';
	$lastName  = (isset($_POST['last-name']))  ? trim($_POST['last-name'])  : '';
	$phone     = (isset($_POST['phone']))      ? trim($_POST['phone'])      : '';
	$email     = (isset($_POST['email']))      ? trim($_POST['email'])      : '';
	$byEmail   = (isset($_POST['byEmail']))    ? trim($_POST['byEmail'])    : '';
	$byPhone   = (isset($_POST['byPhone']))    ? trim($_POST['byPhone'])    : '';
	$questionsComments = (isset($_POST['questions-comments'])) ? trim($_POST['questions-comments']) : '';

	// Validación campos vacios
	if($firstName !== '') :
		$fn = true;
		$_SESSION['old-first-name'] = $firstName;
	else:
		$_SESSION['form-errors']['first-name'] = "nombre";
	endif;
	
	if($lastName !== '') :
		$ln = true;
		$_SESSION['old-last-name'] = $lastName;
	else:
		$_SESSION['form-errors']['last-name'] = "apellido";
	endif;

	if($phone !== '') :
		$ph = true;
		$_SESSION['old-phone-name'] = $phone;
	else:
		$_SESSION['form-errors']['phone'] = "teléfono";
	endif;
	
	if($email !== '') :
		$em = true;
		$_SESSION['old-email-name'] = $email;
	else:
		$_SESSION['form-errors']['email'] = "correo electrónico";
	endif;

	if($questionsComments !== '') :
		$qc = true;
		$_SESSION['old-message'] = $questionsComments;
	else:
		$_SESSION['form-errors']['message'] = "mensaje";
	endif;
	
	if($byEmail == 1) :
		$bp = true;
		$_SESSION['old-email-check'] = 'checked';
	endif;
	
	if($byPhone == 1) :
		$bp = true;
		$_SESSION['old-phone-check'] = 'checked';
	endif;

	if(!$fn || !$ln || !$ph || !$em || !$qc) :
		$_SESSION['error'] = 'No se pudo enviar el correo reviza el fomulario';
		header("Location: /contacto");
		exit();	
	endif;

	// Pasa La validación y se procede a enviar el correo electrónico

} else {
	header("Location: /contacto");
	exit();
}
?>