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
        <h1><?= $language["testimonial_title"] ?></h1>
        <p><?= $language["testimonial_paragraph"] ?></p>
      </div>
    </div><!-- End Page Title -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section light-background">

        <!-- Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="testimonials-slider swiperr init-swiperr">
    <div class="swiper-wrapperr">
      <div class="swiper-slidee mb-3">
        <div class="testimonial-item">
          <div class="row">
            <div class="col-lg-8">
              <h2><?= $language["testimonials"][0]["title"] ?></h2>
              <p><?= $language["testimonials"][0]["testimonial"] ?></p>

              <div class="profile d-flex align-items-center">
                <img src="<?=$base_url?>assets/img/person/person2.png" class="profile-img" alt="">
                <div class="profile-info">
                  <h3><?= $language["testimonials"][0]["name"] ?></h3>
                  <span><?= $language["testimonials"][0]["position"] ?></span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
              <div class="featured-img-wrapper">
                <img src="<?=$base_url?>assets/img/person/person2.png" class="featured-img" alt="">
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Testimonial Item -->

      <div class="swiper-slide mb-3">
        <div class="testimonial-item">
          <div class="row ">
            <div class="col-lg-4 d-none d-lg-block">
              <div class="featured-img-wrapper">
                <img src="<?=$base_url?>assets/img/person/person1.png" class="featured-img" alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <h2><?= $language["testimonials"][1]["title"] ?></h2>
              <p><?= $language["testimonials"][1]["testimonial"] ?></p>
              
              <div class="profile d-flex align-items-center">
                <img src="<?=$base_url?>assets/img/person/person1.png" class="profile-img" alt="">
                <div class="profile-info">
                  <h3><?= $language["testimonials"][1]["name"] ?></h3>
                  <span><?= $language["testimonials"][1]["position"] ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Testimonial Item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="row">
            <div class="col-lg-8">
              <h2><?= $language["testimonials"][2]["title"] ?></h2>
              <p><?= $language["testimonials"][2]["testimonial"] ?></p>
             
              <div class="profile d-flex align-items-center">
                <img src="<?=$base_url?>assets/img/person/person3.png" class="profile-img" alt="">
                <div class="profile-info">
                  <h3><?= $language["testimonials"][2]["name"] ?></h3>
                  <span><?= $language["testimonials"][2]["position"] ?></span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
              <div class="featured-img-wrapper">
                <img src="<?=$base_url?>assets/img/person/person3.png" class="featured-img" alt="">
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Testimonial Item -->

    </div>

  </div>

</div>

</section><!-- /Testimonials Section -->

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