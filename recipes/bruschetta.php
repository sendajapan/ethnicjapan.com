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
        <h2 class="fw-bold mb-3" style="font-size: 3rem;">Bruschetta with Garlic Olichia</h2>
        <p class="lead">Bruschetta is an Italian appetizer made with a slice of rustic bread, made with dark, thick flour, with a hard crust, toasted on the grill, rubbed with garlic, brushed with plenty of olive oil and sprinkled with salt and occasionally black pepper. This is a typical Italian recipe, which has a familiar and welcoming flavor.</p>
      </div>
      <!-- Image Column -->
      <div class="col-md-6 text-end">
        <img src="../assets/img/recipes/bruschetta.jpg" alt="Bruschetta" style="width: 400px; height: auto;" class="img-fluid rounded-4 shadow-sm">
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
      <p class="mb-0 fw-semibold">2 Persons</p>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #B66A50">
      <h6 class="text-muted mb-1">Yield</h6>
      <p class="mb-0 fw-semibold">12 Bread Slices</p>
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
              <li class="mb-1" style="list-style-type: circle;">12 Slices of Italian Bread or Baguette</li>
              <li class="mb-1" style="list-style-type: circle;">10 Cherry Tomatoes</li>
              <li class="mb-1" style="list-style-type: circle;">Garlic Oil</li>
              <li class="mb-1" style="list-style-type: circle;">Salt to Taste</li>
              <li class="mb-1" style="list-style-type: circle;">Basil Leaves (optional)</li>
              <li class="mb-1" style="list-style-type: circle;">Buffalo mozzarella slices (optional)</li>
          </ul>

          <h4 class="fw-semibold mt-4 mb-3">Instructions</h4>
          <ol class="mb-3 colored">
              <li class="mb-1">In a bowl, add the tomatoes cut in half, the oregano and the salt, mix well and bake until golden.</li>
              <li class="mb-1">Place slices of buffalo mozzarella on the breads (optional).</li>
              <li class="mb-1">On top of each bread, place a little of the mixture, basil leaves and finish with Garlic Oil.</li>
          </ol>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-3">
        <div class="card p-4 rounded-4 shadow-sm border">
          <h5 class="fw-bold text-center mb-4 bg-white px-3 py-2 d-inline-block rounded-2 shadow-sm">Other Recipes</h5>

          <a href="arugula_pesto.php">
            <div class="mb-3">
              <img src="../assets/img/recipes/arugula_pesto.webp" class="img-fluid rounded-3 mb-2" alt="Arugula Pesto">
              <p class="mb-1 fw-semibold">Arugula Pesto with Gorgonzola</p>
            </div>
          </a>

          <a href="focaccia.php">
            <div>
              <img src="../assets/img/recipes/focaccia.jpg" class="img-fluid rounded-3 mb-2" alt="Focaccia">
              <p class="mb-1 fw-semibold">Focaccia with Garlic Oil</p>
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