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

            <?php 
				
				$query_string =  $_SERVER['QUERY_STRING'];
				$recipe = $recipe_data[$query_string];
				if($recipe['title']!=''){
					
				?>
	
	<?php $title = $recipe['title'] . $language["title_blog"];
	include $base_path . "assets/include/head.php"; ?>
	
	<body class="starter-page-page">
		
		<?php include $base_path . "assets/include/header.php"; ?>
		
		<main class="main">
			
				<!-- Recipe Page -->
				<section class="section light-background py-5">
					<div class="container">
						<div class="row align-items-center mb-5">
							<!-- Text Column -->
							
							
							<div class="col-md-6 text-center">
								<p class="text-muted mb-2" style="font-size: 1.5rem;"><?= $language["recipes_title"] ?></p>
								<h2 class="fw-bold mb-3" style="font-size: 3rem;"><?= $recipe['title']; ?></h2>
								<p class="lead"><?= $recipe['content']; ?></p>
							</div>
							<!-- Image Column -->
							<div class="col-md-6 text-end">
								<img src="<?= $recipe['feature_img']; ?>" alt="Chia Pudding" style="width: 400px; height: auto;" class="img-fluid rounded-4 shadow-sm">
							</div>
						</div>
						
						
						<!-- Recipe info -->
						<div class="row g-4 mb-4">
							<div class="col-6 col-md-3">
								<div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #B66A50">
									<h6 class="text-muted mb-1">Prep Time</h6>
									<p class="mb-0 fw-semibold"><?= $recipe['prep_time']; ?></p>
								</div>
							</div>
							<div class="col-6 col-md-3">
								<div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #B66A50">
									<h6 class="text-muted mb-1">Total Time</h6>
									<p class="mb-0 fw-semibold"><?= $recipe['total_time']; ?></p>
								</div>
							</div>
							<div class="col-6 col-md-3">
								<div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #B66A50">
									<h6 class="text-muted mb-1">Serving</h6>
									<p class="mb-0 fw-semibold"><?= $recipe['serving']; ?></p>
								</div>
							</div>
							<div class="col-6 col-md-3">
								<div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #B66A50">
									<h6 class="text-muted mb-1">Yield</h6>
									<p class="mb-0 fw-semibold"><?= $recipe['yield']; ?></p>
								</div>
							</div>
						</div>
						
						
						<!-- Recipe Content -->
						<div class="row">
							<!-- Main Content -->
							<div class="col-lg-9 mb-4">
								<div class="bg-white p-4 rounded-4 shadow-sm" style="font-size: 1.1rem;">
									<h4 class="fw-semibold mb-3">Ingredients</h4>
									<ul class="mb-5 colored">
										
										<?php foreach ($recipe['ingredients'] as $ingredient) { ?>
											<li class="mb-1" style="list-style-type: circle;"><?= $ingredient ?></li>
										<?php  } ?>
										
									</ul>
									
									<h4 class="fw-semibold mt-4 mb-3">Instructions</h4>
									<ol class="mb-3 colored text-wrap">
										
										<?php foreach ($recipe['instructions'] as $instructions) { ?>
											<li class="mb-1"><?= $instructions ?></li>
										<?php  } ?>
										
									</ol>
								</div>
							</div>
							
							<!-- Sidebar -->
							<div class="col-lg-3">
								<div class="card p-4 rounded-4 shadow-sm border">
									<h5 class="fw-bold text-center mb-4 bg-white px-3 py-2 d-inline-block rounded-2 shadow-sm">Other Recipes</h5>
									
									

							<?php 

							shuffle($recipe_data);
							$list_show = 3;
							foreach($recipe_data as $r){ $list_show--; ?>
									<a href="<?=$r['url']?>">
										<div class="mb-3">
											<img src="<?=$r['feature_img']?>" class="img-fluid rounded-3 mb-2" alt="<?=$r['title']?>">
											<p class="mb-1 fw-semibold"><?=$r['title']?></p>
										</div>
									</a>
							<?php if($list_show<=0){break;} } ?>
						</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php 
					}else{
				?>
				<section class="section light-background py-5">
					<div class="container">
						<div class="row align-items-center mb-5">
							<div class="col-md-6 text-center">
								<h2 class="fw-bold mb-3" style="font-size: 3rem;">404 - RECIPE NOT FOUND</h2>
							</div>
						</div>
						<div class="row align-items-top mb-5">
							
							<?php 

							shuffle($recipe_data);
							$list_show = 4;
							foreach($recipe_data as $r){ $list_show--; ?>
								

								
								<a class="col-12 col-sm-12 col-md-6 col-lg-3" href="<?=$r['url']?>">
									<div class="mb-3">
										<img src="<?=$r['feature_img']?>" class="img-fluid rounded-3 mb-2" alt="Cocoa and Chia Cookies">
										<p class="mb-1 fw-semibold"><?=$r['title']?></p>
									</div>
								</a>
    
    

								
							<?php if($list_show<=0){break;} } ?>

						</div>
						
						
					</div>
				</section>
				
				<?php 
				}
			?>
			
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