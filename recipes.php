<?php 
	include "assets/include/config.php"; 
	if($lang=='jp'){
		include $base_path . "assets/include/recipe_data_jp.php" ;
	}
	else{
		include $base_path . "assets/include/recipe_data.php" ;
	}
?>

<!DOCTYPE html>
<html lang="en">
	
	<?php  $title = $language['title_recipes'];
	include $base_path . "assets/include/head.php"; ?>
	
	<body class="starter-page-page">
		
		<?php include $base_path . "assets/include/header.php"; ?>
		
		<main class="main">
			
			<!-- Recipe Section -->
			<section id="portfolio" class="portfolio section">
				
				<!-- Section Title -->
				<div class="container section-title" data-aos="fade-up">
					<h2><?= $language["recipes_title"] ?></h2>
					<p><?= $language["recipes_subtitle"] ?></p>
				</div>
				
				<div class="container" data-aos="fade-up" data-aos-delay="100">
					<div class="row row-cols-1 row-cols-md-4 g-4 align-items-stretch" data-aos="fade-up" data-aos-delay="300">
						
						<?php foreach ($recipe_data as $key => $recipe): ?>
						<div class="col d-flex">
							<a href="<?= $recipe['url']; ?>">
								<div class="portfolio-card d-flex flex-column h-100 w-100">
									<div class="portfolio-image">
										<img src="<?= $recipe['feature_img']; ?>" class="img-fluid" alt="" loading="lazy">
									</div>
									<div class="portfolio-content">
										<span class="category"><?= $recipe['category']; ?></span>
										<h3><?= $recipe['title']; ?></h3>
										<p><?= $recipe['sub']; ?></p>
									</div>
								</div>
							</a>
						</div>
						<?php endforeach; ?>
						
					</div>
				</div>
			</section><!-- /Recipe Section -->
			
		</main>
		
		<?php include $base_path . "assets/include/footer.php"; ?>
		
		<!-- Scroll Top -->
		<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
		
		<!-- Vendor JS Files 
			<script src="<?//=$base_url?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="<?//=$base_url?>assets/vendor/php-email-form/validate.js"></script>
			<script src="<?//=$base_url?>assets/vendor/waypoints/noframework.waypoints.js"></script>
			<script src="<?//=$base_url?>assets/vendor/glightbox/js/glightbox.min.js"></script>
			<script src="<?//=$base_url?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
			<script src="<?//=$base_url?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
		<script src="<?//=$base_url?>assets/vendor/swiper/swiper-bundle.min.js"></script>-->
		<script src="<?=$base_url?>assets/vendor/aos/aos.js"></script>
		
		<!-- Main JS File -->
		<script src="<?=$base_url?>assets/js/main.js"></script>
		
	</body>
	
</html>