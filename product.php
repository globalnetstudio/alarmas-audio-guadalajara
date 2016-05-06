<?php include('./_partials/api.php'); ?>

<?php if(!isset($_GET['producto']) && !$_GET['producto']) : ?>

	<?php header('Location: /alarmas'); exit(); ?>

<?php else:	?>

<?php

	require_once('productosArray.php');
	$product = $products[$_GET['producto']];
	$pageTitle= $product['name']; $page = 'alarms';

?>

<?php include_once('./_partials/head.php'); ?>

	<h1 class="hide">Alarmas y Audio Guadalajara</h1>

	<?php include('./_partials/header.php'); ?>

	<?php include('./_partials/carousel.php'); ?>

	<!-- .product-content -->
	<section class="product-content">


	<h2><?php echo $product['name']; ?></h2>

	<!-- .wrapper -->
	<div class="wrapper">

		<!-- .product-image -->	
		<div class="product-image">
			<img src="/images/alarms/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
		</div>
		<!-- /.product-image -->

		<!-- .description-features -->		
		<div class="description-features">

			<!-- .description -->
			<div class="description">
			
				<h3>Descripción</h3>
				
				<?php echo $product['description']; ?>
				
			</div>
			<!-- /.description -->
			
				<?php if ($product['features'] !== '') :  ?>
			
				<!-- .features -->
				<div class="features">
					<h3>Características</h3>
					
					<?php echo $product['features']; ?>
				</div>
				<!-- /.features -->
			
			<?php endif; ?>
		</div>
		<!-- /.description-features -->

		<div class="back-btn"><a href="/alarmas">Volver</a></div>
	</div>
	<!-- /.wrapper -->

<?php endif; ?>

	</section>
	<!-- /.product-content -->

<?php include_once('./_partials/footer.php'); ?>	