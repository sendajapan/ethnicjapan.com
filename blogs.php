<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<?php include "assets/include/init.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php include "assets/include/head.php"; ?>

<body class="starter-page-page">

  <?php include "assets/include/header.php"; ?>

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
          <a href="blog_detail.php" class="portfolio-link d-block h-100 text-decoration-none text-reset">
            <div class="portfolio-image">
              <img src="assets/img/portfolio/organic.jpg" class="img-fluid" alt="" loading="lazy">
            </div>
            <div class="portfolio-content">
              <span class="category"><?= $language["insights_that_list"][0]["title"] ?></span>
              <h3><?= $language["insights_that_list"][0]["subtitle"] ?></h3>
              <p><?= $language["insights_that_list"][0]["paragraph"] ?></p>
            </div>
          </a>
        </div>
      </div><!-- End Blog Item -->
      
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-card h-100">
          <a href="#" class="portfolio-link d-block h-100 text-decoration-none text-reset">
            <div class="portfolio-image">
              <img src="assets/img/services/chia+cover.jpeg" class="img-fluid" alt="" loading="lazy">
            </div>
            <div class="portfolio-content">
              <span class="category"><?= $language["insights_that_list"][1]["title"] ?></span>
              <h3><?= $language["insights_that_list"][1]["subtitle"] ?></h3>
              <p><?= $language["insights_that_list"][1]["paragraph"] ?></p>
            </div>
          </a>
        </div>
      </div><!-- End Blog Item -->
      
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-card h-100">
          <a href="#" class="portfolio-link d-block h-100 text-decoration-none text-reset">
            <div class="portfolio-image">
              <img src="assets/img/portfolio/business.webp" class="img-fluid" alt="" loading="lazy">
            </div>
            <div class="portfolio-content">
              <span class="category"><?= $language["insights_that_list"][2]["title"] ?></span>
              <h3><?= $language["insights_that_list"][2]["subtitle"] ?></h3>
              <p><?= $language["insights_that_list"][2]["paragraph"] ?></p>
            </div>
          </a>
        </div>
      </div><!-- End Blog Item -->
      
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-card h-100">
          <a href="#" class="portfolio-link d-block h-100 text-decoration-none text-reset">
            <div class="portfolio-image">
              <img src="assets/img/portfolio/wholesale.jpg" class="img-fluid" alt="" loading="lazy">
            </div>
            <div class="portfolio-content">
              <span class="category"><?= $language["insights_that_list"][3]["title"] ?></span>
              <h3><?= $language["insights_that_list"][3]["subtitle"] ?></h3>
              <p><?= $language["insights_that_list"][3]["paragraph"] ?></p>
            </div>
          </a>
        </div>
      </div><!-- End Blog Item -->


    </div>

  </div>

  </section><!-- /Blog Section -->

    

  </main>

  <?php include "assets/include/footer.php"; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>