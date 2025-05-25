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
          <a href="blog_detail/chia_recipe.php" class="portfolio-link d-block h-100 text-decoration-none text-reset">
            <div class="portfolio-image">
              <img src="assets/img/blog/blog1.webp" class="img-fluid" alt="" loading="lazy">
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
          <a href="blog_detail/how_to_chia.php" class="portfolio-link d-block h-100 text-decoration-none text-reset">
            <div class="portfolio-image">
              <img src="assets/img/blog/blog2.webp" class="img-fluid" alt="" loading="lazy">
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
          <a href="blog_detail/benefits_omega.php" class="portfolio-link d-block h-100 text-decoration-none text-reset">
            <div class="portfolio-image">
              <img src="assets/img/blog/blog3.webp" class="img-fluid" alt="" loading="lazy">
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
              <img src="assets/img/portfolio/wholesale.jpg" class="img-fluid" alt="" loading="lazy">
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