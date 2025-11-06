<?php include "assets/include/config.php"; 
if($lang=='jp'){
		include $base_path . "assets/include/product_data_jp.php" ;
	}
	else{
		include $base_path . "assets/include/product_data.php" ;
	}
?>


<!DOCTYPE html>
<html lang="en">

<?php $title = $language['title_products'];
include ($base_path . "assets/include/head.php"); ?>

<body class="service-details-page">

  <?php include $base_path . "assets/include/header.php"; ?>


  <main class="main">

    <!-- Page Title -->
    <div class="page-title">

      <div class="title-wrapper">
        <h1><?= $language["product_page_title"]?></h1>
        <p class="mb-5"><?= $language["promoting_organic_paragraph"]; ?></p>
      </div>
    </div><!-- End Page Title -->


    <!-- Products Section -->
    <section id="products" class="skills section light-background">

      <!--<div class="container section-title" data-aos="fade-up">
        <h2 style="font-size: 35px"><?//= $language["promoting_organic"]; ?></h2>
      </div> End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="page-title"  id="products">
            <h1><?= $language["featured_super_foods"]; ?></h1>
          </div>

          <div class="row mt-3 skills-animation justify-content-md-center align-items-stretch">
            <?php 
            if (!empty($product_data)):
              $counter = 0;
              foreach ($product_data as $product): 
                $img = htmlspecialchars($product['feature_img'] ?? '', ENT_QUOTES, 'UTF-8');
                $title = htmlspecialchars($product['title'] ?? '', ENT_QUOTES, 'UTF-8');
                $paragraph = htmlspecialchars($product['content'] ?? '', ENT_QUOTES, 'UTF-8');
                $url = htmlspecialchars($product['url'] ?? '#', ENT_QUOTES, 'UTF-8');
                $delay = ($counter % 2 === 0) ? 100 : 200;
            ?>
              <div class="col-12 col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                <a href="<?= $url ?>" class="d-block h-100 text-decoration-none text-reset">
                  <div class="skill-box d-flex h-100">
                    <img src="<?= $img ?>" alt="<?= $title ?>">
                    <div class="info-right d-block text-start">
                      <h4><?= $title ?></h4>
                      <p><?= $paragraph ?></p>
                    </div>
                  </div>
                </a>
              </div>
            <?php 
                $counter++;
              endforeach; 
            else: ?>
              <div class="col-12">
                <p>No products found.</p>
              </div>
            <?php endif; ?>
          </div>
      </div>
    </section> 

    

    <!-- Oils Section 
	<section id="skills" class="skills section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
           Page Title 
          <div class="page-title">
                  <h1><?//= $language["promoted_oils"] ?></h1>
                  <p class="mb-4 mt-5"><?//= $language["promoted_oils_paragraph"] ?></p>
          </div> End Page Title 
        <div class="row skills-animation justify-content-md-center align-items-stretch">
          <div class="col-12 col-md-12 col-sm-12 col-lg-4 " data-aos="fade-up" data-aos-delay="100">
              <div class="skill-box-header">
              <h4><?//= $language["promoted_oils_list"][0]["title"] ?></h4>
              </div>
            <div class="skill-box h-100">
              <img src="<?//=$base_url?>assets/img/categories/chia-oil.webp" alt="">
              <div class="info-right d-block text-start">
                <p><?//= $language["promoted_oils_list"][0]["paragraph"] ?></p>
              </div>
            </div>
          </div>
            <div class="col-12 col-md-12 col-sm-12 col-lg-4 " data-aos="fade-up" data-aos-delay="100">
                <div class="skill-box-header">
                    <h4><?//= $language["promoted_oils_list"][1]["title"] ?></h4>
                </div>
            <div class="skill-box h-100">
              <img src="<?//=$base_url?>assets/img/categories/olive-oil.webp" alt="">
              <div class="info-right d-block text-start">
                <p><?//= $language["promoted_oils_list"][1]["paragraph"] ?></p>
              </div>
            </div>
          </div>
            <div class="col-12 col-md-12 col-sm-12 col-lg-4 " data-aos="fade-up" data-aos-delay="100">
                <div class="skill-box-header">
                    <h4><?//= $language["promoted_oils_list"][2]["title"] ?></h4>
                </div>
            <div class="skill-box h-100">
              <img src="<?//=$base_url?>assets/img/categories/sacha-oil.webp" alt="">
              <div class="info-right d-block text-start">
                <p><?//= $language["promoted_oils_list"][2]["paragraph"] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 / End Product Section -->
    
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