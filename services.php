<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<?php include "assets/include/init.php"; ?>


<!DOCTYPE html>
<html lang="en">

<?php include "assets/include/head.php"; ?>

<body class="service-details-page">

  <?php include "assets/include/header.php"; ?>


  <main class="main">

    <!-- Page Title -->
    <div class="page-title">

      <div class="title-wrapper">
        <h1><?= $language["service_page_title"]?></h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Intro -->
    <section id="skills" class="skills section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-animation justify-content-md-center align-items-stretch">

          <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <i class="bi bi-bookmarks"></i>
              <div class="info-right d-block text-start">
                <h4><?= $language["service_page_details"][0]["title"] ?></h4>
                <p><?= $language["service_page_details"][0]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4 " data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box d-flex h-100">
              <i class="bi bi-bar-chart"></i>
              <div class="info-right d-block text-start">
                <h4><?= $language["service_page_details"][1]["title"] ?></h4>
                <p><?= $language["service_page_details"][1]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box d-flex h-100">
              <i class="bi bi-person"></i>
              <div class="info-right d-block text-start">
                <h4><?= $language["service_page_details"][2]["title"] ?></h4>
                <p><?= $language["service_page_details"][2]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          
        </div>

        <div class="row skills-animation justify-content-md-center mt-3 align-items-stretch">

          <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <i class="bi bi-patch-check"></i>
              <div class="info-right d-block text-start">
                <h4><?= $language["service_page_details"][3]["title"] ?></h4>
                <p><?= $language["service_page_details"][3]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box d-flex h-100">
              <i class="bi bi-piggy-bank"></i>
              <div class="info-right d-block text-start">
                <h4><?= $language["service_page_details"][4]["title"] ?></h4>
                <p> <?= $language["service_page_details"][4]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box d-flex h-100">
              <i class="bi bi-umbrella"></i>
              <div class="info-right d-block text-start">
                <h4><?= $language["service_page_details"][5]["title"] ?></h4> 
                <p><?= $language["service_page_details"][5]["paragraph"] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> <!--/ End Service Intro -->


    <!-- Why Choose Us Section -->
    <section id="about" class="about section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="align-items-center">
          <div class="no-col" data-aos="fade-up" data-aos-delay="300">
            <div class="about-content">
            
              <h2><?= $language["service_page_why_choose_us"]?></h2>
        
              <p class="lead mb-4"><?= $language["service_page_why_choose_us_paragraph"]?></p>
              <p><?= $language["service_page_strengths"]?></p>
          
              <div class="d-flex">
                <div class="personal-info mt-0" style="width: auto; height:fit-content;">
                  <div class="grid">
                    <div class="colu-6">
                      <div class="info-item" style="width: 100%;">

                        <?php foreach ($language["service_page_why_choose_us_list"] as $item): ?>
                          <p class="mb-1"><img src="assets/img/svg/check-mark.svg" alt="">
                            <?= $item ?>
                          </p>
                        <?php endforeach; ?>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
                  <div class="about-image">
                    <img src="assets/img/services/grain.avif" alt="Profile Image" class="img-fluid rounded-4">
                  </div>
                </div>
              </div>
            </div>
          </div> 
          
    
        </div>
      </div>
    </section><!-- /End Why Choose Us Section -->

    <!-- Page Title -->
    <div class="page-title">
      <div class="title-wrapper">
        <span class="subtitle" style="font-size: 0.875rem;font-weight: 600;letter-spacing: 2px;color: var(--accent-color);margin-bottom: 1rem;"><?= $language["service_page_explore_our_expertise"]?></span>
        <h1><?= $language["service_page_explore_our_expertise_title"]?></h1>
        <p><?= $language["service_page_explore_our_expertise_paragraph"]?></p>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Intro -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-animation justify-content-md-center align-items-stretch">

          <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box h-100">
              <div class="img-num d-flex">
                <img src="assets/img/svg/eco.svg" alt="" style="width:7rem; margin-right:12rem;">
              </div>
              <div class="info-right d-block text-start mt-4">
                <h4><?= $language["service_page_explore_our_expertise_list"][0]["title"] ?></h4>
                <p><?= $language["service_page_explore_our_expertise_list"][0]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box h-100">
              <div class="img-num d-flex">
                <img src="assets/img/svg/house.svg" alt="" style="width:7rem; margin-right:12rem;">
              </div>
              <div class="info-right d-block text-start mt-4">
                <h4><?= $language["service_page_explore_our_expertise_list"][1]["title"] ?></h4>
                <p><?= $language["service_page_explore_our_expertise_list"][1]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box h-100">
              <div class="img-num d-flex">
                <img src="assets/img/svg/case.svg" alt="" style="width:7rem; margin-right:12rem;">
              </div>
              <div class="info-right d-block text-start mt-4">
                <h4><?= $language["service_page_explore_our_expertise_list"][2]["title"] ?></h4>
                <p><?= $language["service_page_explore_our_expertise_list"][2]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          
        </div>

        <div class="row skills-animation justify-content-md-center mt-3 align-items-stretch">

          <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box h-100">
              <div class="img-num d-flex">
                <img src="assets/img/svg/ship.svg" alt="" style="width:7rem; margin-right:12rem;">
              </div>
              <div class="info-right d-block text-start mt-4">
                <h4><?= $language["service_page_explore_our_expertise_list"][3]["title"] ?></h4>
                <p><?= $language["service_page_explore_our_expertise_list"][3]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box h-100">
              <div class="img-num d-flex">
                <img src="assets/img/svg/analytics.svg" alt="" style="width:7rem; margin-right:12rem;">
              </div>
              <div class="info-right d-block text-start mt-4">
                <h4><?= $language["service_page_explore_our_expertise_list"][4]["title"] ?></h4>
                <p><?= $language["service_page_explore_our_expertise_list"][4]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box h-100">
              <div class="img-num d-flex">
                <img src="assets/img/svg/tech.svg" alt="" style="width:7rem; margin-right: 12rem;">
              </div>
              <div class="info-right d-block text-start mt-4">
                <h4><?= $language["service_page_explore_our_expertise_list"][5]["title"] ?></h4> 
                <p><?= $language["service_page_explore_our_expertise_list"][5]["paragraph"] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> <!--/ End Service Intro -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="content" data-aos="fade-up" data-aos-delay="200">
              <h2 class="display-5 mb-4"><?= $language["service_page_lets_collaborate"] ?></h2>
              <p class="lead mb-4"><?= $language["service_page_lets_collaborate_paragraph"] ?></p>

              <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
                <a href="contact.php" class="btn btn-outline"><?= $language["service_page_button"] ?></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <img src="assets/img/portfolio/business.webp" alt="" style="width:30rem;" class="rounded">
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->


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