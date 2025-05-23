<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<?php include "assets/include/init.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php include "assets/include/head.php"; ?>

<body class="starter-page-page">

  <?php include "assets/include/header.php"; ?>

  <main class="main">

  <!-- Recipe Page -->
<section class="section light-background py-5">
  <div class="container">
    <div class="row align-items-center mb-5">
      <!-- Text Column -->
      <div class="col-md-6 text-center">
        <p class="text-muted mb-2" style="font-size: 1.5rem;"><?= $language["recipes_title"] ?></p>
        <h2 class="fw-bold mb-3" style="font-size: 3rem;"><?= $language["recipes"][0]["subtitle"] ?></h2>
        <p class="lead"><?= $language["recipes"][0]["paragraph"] ?></p>
      </div>
      <!-- Image Column -->
      <div class="col-md-6 text-end">
        <img src="assets/img/recipes/chia-pudding.jpg" alt="Chia Pudding" style="width: 400px; height: auto;" class="img-fluid rounded-4 shadow-sm">
      </div>
    </div>


    <!-- Recipe info -->
    <div class="row g-4 mb-4">
  <div class="col-6 col-md-3">
    <div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #4682B4;">
      <h6 class="text-muted mb-1"><?= $language["recipe_detail_time"][0]["title"] ?></h6>
      <p class="mb-0 fw-semibold"><?= $language["recipe_detail_time"][0]["info"] ?></p>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #4682B4;">
      <h6 class="text-muted mb-1"><?= $language["recipe_detail_time"][1]["title"] ?></h6>
      <p class="mb-0 fw-semibold"><?= $language["recipe_detail_time"][1]["info"] ?></p>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #4682B4;">
      <h6 class="text-muted mb-1"><?= $language["recipe_detail_time"][2]["title"] ?></h6>
      <p class="mb-0 fw-semibold"><?= $language["recipe_detail_time"][2]["info"] ?></p>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #4682B4;">
      <h6 class="text-muted mb-1"><?= $language["recipe_detail_time"][3]["title"] ?></h6>
      <p class="mb-0 fw-semibold"><?= $language["recipe_detail_time"][3]["info"] ?></p>
    </div>
  </div>
</div>


    <!-- Recipe Content -->
    <div class="row">
      <!-- Main Content -->
      <div class="col-lg-9 mb-4">
        <div class="bg-white p-4 rounded-4 shadow-sm" style="font-size: 1.1rem;">
          <h4 class="fw-semibold mb-3"><?= $language["recipe_detail_ingredient_title"]?></h4>
          <ul class="mb-5 colored">

            <?php foreach ($language["recipe_detail_ingredients"] as $item): ?>
              <li class="mb-1" style="list-style-type: circle;"><?= $item ?></li>
            <?php endforeach; ?>
            
          </ul>

          <h4 class="fw-semibold mt-4 mb-3"><?= $language["recipe_detail_instruction_title"]?></h4>
          <ol class="mb-3 colored">

            <?php foreach ($language["recipe_detail_instructions"] as $item): ?>
              <li class="mb-1"><?= $item ?></li>
            <?php endforeach; ?>
            
          </ol>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-3">
        <div class="card p-4 rounded-4 shadow-sm border">
          <h5 class="fw-bold text-center mb-4 bg-white px-3 py-2 d-inline-block rounded-2 shadow-sm">Other Recipes</h5>

          <a href="recipes_detail.php">
            <div class="mb-3">
              <img src="assets/img/recipes/sesame-brittle.jpg" class="img-fluid rounded-3 mb-2" alt="Banana Bread">
              <p class="mb-1 fw-semibold"><?= $language["recipes"][3]["title"] ?></p>
              <small class="text-muted">April 10, 2025</small>
            </div>
          </a>

          <a href="recipes_detail.php">
            <div>
              <img src="assets/img/recipes/quinoa-salad.jpg" class="img-fluid rounded-3 mb-2" alt="Quinoa Salad">
              <p class="mb-1 fw-semibold"><?= $language["recipes"][2]["subtitle"] ?></p>
              <small class="text-muted">May 2, 2025</small>
            </div>
          </a>



        </div>
      </div>
    </div>
  </div>
</section>


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