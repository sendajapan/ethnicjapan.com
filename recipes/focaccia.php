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
        <h2 class="fw-bold mb-3" style="font-size: 3rem;">Focaccia with Garlic Oil</h2>
        <p class="lead">For those who like the delicious aroma and flavor of garlic, how about a recipe?</p>
      </div>
      <!-- Image Column -->
      <div class="col-md-6 text-end">
        <img src="<?=$base_url?>assets/img/recipes/focaccia.jpg" alt="Focaccia" style="width: 400px; height: auto;" class="img-fluid rounded-4 shadow-sm">
      </div>
    </div>


    <!-- Recipe info -->
    <div class="row g-4 mb-4">
  <div class="col-6 col-md-3">
    <div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #B66A50">
      <h6 class="text-muted mb-1">Prep Time</h6>
      <p class="mb-0 fw-semibold">1 hr 30 mins</p>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #B66A50">
      <h6 class="text-muted mb-1">Total Time</h6>
      <p class="mb-0 fw-semibold">2 hrs</p>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #B66A50">
      <h6 class="text-muted mb-1">Serving</h6>
      <p class="mb-0 fw-semibold">4 Person</p>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="rounded-3 p-3 pt-2 text-center h-100 bg-white shadow-sm" style="border-top: 4px solid #B66A50">
      <h6 class="text-muted mb-1">Yield</h6>
      <p class="mb-0 fw-semibold">1 9" Round Bread</p>
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
              <li class="mb-1" style="list-style-type: circle;">450 g Wheat Flour</li>
              <li class="mb-1" style="list-style-type: circle;">2 tbsp Chia Seeds</li>
              <li class="mb-1" style="list-style-type: circle;">5 g Instant Dry Yeast</li>
              <li class="mb-1" style="list-style-type: circle;">1 tsp Salt</li>
              <li class="mb-1" style="list-style-type: circle;">1 tsp Sugar</li>
              <li class="mb-1" style="list-style-type: circle;">3 tbsp Garlic-flavored Olichia</li>
              <li class="mb-1" style="list-style-type: circle;">10-12 Pitted Green Olives</li>
              <li class="mb-1" style="list-style-type: circle;">Coarse Salt</li>
              <li class="mb-1" style="list-style-type: circle;">Rosemary Leaves (Optional)</li>
          </ul>

          <h4 class="fw-semibold mt-4 mb-3">Instructions</h4>
          <ol class="mb-3 colored">
              <li class="mb-1">In a large bowl, combine the flour, yeast, sugar and salt and mix them well. Make a well in the middle and pour in 250ml of warm water and 1 tablespoon of Olichia. Mix until the dough starts to form. Transfer it to your lightly floured work surface and knead until it is smooth and elastic.</li>
              <li class="mb-1">Shape the dough into a ball and place it in a large bowl, covered with plastic wrap. Leave it like this until the dough doubles in size.</li>
              <li class="mb-1">Once done, return the dough to the work surface and knead again for 3 to 4 minutes.</li>
              <li class="mb-1">Grease a round pan with 1 tablespoon of Olichia. Place the dough in the pan and press it with your fingertips, spreading it until it is about 2 cm thick. To speed up the process, you can roll out the dough a little with a rolling pin before placing it in the pan. Cover with a cloth and let it rise for 30 minutes – take advantage and heat the oven to 200ºC</li>
              <li class="mb-1">Before putting the focaccia in the oven, make small holes with your fingertips all over the surface of the dough. Brush with the remaining Olichia</li>
              <li class="mb-1">Distribute the olives throughout the focaccia, pressing them down. Sprinkle with coarse salt. If you want, stick the rosemary leaves on the surface of the focaccia (where there are no holes or olives).</li>
              <li class="mb-1">Bake for 30 minutes or until the focaccia is golden brown. Let cool slightly on a wire rack before eating.</li>
          </ol>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-3">
        <div class="card p-4 rounded-4 shadow-sm border">
          <h5 class="fw-bold text-center mb-4 bg-white px-3 py-2 d-inline-block rounded-2 shadow-sm">Other Recipes</h5>

          <a href="<?=$base_url?>recipes/bruschetta">
            <div class="mb-3">
              <img src="<?=$base_url?>assets/img/recipes/bruschetta.jpg" class="img-fluid rounded-3 mb-2" alt="Bruschetta">
              <p class="mb-1 fw-semibold">Bruschetta with Garlic Olichia</p>
            </div>
          </a>

          <a href="<?=$base_url?>recipes/soup">
            <div>
              <img src="<?=$base_url?>assets/img/recipes/soup.jpg" class="img-fluid rounded-3 mb-2" alt="Soup">
              <p class="mb-1 fw-semibold">Creamy Soup of Sprouted Lentils, Tomato and Olive Oil</p>
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