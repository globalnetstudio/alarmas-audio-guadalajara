		<footer class="footer">
			<p class="copyright">Copyright 2016 &copy; Alarmas &amp; Audio <span>&#8226; Todos los Derechos Reservados</span></p>
			<p class="created-by">Desarrollado por <img class="global-net-studio-logo" src="/images/icons/global-net-studio-logo.png" alt=""> Global Net Studio</p>
		</footer>

		<!-- jQuery -->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/jquery.flexslider.min.js"></script>
		<script src="/js/menu.js"></script>
		<script src="/js/jquery-validate.min.js"></script>
		<script src="/js/maps.js"></script>
		<script>
			$(function() {
				$('.flexslider').flexslider({
			    animation: "slide",
			    controlsContainer: $(".custom-controls-container"),
			    customDirectionNav: $(".custom-navigation a")
			  });
			});
		</script>
		
		<?php if($page == 'contact') : ?>
		<script>
			$(document).ready(function() {
				$("#contactForm").validate({
					rules: {
						firstName: {
							required: true,
							minlength: 3
							
						},
						lastName: {
							required: true,
							minlength: 3
						},
						email: {
							required: true,
							email: true
						},
						phone: {
							required: true,
							minlength: 4
						},
						questionComment: {
							required: true,
							minlength: 5
						}
					},
					messages: {
						firstName: {
							required: "* Escriba su nombre",
							minlength: "* Escriba por lo menos 4 caracteres"
						},
						
						lastName: {
							required: "* Escriba su apellido",
							minlength: "* Escriba por lo menos 4 caracteres"
						},
						phone: {
							required: "* Escriba su teléfono (con lada)",
							minlength: "* Escriba por lo menos 4 caracteres"
						},
						email: "* Formato Inválido",
						questionComment: {
							required: "* Escriba sus preguntas y comentarios",
							minlength: "* Escriba por lo menos 3 caracteres"
						},
					}
				});
			});
		</script>
		<?php endif; ?>
	</body>
</html>