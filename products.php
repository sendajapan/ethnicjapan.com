<?php include "assets/include/config.php"; ?>


<!DOCTYPE html>
<html lang="en">

<?php include ($base_path . "assets/include/head.php"); ?>

<body class="service-details-page">

  <?php include $base_path . "assets/include/header.php"; ?>


  <main class="main">

    <!-- Page Title -->
    <div class="page-title">

      <div class="title-wrapper">
        <h1><?= $language["product_page_title"]?></h1>
      </div>
    </div><!-- End Page Title -->


    <!-- Products Section -->
    <section id="products" class="skills section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2 style="font-size: 35px"><?= $language["promoting_organic"]; ?></h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
          <p class="mb-4"><?= $language["promoting_organic_paragraph"]; ?></p>
          <div class="page-title"  id="products">
            <h1><?= $language["featured_super_foods"]; ?></h1>
          </div>
        <div class="row mt-3 skills-animation justify-content-md-center align-items-stretch">
      
          <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/chia.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][0]["title"] ?></h4>
                <p><?= $language["super_foods"][0]["paragraph"] ?></p>
              </div>
            </div>
          </div>
      
          <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/hemp.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][1]["title"] ?></h4>
                <p><?= $language["super_foods"][1]["paragraph"] ?></p>
              </div>
            </div>
          </div>

        </div>

        <div class="row mt-3 skills-animation justify-content-md-center align-items-stretch">

            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/cocoa.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][2]["title"] ?></h4>
                <p><?= $language["super_foods"][2]["paragraph"] ?></p>
              </div>
            </div>
          </div>

            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/quinoa.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][3]["title"] ?></h4>
                <p><?= $language["super_foods"][3]["paragraph"] ?></p>
              </div>
            </div>
          </div>
          
        </div>
      
        <div class="row skills-animation justify-content-md-center mt-3 align-items-stretch">

            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/adzuki.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][4]["title"] ?></h4>
                <p><?= $language["super_foods"][4]["paragraph"] ?></p>
              </div>
            </div>
          </div>

            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/amaranth2.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][5]["title"] ?></h4>
                <p> <?= $language["super_foods"][5]["paragraph"] ?></p>
              </div>
            </div>
          </div>

        </div>

        <div class="row mt-3 skills-animation justify-content-md-center align-items-stretch">

            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/sesame.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][6]["title"] ?></h4> 
                <p><?= $language["super_foods"][6]["paragraph"] ?></p>
              </div>
            </div>
          </div>

            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/sacha.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][7]["title"] ?></h4> 
                <p><?= $language["super_foods"][7]["paragraph"] ?></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> <!--/ End Product Section -->

    

    <!-- Oils Section -->
	<section id="skills" class="skills section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
          <!-- Page Title -->
          <div class="page-title">
                  <h1><?= $language["promoted_oils"] ?></h1>
                  <p class="mb-4 mt-5"><?= $language["promoted_oils_paragraph"] ?></p>
          </div><!-- End Page Title -->
        <div class="row skills-animation justify-content-md-center align-items-stretch">
          <div class="col-12 col-md-12 col-sm-12 col-lg-4 " data-aos="fade-up" data-aos-delay="100">
              <div class="skill-box-header">
              <h4><?= $language["promoted_oils_list"][0]["title"] ?></h4>
              </div>
            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/categories/chia-oil.webp" alt="">
              <div class="info-right d-block text-start">
                <p><?= $language["promoted_oils_list"][0]["paragraph"] ?></p>
              </div>
            </div>
          </div>
            <div class="col-12 col-md-12 col-sm-12 col-lg-4 " data-aos="fade-up" data-aos-delay="100">
                <div class="skill-box-header">
                    <h4><?= $language["promoted_oils_list"][1]["title"] ?></h4>
                </div>
            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/categories/olive-oil.webp" alt="">
              <div class="info-right d-block text-start">
                <p><?= $language["promoted_oils_list"][1]["paragraph"] ?></p>
              </div>
            </div>
          </div>
            <div class="col-12 col-md-12 col-sm-12 col-lg-4 " data-aos="fade-up" data-aos-delay="100">
                <div class="skill-box-header">
                    <h4><?= $language["promoted_oils_list"][2]["title"] ?></h4>
                </div>
            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/categories/sacha-oil.webp" alt="">
              <div class="info-right d-block text-start">
                <p><?= $language["promoted_oils_list"][2]["paragraph"] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 <!--/ End Product Section -->
    
  </main>

  <?php include $base_path . "assets/include/footer.php"; ?>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=$base_url?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=$base_url?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?=$base_url?>assets/vendor/aos/aos.js"></script>
  <script src="<?=$base_url?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?=$base_url?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=$base_url?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?=$base_url?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=$base_url?>assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="<?=$base_url?>assets/js/main.js"></script>

</body>

</html>