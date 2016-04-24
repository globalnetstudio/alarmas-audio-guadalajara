<!-- .carousel -->
<div class="carousel flexslider">
	<ul class="slides">
		<li>
			<img src="/images/header/banner/slide-1.jpg" alt="Slider Banner 1">
		</li>
		<li>
			<img src="/images/header/banner/slide-2.jpg" alt="Slider Banner 2">
		</li>
		<li>
			<img src="/images/header/banner/slide-3.jpg" alt="Slider Banner 3">
		</li>
	</ul>

	<div class="custom-navigation">
		<a href="#" class="left-chevron flex-prev"></a>
	  <div class="custom-controls-container"></div>
		<a href="#" class="right-chevron flex-next"></a>
	</div>

	<!-- .zig-zag-form -->
	<div class="zig-zag-form">
		<?php if($page == 'homepage') : ?>
			<picture>
			  <source srcset="/images/header/zig-zag-form-gray-2600px.png" media="(min-width: 1361px)">
			  <img srcset="/images/header/zig-zag-form-gray.png" alt="zig zag image">
			</picture>
		<?php else: ?>
			<picture>
		  	<source srcset="/images/header/zig-zag-form-white-2600px.png" media="(min-width: 1361px)">
		  	<img srcset="/images/header/zig-zag-form-white.png" alt="zig zag image">
			</picture>
		<?php endif; ?>
	</div>
	<!-- /.zig-zag-form -->
</div>
<!-- /.carousel flexslider -->
