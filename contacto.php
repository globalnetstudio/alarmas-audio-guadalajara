<?php include('./_partials/api.php'); ?>
<?php $pageTitle= 'Contacto'; $page = 'contact'; ?>

<?php include('./_partials/head.php'); ?>

	<h1 class="hide">Alarmas y Audio Guadalajara</h1>

	<?php include('./_partials/header.php'); ?>

	<?php include('./_partials/carousel.php'); ?>

	<!-- .contact-content -->
	<section class="contact-content">
		<h2>¡Contáctanos!</h2>
		
		<?php if(isset($_SESSION['error']) && $_SESSION['error'] !== '') : ?>
			<div class="form-errors">
				<p><b><?php echo $_SESSION['error']; ?></b></p>
			
				<ul>
					<?php foreach($_SESSION['form-errors'] as $key => $error) : ?>
						<?php if($key == 'questionComment') : ?>
							<li>Esciba sus <b><?php echo $error ?></b></li>
						<?php elseif($key == 'email-format'): ?>
							<li>Formato incorrecto de <b><?php echo $error ?></b></li>	
						<?php else: ?>
							<li>Esciba su <b><?php echo $error ?></b></li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
			</div>

		<?php endif; ?>

		<p class="message">Nos interesa escucharte. <span>Responderemos a tu comentario lo más pronto posible.</span></p>

		<div class="form">
			<form id="contactForm" action="process-email.php"  method="POST">

				<!-- .form-inputs -->
				<div class="form-inputs">

					<!-- .first-name -->
					<div class="first-name">
						<input <?php echo (isset($_SESSION['form-errors']['firstName'])) ? "class='inputError'" : null; ?>
							id="firstName"
							type="text"
							name="firstName"
							placeholder="Nombre(s):"
							value="<?php echo (isset($_SESSION['old-first-name'])) ? $_SESSION['old-first-name'] : null; ?>"
						>
					</div>
					<!-- /.first-name -->

					<!-- .last-name -->
					<div class="last-name">
						<input <?php echo (isset($_SESSION['form-errors']['lastName'])) ? "class='inputError'" : null; ?>
							id="lastName"
							type="text"
							name="lastName"
							placeholder="Apellidos:"
							value="<?php echo (isset($_SESSION['old-last-name'])) ? $_SESSION['old-last-name'] : null; ?>"
						>
					</div>
					<!-- /.last-name -->

					<!-- .phone -->
					<div class="phone">
						<input <?php echo (isset($_SESSION['form-errors']['phone'])) ? "class='inputError'" : null; ?>
							id="phone"
							type="text"
							name="phone"
							placeholder="Telefono (con lada):"
							value="<?php echo (isset($_SESSION['old-phone-name'])) ? $_SESSION['old-phone-name'] : null; ?>"
						>
					</div>
					<!-- /.phone -->

					<!-- .email -->
					<div class="email">
						<input <?php echo (isset($_SESSION['form-errors']['email']) || isset($_SESSION['form-errors']['email-format'])) ? "class='inputError'" : null; ?>
							id="email"
							type="email"
							name="email"
							placeholder="Correo Electrónico:"
							value="<?php echo (isset($_SESSION['old-email-name'])) ? $_SESSION['old-email-name'] : null; ?>"
						>
					</div>
					<!-- /.email -->

				</div>
				<!-- .form-inputs -->

				<!-- .question-comments -->
				<div class="question-comments">
					<textarea id="questionComment" <?php echo (isset($_SESSION['form-errors']['questionComment'])) ? "class='inputError'" : null; ?> name="questionComment" rows="4" placeholder="Preguntas y Comentarios:"><?php echo (isset($_SESSION['old-message'])) ? $_SESSION['old-message'] : null; ?></textarea>
				</div>
				<!-- /.question-comments -->

				<!-- .checkbox -->
				<div class="checkbox">
					<span>¿ Como prefieres que te contactemos ?</span>

					<label for="byEmail">
						<input
							id="byEmail"
							type="checkbox"
							name="byEmail"
							value="1"
							id="email"
							<?php echo (isset($_SESSION['old-email-check'])) ? 'checked' : null; ?>
						>
						&nbsp;Email
					</label>

					<label for="byPhone">
						<input
							id="byPhone"
							type="checkbox"
							name="byPhone"
							value="1"
							<?php echo (isset($_SESSION['old-phone-check'])) ? 'checked' : null; ?>
						>
						&nbsp;Teléfono
					</label>
				</div>
				<!-- /.checkbox -->

				<!-- .buttons -->
				<div class="buttons">
					<button type="reset">BORRAR</button>
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
					<p>Tel: (33) 3630 - 4029</p>
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
<?php $_SESSION = array(); session_destroy(); ?>