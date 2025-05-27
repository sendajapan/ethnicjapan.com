<?php include "../assets/include/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php include $base_path . "assets/include/head.php"; ?>

<body class="starter-page-page">

  <?php include $base_path . "assets/include/header.php"; ?>

  <main class="main">

  <!-- Blog Section -->
<section id="about" class="about section light-background py-5">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <!-- Header Row -->
    <div class="row align-items-center mb-5">
      <div class="col-md-5" data-aos="fade-left" data-aos-delay="300">
        <div class="about-content">
          <p class="lead mb-3">Creative</p>
          <h2 class="mb-4">Learn How to Make a Delicious Vegan Chia Pudding with Fruit!</h2>
          <div class="info-item">
            <p>10/13/2022</p>
          </div>
        </div>
      </div>
      <div class="col-md-7 position-relative" data-aos="fade-right" data-aos-delay="200">
        <div class="about-image text-center">
          <img src="<?=$base_url?>assets/img/blog/blog1.webp" alt="Profile Image" class="img-fluid rounded-4 shadow-sm">
        </div>
      </div>
    </div>

    <!-- Main Content + Sidebar -->
    <div class="row">
      
      <!-- Blog Main Content -->
      <div class="col-12 col-lg-9 mb-4">
        <div class="card border-0 p-4 rounded-2 h-100">
          <p>
            Ingredients:
            <br>
            120 g unsweetened plant-based milk (120 ml | 1/2 cup)
            <br>
            20 g chia seeds (2 tablespoons)
            <br>
            10 g white sugar or coconut sugar or demerara sugar (2 teaspoons)
            <br><br>
            Preparation method:
            <br>
            Separate all the ingredients and measure them, leaving them ready to start the recipe. This step is important for the success of your recipe, as it avoids surprises in the middle of the process.
            <br><br>
            Mix milk and sugar: add 60 g (1/4 cup) of drinking coconut milk, 5 g (1 teaspoon) of sugar. Mix well until the sugar dissolves.
            <br><br>
            Add the chia seeds: Place 10 g (1 tablespoon) of chia seeds in each small bowl with the coconut milk and sugar mixture. Stir well so that the seeds do not clump together. Let sit for 5 minutes.
            <br><br>
            Refrigerate: after 5 minutes of resting, the seeds will be partially gelled, stir again to prevent the seeds from clumping together. Cover the containers and place in the refrigerator for 6 to 8 hours.
            <br><br>
            Serve: Stir the chia pudding before serving and add fresh fruit, nuts, shredded coconut, etc.
            <br><br><br>
            Tips:
            <br>
            We recommend using coconut milk to drink or cashew milk as they are tastier.
            <br>
            You can add flavoring ingredients in addition to the basic ingredients, such as vanilla, cinnamon, etc.          
          </p>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-12 col-lg-3">
        <div class="card border bg-white shadow-sm p-3 rounded-2">
          <div class="title mb-3 py-2">
            <h5 class="fw-bold m-0 text-center"><?= $language["blogs_you_may_like_title"] ?></h5>
          </div>
      
          <div class="body widget popular-post d-flex flex-column gap-3">
      
            <!-- Post 1 -->
            <a href="<?=$base_url?>blogs/benefits-omega">
              <div class="card border-0 shadow-sm rounded-2 overflow-hidden">
                <img src="<?=$base_url?>assets/img/blog/blog3.webp" alt="Post Image" class="img-fluid" style="object-fit: cover; height: 150px; width: 100%;">
                <div class="p-3">
                  <p class="mb-1 fw-semibold">Benefits of Omega 3</p>
                  <small class="text-muted">10/13/2022</small>
                </div>
              </div>
            </a>
      
            <!-- Post 2 -->
            <a href="<?=$base_url?>blogs/how-to-chia">
              <div class="card border-0 shadow-sm rounded-2 overflow-hidden">
                <img src="<?=$base_url?>assets/img/blog/blog2.webp" alt="Post Image" class="img-fluid" style="object-fit: cover; height: 150px; width: 100%;">
                <div class="p-3">
                  <p class="mb-1 fw-semibold">How to Consume Chia Correctly</p>
                  <small class="text-muted">10/13/2022</small>
                </div>
              </div>
            </a>
      
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    

  </main>

  <?php include "<?=$base_url?>assets/include/footer.php"; ?>

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