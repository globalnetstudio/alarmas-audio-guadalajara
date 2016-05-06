<?php
	ob_start(); // Habilitar Output Buffering
	session_start(); // Iniciar Sesión
	if(!isset($_SESSION['mail-sended']) && $_SESSION['mail-sended'] == true) :
?>
	<?php		
		include('./_partials/api.php'); // Cargar API
		$pageTitle= 'Gracias'; // Título de pagina <title>...</title>
		$page= "thanks"; // pagina para dejar activo el enlace del menú superior
		include('./_partials/head.php'); // Cargar la etiqueta <head>...</head>
	?>

		<h1 class="hide">Alarmas y Audio Guadalajara</h1>

		<?php include('./_partials/header.php'); ?>

		<!-- .thanks-carousel -->
		<div class="thanks-carousel">
			<?php include('./_partials/carousel.php'); ?>
		</div>
		<!-- /.thanks-carousel -->

		<!-- .thanks-content -->
		<section class="thanks-content">
			<!-- .wrapper -->
			<div class="wrapper">
				<!-- .message -->
				<div class="message">
					<h2>Gracias por escribirnos sus Preguntas ó Comentarios</h2>
					
					<p>Su mensaje fue enviado exitosamente y será atendido por uno de nuestros ejecutivos lo más pronto posible.</p>
				</div>
				<!-- /.message -->
			</div>
			<!-- /.wrapper -->
		</section>
		<!-- /.thanks-content -->
		<?php include_once('./_partials/footer.php'); ?>

		<?php ob_end_clean(); $_SESSION = []; session_destroy(); ?>

<?php else:
	$_SESSION = []; // Vacias el array de sessión
	session_destroy(); // Terminar la sesión
	header('Location: /contacto'); // Redireccionar a /contacto
	ob_end_clean(); // Elimina el contenido de buffer de salida y lo deshabilita
	exit(); // No seguir ejecutando el código de abajo
?>

<?php endif; ?>