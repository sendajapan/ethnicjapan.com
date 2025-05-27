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
        <h2 class="fw-bold mb-3" style="font-size: 3rem;">Arugula Pesto with Gorgonzola</h2>
        <p class="lead">Arugula pesto is a tasty, slightly spicy sauce. There are different ways to prepare it, the traditional version is made with arugula leaves, toasted nuts, cheese, olive oil and lemon juice, a nutritious and easy-to-make mixture.</p>
      </div>
      <!-- Image Column -->
      <div class="col-md-6 text-end">
        <img src="../assets/img/recipes/arugula_pesto.webp" alt="Arugula Pesto" style="width: 400px; height: auto;" class="img-fluid rounded-4 shadow-sm">
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
      <p class="mb-0 fw-semibold">5 People</p>
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
              <li class="mb-1" style="list-style-type: circle;">1 Bunch of Washed Arugula</li>
              <li class="mb-1" style="list-style-type: circle;">2 tbsp Chia Seeds</li>
              <li class="mb-1" style="list-style-type: circle;">1 ½ cups of Crumbled Gorgonzola Cheese</li>
              <li class="mb-1" style="list-style-type: circle;">½ cup of Toasted, Peeled Almonds</li>
              <li class="mb-1" style="list-style-type: circle;">½ clove of Garlic</li>
              <li class="mb-1" style="list-style-type: circle;">2 cups of Olichia</li>
              <li class="mb-1" style="list-style-type: circle;">Salt and Pepper to Taste</li>
              <li class="mb-1" style="list-style-type: circle;">Water</li>
              <li class="mb-1" style="list-style-type: circle;">Ice cubes</li>
          </ul>

          <h4 class="fw-semibold mt-4 mb-3">Instructions</h4>
          <ol class="mb-3 colored">
              <li class="mb-1">Bring a medium pot of water to a boil and fill a bowl with ice and water. Then place the arugula leaves in the boiling water, count to 15 seconds and remove them with a slotted spoon and place them in the ice water (this process is called blanching and guarantees a milder flavor and a very green pesto)</li>
              <li class="mb-1">Drain the leaves, squeeze out the excess water and place them in the food processor.</li>
              <li class="mb-1">In the food processor, along with the leaves, place the half clove of garlic and half of the Olichia. Pulse for 45 seconds or until the leaves are in small pieces, but not processed like a puree.</li>
              <li class="mb-1">Add the almonds and pulse three or four more times so that they are in small pieces.</li>
              <li class="mb-1">Transfer to a bowl, add the crumbled cheese and the remaining Olichia, a pinch of salt and pepper. Mix to combine everything.</li>
              <li class="mb-1" style="list-style: none;">Note: the pesto will last up to a month if stored in a jar with an airtight lid and always covered with Olichia. Serve with pasta, gnocchi or even with a slice of toasted bread and a glass of wine.</li>
          </ol>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-3">
        <div class="card p-4 rounded-4 shadow-sm border">
          <h5 class="fw-bold text-center mb-4 bg-white px-3 py-2 d-inline-block rounded-2 shadow-sm">Other Recipes</h5>

          <a href="bruschetta.php">
            <div class="mb-3">
              <img src="../assets/img/recipes/bruschetta.jpg" class="img-fluid rounded-3 mb-2" alt="Bruschetta">
              <p class="mb-1 fw-semibold">Bruschetta with Garlic Olichia</p>
            </div>
          </a>

          <a href="ratatouille.php">
            <div>
              <img src="../assets/img/recipes/ratatouille.jpeg" class="img-fluid rounded-3 mb-2" alt="Ratatouille">
              <p class="mb-1 fw-semibold">Ratatouille with Olichia with natural Basil aroma</p>
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