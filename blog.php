<?php include "assets/include/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php include $base_path . "assets/include/head.php"; ?>

<body class="starter-page-page">

  <?php include $base_path . "assets/include/header.php"; ?>

  <main class="main">

<!-- Blog Section -->
  <section id="portfolio" class="portfolio section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2><?= $language["blogs_title"] ?></h2>
    <p><?= $language["insights_that_paragraph"] ?></p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-4 align-items-stretch" data-aos="fade-up" data-aos-delay="300">

      <div class="col-lg-6 col-md-6">
        <div class="portfolio-card h-100">
          <a href="<?=$base_url?>blogs/chia-recipe" class="portfolio-link d-block h-100 text-decoration-none text-reset">
            <div class="portfolio-image">
              <img src="<?=$base_url?>assets/img/blog/blog1.webp" class="img-fluid" alt="" loading="lazy">
            </div>
            <div class="portfolio-content">
              <span class="category">Recipes</span>
              <h3>Learn How to Make a Delicious Vegan Chia Pudding with Fruit!</h3>
              <p>10/13/2022</p>
            </div>
          </a>
        </div>
      </div><!-- End Blog Item -->
      
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-card h-100">
          <a href="<?=$base_url?>blogs/how-to-chia" class="portfolio-link d-block h-100 text-decoration-none text-reset">
            <div class="portfolio-image">
              <img src="<?=$base_url?>assets/img/blog/blog2.webp" class="img-fluid" alt="" loading="lazy">
            </div>
            <div class="portfolio-content">
              <span class="category">Benefits</span>
              <h3>Do You Know How to Consume Chia Correctly?</h3>
              <p>10/13/2022</p>
            </div>
          </a>
        </div>
      </div><!-- End Blog Item -->
      
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-card h-100">
          <a href="<?=$base_url?>blogs/benefits-omega" class="portfolio-link d-block h-100 text-decoration-none text-reset">
            <div class="portfolio-image">
              <img src="<?=$base_url?>assets/img/blog/blog3.webp" class="img-fluid" alt="" loading="lazy">
            </div>
            <div class="portfolio-content">
              <span class="category">Benefits</span>
              <h3>Benefits of Omega 3</h3>
              <p>10/13/2022</p>
            </div>
          </a>
        </div>
      </div><!-- End Blog Item -->
      
      <!--<div class="col-lg-6 col-md-6">
        <div class="portfolio-card h-100">
          <a href="#" class="portfolio-link d-block h-100 text-decoration-none text-reset">
            <div class="portfolio-image">
              <img src="<?=$base_url?>assets/img/portfolio/wholesale.jpg" class="img-fluid" alt="" loading="lazy">
            </div>
            <div class="portfolio-content">
              <span class="category"></span>
              <h3></h3>
              <p></p>
            </div>
          </a>
        </div>
      </div> End Blog Item -->


    </div>

  </div>

  </section><!-- /Blog Section -->

    

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