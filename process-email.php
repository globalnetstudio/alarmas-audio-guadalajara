<?php

$firstName = (isset($_POST['first-name'])) ? trim($_POST['first-name']) : '';
$lastName  = (isset($_POST['last-name']))  ? trim($_POST['last-name'])  : '';
$phone     = (isset($_POST['phone']))      ? trim($_POST['phone'])      : '';
$email     = (isset($_POST['email']))      ? trim($_POST['email'])      : '';

$questionsComments = (isset($_POST['questions-comments'])) ?
												trim($_POST['questions-comments']) :
												'';

$byEmail   = (isset($_POST['byEmail']))    ? trim($_POST['byEmail'])    : '';
$byPhone   = (isset($_POST['byPhone']))    ? trim($_POST['byPhone'])    : '';

$to = 'Alarmas y Audio Guadalajara <contacto@alarmasyaudioguadalajara.com>';

$subject = 'Mensaje enviado desde Alarmas y Audio Guadalajara';
$message = wordwrap($questionsComments, 70);

$from = $firstName . ' ' . $lastName .' <' . $email . '>';

$headers  = "From: {$from}\n";
$headers .= "Reply-To: {$from}\n";
$headers .= "X-mailer: PHP/".phpversion()."\n";
$headers .= "Mime-Version: 1.0\n";
$headers .= "Content-Type: text/plain; charset=iso-8859-1";

$result = mail($to, $subject, $message, $headers);

header("Location: contacto.php");
exit();
?>