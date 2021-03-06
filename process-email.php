<?php if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	session_start();
	require('./_partials/validationFunctions.php');
	
	$_SESSION['form-errors'] = [];
	$_SESSION['mail-sended'] = false;
	
	// Inicializar contador de errores	

	$fn = false; $ln = false; $ph = false; $em = false; $be = false; $bp = false; $qc = false;

	// Asignar variables del formulario y limpiar espacios del inicio
	$firstName = (isset($_POST['firstName']))  ? clean($_POST['firstName']) : '';
	$lastName  = (isset($_POST['lastName']))   ? clean($_POST['lastName'])  : '';
	$phone     = (isset($_POST['phone']))      ? clean($_POST['phone'])      : '';
	$email     = (isset($_POST['email']))      ? clean($_POST['email'])      : '';
	$byEmail   = (isset($_POST['byEmail']))    ? clean($_POST['byEmail'])    : '';
	$byPhone   = (isset($_POST['byPhone']))    ? clean($_POST['byPhone'])    : '';
	$questionsComments = (isset($_POST['questionComment'])) ? trim($_POST['questionComment']) : '';

	// Validación campos vacios
	if($firstName !== '') :
		$fn = true;
		$_SESSION['old-first-name'] = $firstName;
	else:
		$_SESSION['form-errors']['firstName'] = "nombre";
	endif;
	
	if($lastName !== '') :
		$ln = true;
		$_SESSION['old-last-name'] = $lastName;
	else:
		$_SESSION['form-errors']['lastName'] = "apellido";
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
		
		if(emailValidation($email)) :
		$em = true;
		else:
			$_SESSION['form-errors']['email-format'] = "Correo Electrónico";
		endif;
	else:
		$_SESSION['form-errors']['email'] = "correo electrónico";
	endif;

	if($questionsComments !== '') :
		$qc = true;
		$_SESSION['old-message'] = $questionsComments;
	else:
		$_SESSION['form-errors']['questionComment'] = "Preguntas y comentarios";
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
		$_SESSION['error'] = '¡ No se pudo enviar el correo !';
		header("Location: /contacto");
		exit();	
	endif;

	$campos   = [];
	$campos[] = ['nombre'   => 'Nombre del Prospecto', 'valor' => $firstName.' '.$lastName];
	$campos[] = ['telefono' => 'Número Telefónico', 'valor' => $phone];
	$campos[] = ['email'    => 'Correo Electrónico', 'valor' => $email];

	if ($byEmail && $byPhone) :
		$campos[] = ['metodo_contacto' => 'Método de contacto', 'value' => 'Teléfono/Correo Electrónico'];
	else:
		if($byEmail == 1) :
			$campos[] = ['metodo_contacto' => 'Método de contacto', 'valor' => $byEmail];
		endif;

		if($byPhone == 1) :
			$campos[] = ['metodo_contacto' => 'Método de contacto', 'valor' => $byPhone];
		endif;
	endif;

	// Se crea el variable de sesión con los campos y el mensaje
	$_SESSION['campos-emails'] = ['campos' => $campos, 'msg' => $questionsComments];

	// Se crea el variable de sesión de mail-sended
	// como verdadero para poder mostrar la página
	$_SESSION['mail-sended'] = true;

	// Se redirecciona a la página de gracias
	header("Location: /gracias");
	exit();

} else {	
	header("Location: /contacto");
	exit();
}
?>