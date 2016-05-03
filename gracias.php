<?php session_start(); $page= "thanks"; ?>

<?php if(isset($_SESSION['mail-sended']) && $_SESSION['mail-sended'] == true) : ?>

	<?php include('./_partials/head.php'); ?>
	
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

<?php else: ?>
	<?php header('Location: /contacto'); exit(); ?>
<?php endif; ?>

<?php $_SESSION = []; session_destroy(); ?>