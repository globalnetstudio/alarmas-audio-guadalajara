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
			<div id="maps" class="address">

				<!-- .address-1 -->
				<div class="address-1">
					<iframe id="map1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d466.6341174333861!2d-103.37438530417224!3d20.666611339304254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae09a6bdb1bf%3A0x67cf219efcce854f!2sALARMAS+VIPER-CLIFFORD!5e0!3m2!1ses-419!2smx!4v1461864473325" frameborder="0" style="border:0" allowfullscreen></iframe>

					<!-- .information -->
					<div class="information">
						<p><i class="icon-mark"></i>&nbsp;<b>Sucursal Agustín Yáñez</b></p>
						<p>Agustín Yáñez #2256-A, Col. Arcos Sur, CP. 44150, Guadalajara, Jal.</p>
						<p>Tel: (33) 3616-9088</p>
					</div>
					<!-- /.information -->
				</div>
				<!-- /.address-1 -->
			
				<!-- .address-1 -->
				<div class="address-2">
					<iframe id="map2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1109.8332956156764!2d-103.42540391680933!3d20.668791376585375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae99a81412ff%3A0x47468a9f8aa05ce0!2sAv.+Patria+440%2C+La+Estancia%2C+45030+Zapopan%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1461866025001" frameborder="0" style="border:0" allowfullscreen></iframe>

					<!-- .information -->
					<div class="information">
						<p><i class="icon-mark"></i>&nbsp;<b>Sucursal Patria</b></p>
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