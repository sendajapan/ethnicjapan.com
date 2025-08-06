<?php 
	include "assets/include/config.php"; 
	if($lang=='jp'){
		include $base_path . "assets/include/product_data_jp.php" ;
	}
	else{
		include $base_path . "assets/include/product_data.php" ;
	}
?>

<!DOCTYPE html>
<html lang="en">

<?php 
				
		$query_string =  $_SERVER['QUERY_STRING'];
		$product = $product_data[$query_string];
		if($product['title']!=''){
			
		?>

<?php $title = $product['title'] . $language["title_blog"];
include $base_path . "assets/include/head.php"; ?>

<body class="starter-page-page">

  <?php include $base_path . "assets/include/header.php"; ?>

  <main class="main">

        <!-- Product Section -->
          <section id="about" class="about section light-background py-5">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
              <div class="row align-items-start">
                
                <!-- Column 1: Kicker, Title, Content -->
                <div class="col-lg-6 mb-4" data-aos="fade-left" data-aos-delay="300">
				  <div class="title-kicker text-center">
                    <p class="lead mb-3"><?= $product['kicker']; ?></p>
                    <h2 class="mb-4 fw-bold"><?= $product['title']; ?></h2>
				  </div>
                  <div class="card border-0 p-4 rounded-2 h-100">
                    <p class="fs-5"><?= $product['content']; ?></p>
                  </div>
                </div>
          
                <!-- Column 2: Image -->
                <div class="col-lg-4 mb-4" data-aos="fade-right" data-aos-delay="200">
                  <div class="about-image text-center">
                    <img src="<?= $product['feature_img']; ?>" alt="<?= $product['title']; ?>" class="img-fluid">
                  </div>
                </div>
          
                <!-- Column 3: Sidebar -->
                <div class="col-lg-2 mb-4">
                  <div class="card p-3 rounded-4 shadow-sm border">
                    <h6 class="fw-bold text-center mb-4 bg-white px-3 py-2 d-inline-block rounded-2 shadow-sm small">Other Products</h6>
                    <?php 
                      shuffle($product_data);
                      $list_show = 2;
                      foreach($product_data as $p){ $list_show--; ?>
                        <a href="<?= $p['url'] ?>">
                          <div class="mb-1">
                            <img src="<?= $p['feature_img'] ?>" class="img-fluid rounded-3" alt="<?= $p['title'] ?>">
                            <p class="fw-semibold text-center"><?= $p['title'] ?></p>
                          </div>
                        </a>
                    <?php if($list_show <= 0){ break; } } ?>
                  </div>
                </div>
          
              </div> <!-- .row -->
            </div> <!-- .container -->
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
  <script src="<?//=$pase_url?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?//=$pase_url?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?//=$pase_url?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?//=$pase_url?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?//=$pase_url?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?//=$pase_url?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?//=$pase_url?>assets/vendor/swiper/swiper-bundle.min.js"></script>-->
  <script src="<?=$base_url?>assets/vendor/aos/aos.js"></script>

  <!-- Main JS File -->
  <script src="<?=$base_url?>assets/js/main.js"></script>

</body>

</html>