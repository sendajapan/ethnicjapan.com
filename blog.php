<?php include "assets/include/config.php"; 
include $base_path . "assets/include/blog_data.php" ?>

<!DOCTYPE html>
<html lang="en">

<?php include $base_path . "assets/include/head.php"; ?>

<body class="starter-page-page">

  <?php include $base_path . "assets/include/header.php"; ?>

  <main class="main">

    <?php 
				
		$query_string =  $_SERVER['QUERY_STRING'];
		$blog = $blog_data[$query_string];
		if($blog['title']!=''){
			
		?>

        <!-- Blog Section -->
          <section id="about" class="about section light-background py-5">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
          
              <!-- Header Row -->
              <div class="row align-items-center mb-5">
                <div class="col-md-5" data-aos="fade-left" data-aos-delay="300">
                  <div class="about-content">
                    <p class="lead mb-3">How To</p>
                    <h2 class="mb-4"><?= $blog['title']; ?></h2>
                    <div class="info-item">
                      <p><?= $blog['date']; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 position-relative" data-aos="fade-right" data-aos-delay="200">
                  <div class="about-image text-center">
                    <img src="<?= $blog['feature_img']; ?>" alt="Profile Image" class="img-fluid rounded-4 shadow-sm">
                  </div>
                </div>
              </div>
          
              <!-- Main Content + Sidebar -->
              <div class="row">
                
                <!-- Blog Main Content -->
                <div class="col-12 col-lg-9 mb-4">
                  <div class="card border-0 p-4 rounded-2 h-100">
                    <p><?= $blog['content']; ?></p>
                  </div>
                </div>
          
                <!-- Sidebar -->
				<div class="col-lg-3">
					<div class="card p-4 rounded-4 shadow-sm border">
						<h5 class="fw-bold text-center mb-4 bg-white px-3 py-2 d-inline-block rounded-2 shadow-sm">Other Recipes</h5>
						
				            <?php 
							shuffle($blog_data);
							$list_show = 2;
							foreach($blog_data as $b){ $list_show--; ?>
									<a href="<?=$b['url']?>">
										<div class="mb-3">
											<img src="<?=$b['feature_img']?>" class="img-fluid rounded-3 mb-2" alt="<?=$b['title']?>">
											<p class="mb-1 fw-semibold"><?=$b['title']?></p>
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

							shuffle($blog_data);
							$list_show = 4;
							foreach($blog_data as $b){ $list_show--; ?>
								

								
								<a class="col-12 col-sm-12 col-md-6 col-lg-3" href="<?=$b['url']?>">
									<div class="mb-3">
										<img src="<?=$b['feature_img']?>" class="img-fluid rounded-3 mb-2" alt="<?=$b['title']?>">
										<p class="mb-1 fw-semibold"><?=$b['title']?></p>
									</div>
								</a>
    
    

								
							<?php if($list_show<=0){break;} } ?>

						</div>
						
						
					</div>
				</section>
				
				<?php 
				}
			?>
              </div>
            </div>
          </section>
      
          

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