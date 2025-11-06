<?php include "assets/include/config.php"; ?>


<!DOCTYPE html>
<html lang="en">

<?php $title = $language['title_wholesale'];
include ($base_path . "assets/include/head.php"); ?>

<body class="service-details-page">

  <?php include $base_path . "assets/include/header.php"; ?>

  <main class="main">

    <!-- Trading Steps -->
    <section id="about" class="about section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2><?= $language["privacy_title"]; ?></h2>
      </div><!-- End Section Title -->
      
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5 align-items-center"> 
            <div class="about-content">
                <div class="container-fluid" data-aos="fade-left" data-aos-delay="300">
                    <p class="lead"><?= $language["privacy_sub"] ?></p>

                    <p class="lead mb-2 fw-bold"><?= $language["privacy_1"] ?></p>
                    <p class="mb-4"><?= $language["privacy_1_p"] ?></p>
                    
                    <p class="lead mb-2 fw-bold"><?= $language["privacy_2"] ?></p>
                    <p class="mb-4 fw-bold"><?= $language["privacy_2_p"] ?></p>

                    <p class="lead mb-2 fw-bold"><?= $language["privacy_3"] ?></p>
                    <p class="mb-4"><?= $language["privacy_3_p"] ?></p>

                    <p class="lead mb-2 fw-bold"><?= $language["privacy_4"] ?></p>
                    <p class="mb-4"><?= $language["privacy_4_p"] ?></p>

                    <p class="lead mb-2 fw-bold"><?= $language["privacy_5"] ?></p>
                    <p class="mb-4"><?= $language["privacy_5_p"] ?></p>

                    <p class="lead mb-2 fw-bold"><?= $language["privacy_6"] ?></p>
                    <p class="mb-4"><?= $language["privacy_6_p"] ?></p>

                    <p class="lead mb-2 fw-bold"><?= $language["privacy_7"] ?></p>
                    <p class="mb-4"><?= $language["privacy_7_p"] ?></p>

                    <p class="lead mb-2 fw-bold"><?= $language["privacy_8"] ?></p>
                    <p class="mb-4"><?= $language["privacy_8_p"] ?></p>

                    <p class="lead mb-2 fw-bold"><?= $language["privacy_9"] ?></p>
                    <p class="lead mb-2"><?= $language["privacy_9_1"] ?></p>
                    <p class="mb-2"><?= $language["privacy_9_1_p"] ?></p>

                    <p class="lead mb-2"><?= $language["privacy_9_2"] ?></p>
                    <p class="mb-4"><?= $language["privacy_9_2_p"] ?></p>

                    <p class="lead mb-2 fw-bold"><?= $language["privacy_10"] ?></p>
                    <p class="mb-4"><?= $language["privacy_10_p"] ?></p>

                    <p class="lead mb-2 fw-bold"><?= $language["privacy_11"] ?></p>
                    <p class="mb-4"><?= $language["privacy_11_p"] ?></p>

                    <p class="lead mb-2 fw-bold"><?= $language["privacy_12"] ?></p>
                    <p class="mb-4"><?= $language["privacy_12_p"] ?></p>

                    <p class="lead mb-2 fw-bold"><?= $language["privacy_13"] ?></p>
                    <p class="mb-4"><?= $language["privacy_13_p"] ?></p>
                </div>
            </div>
        </div>
      </div>

    </section><!-- /Trading Steps -->

  </main>

  <?php include $base_path . "assets/include/footer.php"; ?>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <!-- Vendor JS Files -->
  <script src="<?=$base_url?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?=$base_url?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=$base_url?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?=$base_url?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=$base_url?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=$base_url?>assets/vendor/aos/aos.js"></script>
  <script src="<?=$base_url?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?=$base_url?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="<?=$base_url?>assets/js/main.js"></script>

</body>

</html>