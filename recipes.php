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
        <h2><?= $language["recipes_title"] ?></h2>
        <p><?= $language["recipes_subtitle"] ?></p>
      </div>
    
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row row-cols-1 row-cols-md-4 g-4 align-items-stretch" data-aos="fade-up" data-aos-delay="300">
    
          <div class="col d-flex">
            <a href="recipes_detail.php">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="assets/img/recipes/chia-pudding.jpg" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category"><?= $language["recipes"][0]["title"] ?></span>
                  <h3><?= $language["recipes"][0]["subtitle"] ?></h3>
                  <p><?= $language["recipes"][0]["paragraph"] ?></p>
                </div>
              </div>
            </a>
          </div>
    
          <div class="col d-flex">
            <a href="recipes_detail.php">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="assets/img/recipes/cacao-bites.jpg" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category"><?= $language["recipes"][1]["title"] ?></span>
                  <h3><?= $language["recipes"][1]["subtitle"] ?></h3>
                  <p><?= $language["recipes"][1]["paragraph"] ?></p>
                </div>
              </div>
            </a>
          </div>
    
          <div class="col d-flex">
            <a href="recipes_detail.php">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="assets/img/recipes/quinoa-salad.jpg" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category"><?= $language["recipes"][2]["title"] ?></span>
                  <h3><?= $language["recipes"][2]["subtitle"] ?></h3>
                  <p><?= $language["recipes"][2]["paragraph"] ?></p>
                </div>
              </div>
            </a>
          </div>
    
          <div class="col d-flex">
            <a href="recipes_detail.php">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="assets/img/recipes/sesame-brittle.jpg" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category"><?= $language["recipes"][3]["title"] ?></span>
                  <h3><?= $language["recipes"][3]["subtitle"] ?></h3>
                  <p><?= $language["recipes"][3]["paragraph"] ?></p>
                </div>
              </div>
            </a>
          </div>
    
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