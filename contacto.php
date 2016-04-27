<?php $pageTitle= 'Homepage'; $page = 'contact'; ?>

<?php include('./_partials/head.php'); ?>

	<h1 class="hide">Alarmas y Audio Guadalajara</h1>

	<?php include('./_partials/header.php'); ?>

	<?php include('./_partials/carousel.php'); ?>

	<!-- .contact-content -->
	<section class="contact-content">
		<h2>¡Contáctanos!</h2>
		<p class="message">Nos interesa escucharte. <span>Responderemos a tu comentario lo más pronto posible.</span></p>

		<div class="form">
			<form action="process-email.php" method="POST">

				<!-- .form-inputs -->
				<div class="form-inputs">

					<!-- .first-name -->
					<div class="first-name">
						<input type="text" name="first-name" placeholder="Nombre(s):">
					</div>
					<!-- /.first-name -->

					<!-- .last-name -->
					<div class="last-name">
						<input type="text" name="last-name" placeholder="Apellidos:">
					</div>
					<!-- /.last-name -->

					<!-- .phone -->
					<div class="phone">
						<input type="text" name="phone" placeholder="Telefono (con lada):">
					</div>
					<!-- /.phone -->

					<!-- .email -->
					<div class="email">
						<input type="email" name="email" placeholder="Correo Electrónico:">
					</div>
					<!-- /.email -->

				</div>
				<!-- .form-inputs -->

				<!-- .question-comments -->
				<div class="question-comments">
					<textarea name="questions-comments" rows="4" placeholder="Preguntas y Comentarios:"></textarea>
				</div>
				<!-- /.question-comments -->

				<!-- .checkbox -->
				<div class="checkbox">
					<span>¿ Como prefieres que te contactemos ?</span>

					<label for="email">
						<input type="checkbox" name="byEmail" value="1" id="email">&nbsp;Email
					</label>

					<label for="phone">
						<input type="checkbox" name="byPhone" value="1" id="phone">&nbsp;Teléfono
					</label>
				</div>
				<!-- /.checkbox -->

				<!-- .buttons -->
				<div class="buttons">
					<button type="cancel">BORRAR</button>
					<button type="submit">ENVIAR</button>
				</div>
				<!-- /.buttons -->

			</form>
		</div>
		<!-- /.form -->

			<!-- .address -->
			<div class="address">

				<!-- .address-1 -->
				<div class="address-1">
					<img src="/images/contact/map-1.jpg" alt="Map 1">
					<!-- .information -->
					<div class="information">
						<p><i class="icon-mark"></i>&nbsp;Sucursal Agustín Yáñez</p>
						<p>Agustín Yáñez #2256-A, Col. Arcos Sur, CP. 44150, Guadalajara, Jal.</p>
						<p>Tel: (33) 3616-9088</p>
					</div>
					<!-- /.information -->
				</div>
				<!-- /.address-1 -->
			
				<!-- .address-1 -->
				<div class="address-2">
					<img src="/images/contact/map-2.jpg" alt="Map 1">
					<!-- .information -->
					<div class="information">
						<p><i class="icon-mark"></i>&nbsp;Sucursal Patria</p>
						<p>Av Patria #440-D, Col. La Estancia, CP. 45030, Zapopan, Jal.</p>
						<p>Tel: (33) 3070-0576</p>
					</div>
					<!-- /.information -->
				</div>
				<!-- /.address-1 -->
			</div>
			<!-- /.address -->

	</section>
	<!-- /.contact-content -->

<?php include_once('./_partials/footer.php'); ?>	