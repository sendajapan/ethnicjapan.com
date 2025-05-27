<?php include "../assets/include/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php include $base_path . "assets/include/head.php"; ?>

<body class="starter-page-page">

  <?php include $base_path . "assets/include/header.php"; ?>

  <main class="main">

  <!-- Recipe Page -->
<section class="section light-background py-5">
  <div class="container">
    <div class="row align-items-center mb-5">
      <!-- Text Column -->
      <div class="col-md-6 text-center">
        <p class="text-muted mb-2" style="font-size: 1.5rem;">Recipe</p>
        <h2 class="fw-bold mb-3" style="font-size: 3rem;">Perfect Combination of Yogurt and Chia Seeds</h2>
        <p class="lead">This combination became known as Chia Pudding. It is easy to prepare and perfect for breakfast, snacks and even dessert. After preparing it, you can add fruits, granola, honey, whey and even a pinch of Olichia for an even more complete meal!</p>
      </div>
      <!-- Image Column -->
      <div class="col-md-6 text-end">
        <img src="<?=$base_url?>assets/img/recipes/yogurt.jpg" alt="Chia Yogurt" style="width: 400px; height: auto;" class="img-fluid rounded-4 shadow-sm">
      </div>
    </div>


    <!-- Recipe info -->
    <div class="row g-4 mb-4">
  <div class="col-6 col-md-3">
    <div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #B66A50">
      <h6 class="text-muted mb-1">Prep Time</h6>
      <p class="mb-0 fw-semibold">10 mins</p>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #B66A50">
      <h6 class="text-muted mb-1">Total Time</h6>
      <p class="mb-0 fw-semibold">8 hrs</p>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #B66A50">
      <h6 class="text-muted mb-1">Serving</h6>
      <p class="mb-0 fw-semibold">1 Person</p>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #B66A50">
      <h6 class="text-muted mb-1">Yield</h6>
      <p class="mb-0 fw-semibold">1 Medium Bowl</p>
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
              <li class="mb-1" style="list-style-type: circle;">Liquid Ingredient (can be yogurt, vegetable drink or coconut milk)</li>
              <li class="mb-1" style="list-style-type: circle;">Chia Seeds</li>
          </ul>

          <h4 class="fw-semibold mt-4 mb-3">Instructions</h4>
          <ol class="mb-3 colored">
              <li class="mb-1">To prepare, simply mix 4 parts liquid to 1 part seeds and refrigerate overnight.</li>
              <li class="mb-1">Serve with Berries or Dried Coconut</li>
          </ol>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-3">
        <div class="card p-4 rounded-4 shadow-sm border">
          <h5 class="fw-bold text-center mb-4 bg-white px-3 py-2 d-inline-block rounded-2 shadow-sm">Other Recipes</h5>

          <a href="<?=$base_url?>recipes/cocoa-chia-cookies">
            <div class="mb-3">
              <img src="<?=$base_url?>assets/img/recipes/cocoa_chia_cookies.webp" class="img-fluid rounded-3 mb-2" alt="Cocoa and Chia Cookies">
              <p class="mb-1 fw-semibold">Cocoa and Chia Cookies</p>
            </div>
          </a>

          <a href="<?=$base_url?>recipes/breakfast-bowl">
            <div>
              <img src="<?=$base_url?>assets/img/recipes/bowl.webp" class="img-fluid rounded-3 mb-2" alt="Breakfast Bowl">
              <p class="mb-1 fw-semibold">Breakfast Bowl</p>
            </div>
          </a>



        </div>
      </div>
    </div>
  </div>
</section>


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