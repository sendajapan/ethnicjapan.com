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
        <h2 class="fw-bold mb-3" style="font-size: 3rem;">Ratatouille with Olichia with natural Basil aroma</h2>
        <p class="lead">Ratatouille is a classic French dish that became very famous thanks to the film of the same name, which tells the story of a little mouse who is a great cook. And that's not all; this dish deserves its fame, because in addition to being healthy, it's delicious. But as everything good can be improved, a touch of Basil Olichia will bring much more flavor and health to your dish. Check out the recipe here!</p>
      </div>
      <!-- Image Column -->
      <div class="col-md-6 text-end">
        <img src="../assets/img/recipes/ratatouille.jpeg" alt="Ratatouille" style="width: 400px; height: auto;" class="img-fluid rounded-4 shadow-sm">
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
      <p class="mb-0 fw-semibold">1 hr</p>
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
      <p class="mb-0 fw-semibold">1 Skillet</p>
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
              <li class="mb-1" style="list-style-type: circle;">1 Zucchini, Sliced</li>
              <li class="mb-1" style="list-style-type: circle;">​​1 Eggplant, Sliced</li>
              <li class="mb-1" style="list-style-type: circle;">2 Tomatoes, Sliced </li>
              <li class="mb-1" style="list-style-type: circle;">Fresh Tomato Sauce of Your Choice</li>
              <li class="mb-1" style="list-style-type: circle;">Salt and Black Pepper to Taste</li>
              <li class="mb-1" style="list-style-type: circle;">Basil Olichia for Drizzling</li>
          </ul>

          <h4 class="fw-semibold mt-4 mb-3">Instructions</h4>
          <ol class="mb-3 colored">
              <li class="mb-1">Place a layer of sauce in a baking dish.</li>
              <li class="mb-1">Alternately place the tomato, eggplant and zucchini slices.</li>
              <li class="mb-1">Season with salt and pepper and cover with parchment paper the size of the baking dish, forming a lid.</li>
              <li class="mb-1">Bake at 200°C for approximately 40 minutes or until the vegetables are soft.</li>
              <li class="mb-1">After removing from the oven, remove the parchment paper and drizzle your Basil Olichia. Now just enjoy!</li>
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

          <a href="soup.php">
            <div>
              <img src="../assets/img/recipes/soup.jpg" class="img-fluid rounded-3 mb-2" alt="Soup">
              <p class="mb-1 fw-semibold">Creamy Soup of Sprouted Lentils, Tomato and Olive Oil</p>
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