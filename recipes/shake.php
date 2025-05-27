<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<?php include "../assets/include/init.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php include "../assets/include/head.php"; ?>

<body class="starter-page-page">

  <?php include "../assets/include/header.php"; ?>

  <main class="main">

  <!-- Recipe Page -->
<section class="section light-background py-5">
  <div class="container">
    <div class="row align-items-center mb-5">
      <!-- Text Column -->
      <div class="col-md-6 text-center">
        <p class="text-muted mb-2" style="font-size: 1.5rem;">Recipe</p>
        <h2 class="fw-bold mb-3" style="font-size: 3rem;">Pre-workout Shake</h2>
        <p class="lead">Healthy, quick and easy shake to make for you to consume before training or at any time of the day.</p>
      </div>
      <!-- Image Column -->
      <div class="col-md-6 text-end">
        <img src="../assets/img/recipes/shake.webp" alt="Chia Pudding" style="width: 400px; height: auto;" class="img-fluid rounded-4 shadow-sm">
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
      <p class="mb-0 fw-semibold">10 mins</p>
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
      <p class="mb-0 fw-semibold">1 Glass</p>
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
              <li class="mb-1" style="list-style-type: circle;">2 tbsp of Whole Peanut Butter</li>
              <li class="mb-1" style="list-style-type: circle;">3 tbsp of our Chia Flour</li>
              <li class="mb-1" style="list-style-type: circle;">2 Medium Bananas</li>
              <li class="mb-1" style="list-style-type: circle;">400 ml of Skimmed Milk</li>
              <li class="mb-1" style="list-style-type: circle;">1 tsp of Cinnamon Powder</li>
              <li class="mb-1" style="list-style-type: circle;">2 tsp of Instant Coffee</li>
          </ul>

          <h4 class="fw-semibold mt-4 mb-3">Instructions</h4>
          <ol class="mb-3 colored">
              <li class="mb-1">Blend all the ingredients in a blender until the mixture is smooth and drink immediately. If you prefer, add some ice cubes to make the drink more refreshing.</li>
          </ol>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-3">
        <div class="card p-4 rounded-4 shadow-sm border">
          <h5 class="fw-bold text-center mb-4 bg-white px-3 py-2 d-inline-block rounded-2 shadow-sm">Other Recipes</h5>

          <a href="blueberry_chia_juice.php">
            <div class="mb-3">
              <img src="../assets/img/recipes/juice.webp" class="img-fluid rounded-3 mb-2" alt="Juice">
              <p class="mb-1 fw-semibold">Blueberry and Chia Juice</p>
            </div>
          </a>

          <a href="breakfast_bowl.php">
            <div>
              <img src="../assets/img/recipes/bowl.webp" class="img-fluid rounded-3 mb-2" alt="Breakfast Bowl">
              <p class="mb-1 fw-semibold">Breakfast Bowl</p>
            </div>
          </a>



        </div>
      </div>
    </div>
  </div>
</section>


  </main>

  <?php include "../assets/include/footer.php"; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>