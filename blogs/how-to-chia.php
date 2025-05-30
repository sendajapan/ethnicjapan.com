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
          <p class="lead mb-3">How To</p>
          <h2 class="mb-4">Do You Know How to Consume Chia Correctly?</h2>
          <div class="info-item">
            <p>10/13/2022</p>
          </div>
        </div>
      </div>
      <div class="col-md-7 position-relative" data-aos="fade-right" data-aos-delay="200">
        <div class="about-image text-center">
          <img src="<?=$base_url?>assets/img/blog/blog2.webp" alt="Profile Image" class="img-fluid rounded-4 shadow-sm">
        </div>
      </div>
    </div>

    <!-- Main Content + Sidebar -->
    <div class="row">
      
      <!-- Blog Main Content -->
      <div class="col-12 col-lg-9 mb-4">
        <div class="card border-0 p-4 rounded-2 h-100">
          <p>
            To obtain the benefits, two tablespoons per day are recommended and the best way to consume the grains is hydrated, as not hydrating them can cause constipation. To hydrate them, simply place the grains in water for approximately 15 minutes before consumption.
            <br><br>
            We produce quality chia seeds with your well-being in mind. Now that you know the correct way to consume this seed, buy our product and keep your health in check!
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
            <a href="<?=$base_url?>blogs/chia-recipe">
              <div class="card border-0 shadow-sm rounded-2 overflow-hidden">
                <img src="<?=$base_url?>assets/img/blog/blog1.webp" alt="Post Image" class="img-fluid" style="object-fit: cover; height: 150px; width: 100%;">
                <div class="p-3">
                  <p class="mb-1 fw-semibold">Delicious Vegan Chia Pudding with Fruit</p>
                  <small class="text-muted">10/13/2022</small>
                </div>
              </div>
            </a>
      
            <!-- Post 2 -->
            <a href="<?=$base_url?>blogs/benefits-omega">
              <div class="card border-0 shadow-sm rounded-2 overflow-hidden">
                <img src="<?=$base_url?>assets/img/blog/blog3.webp" alt="Post Image" class="img-fluid" style="object-fit: cover; height: 150px; width: 100%;">
                <div class="p-3">
                  <p class="mb-1 fw-semibold">Benefits of Omega 3</p>
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