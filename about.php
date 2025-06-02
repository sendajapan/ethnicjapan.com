<?php include "assets/include/config.php"; ?>


<!DOCTYPE html>
<html lang="en">

<?php include ($base_path . "assets/include/head.php"); ?>

<body class="portfolio-details-page">

  <?php include $base_path . "assets/include/header.php"; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">

      <div class="title-wrapper">
        <h1><?= $language["about_us_page_title"] ?></h1>
        <p><?= $language["about_us_page_paragraph"] ?></p>
      </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="<?=$base_url?>assets/img/portfolio/about.jpg" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <h2><?= $language["who_we_are_title"] ?></h2>
              <p class="lead mb-4"><?= $language["who_we_are_paragraph"] ?></p>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Mission Section -->
    <section id="about" class="about section light-background">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">

              <h2><?= $language["about_us_page_mission_title"] ?></h2>
              <p class="lead mb-4"><?= $language["about_us_page_mission_paragraph"] ?></p>

              <div class="personal-info" style="width: auto;">
                <div class="grid">
                  <div class="colu-6">
                    <div class="info-item" style="width: 100%;">
                      <p><?= $language["about_us_page_mission_main"] ?> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="<?=$base_url?>assets/img/services/seeds-page-hero.jpg" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Mission Section -->

    <!-- Vision Section -->
    <section id="about" class="about section light-background">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">

          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="<?=$base_url?>assets/img/portfolio/vision.jpg" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">

              <h2><?= $language["about_us_page_vision_title"] ?></h2>
              <p class="lead mb-4"><?= $language["about_us_page_vision_paragraph"] ?></p>

              <div class="personal-info" style="width: auto;">
                <div class="grid">
                  <div class="colu-6">
                    <div class="info-item" style="width: 100%;">
                      <p><?= $language["about_us_page_vision_main"] ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Vision Section -->

        <!-- Products Section -->
        <section id="skills" class="skills section light-background">

          <div class="container section-title" data-aos="fade-up">
            <h2 style="font-size: 35px"><?= $language["promoting_organic"] ?></h2>
          </div><!-- End Section Title -->
          
          <p class="lead mb-4"><?= $language["promoting_organic_paragraph"] ?></p>
          
          <div class="page-title">
            <div class="title-wrapper">
              <h1><?= $language["featured_super_foods"] ?></h1>
            </div>
          </div><!-- End Page Title -->
          
          <div class="container" data-aos="fade-up" data-aos-delay="100">
      
        <div class="row mt-3 skills-animation justify-content-md-center align-items-stretch">
      
          <div class="col-6" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/chia.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][0]["title"] ?></h4>
                <p><?= $language["super_foods"][0]["paragraph"] ?></p>
              </div>
            </div>
          </div>
      
          <div class="col-6" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/hemp.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][1]["title"] ?></h4>
                <p><?= $language["super_foods"][1]["paragraph"] ?></p>
              </div>
            </div>
          </div>

        </div>

        <div class="row mt-3 skills-animation justify-content-md-center align-items-stretch">
      
          <div class="col-6" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/cocoa.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][2]["title"] ?></h4>
                <p><?= $language["super_foods"][2]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          <div class="col-6" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/quinoa.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][3]["title"] ?></h4>
                <p><?= $language["super_foods"][3]["paragraph"] ?></p>
              </div>
            </div>
          </div>
          
        </div>
      
        <div class="row skills-animation justify-content-md-center mt-3 align-items-stretch">
      
          <div class="col-6" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/adzuki.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][4]["title"] ?></h4>
                <p><?= $language["super_foods"][4]["paragraph"] ?></p>
              </div>
            </div>
          </div>
      
          <div class="col-6" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/amaranth2.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][5]["title"] ?></h4>
                <p> <?= $language["super_foods"][5]["paragraph"] ?></p>
              </div>
            </div>
          </div>

        </div>

        <div class="row mt-3 skills-animation justify-content-md-center align-items-stretch">
      
          <div class="col-6" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/sesame.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][6]["title"] ?></h4> 
                <p><?= $language["super_foods"][6]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          <div class="col-6" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/sacha.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][7]["title"] ?></h4> 
                <p><?= $language["super_foods"][7]["paragraph"] ?></p>
              </div>
            </div>
          </div>

        </div>
      </div>
        </section> <!--/ End Service Intro -->


        
    <!-- Oils Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
          <!-- Page Title -->
          <div class="page-title">
                  <h1><?= $language["promoted_oils"] ?></h1>
                  <p class="mb-4 mt-5"><?= $language["promoted_oils_paragraph"] ?></p>
          </div><!-- End Page Title -->
        <div class="row skills-animation justify-content-md-center align-items-stretch">

          <div class="col-12 col-md-12 col-sm-12 col-lg-4 " data-aos="fade-up" data-aos-delay="100">
              <div class="skill-box-header">
              <h4><?= $language["promoted_oils_list"][0]["title"] ?></h4>
              </div>

            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/categories/chia-oil.webp" alt="">
              <div class="info-right d-block text-start">
                <p class="mt-5"><?= $language["promoted_oils_list"][0]["paragraph"] ?></p>
              </div>
            </div>
          </div>

            <div class="col-12 col-md-12 col-sm-12 col-lg-4 " data-aos="fade-up" data-aos-delay="100">
                <div class="skill-box-header">
                    <h4><?= $language["promoted_oils_list"][1]["title"] ?></h4>
                </div>
            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/categories/olive-oil.webp" alt="">
              <div class="info-right d-block text-start">
                <p class="mt-5"><?= $language["promoted_oils_list"][1]["paragraph"] ?></p>
              </div>
            </div>
          </div>

            <div class="col-12 col-md-12 col-sm-12 col-lg-4 " data-aos="fade-up" data-aos-delay="100">
                <div class="skill-box-header">
                    <h4><?= $language["promoted_oils_list"][2]["title"] ?></h4>
                </div>
            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/categories/sacha-oil.webp" alt="">
              <div class="info-right d-block text-start">
                <p class="mt-5"><?= $language["promoted_oils_list"][2]["paragraph"] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>


<!-- Ethnic Section -->
<section id="about" class="about section light-background">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row align-items-center">

    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
      <div class="about-content">
        <h2><?= $language["ethnic_a_brand"]?></h2>
        <p class="lead mb-4"><?= $language["ethnic_a_brand_paragraph"]?></p>
      </div>
    </div>

    <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
      <div class="about-image">
        <img src="<?=$base_url?>assets/img/services/grain.jpg" alt="Profile Image" class="img-fluid rounded-4">
      </div>
    </div>
  </div>
</div>

</section><!-- /About Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?= $language["faqs_title"]?></h2>
      </div> <!-- /End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3><?= $language["faqs"][0]["question"] ?></h3>
                <div class="faq-content">
                  <p><?= $language["faqs"][0]["answer"] ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item -->

              <div class="faq-item">
                <h3><?= $language["faqs"][1]["question"] ?></h3>
                <div class="faq-content">
                  <p><?= $language["faqs"][1]["answer"] ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item -->

              <div class="faq-item">
                <h3><?= $language["faqs"][2]["question"] ?></h3>
                <div class="faq-content">
                  <p><?= $language["faqs"][2]["answer"] ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div> <!-- End Faq item -->

              <div class="faq-item">
                <h3><?= $language["faqs"][3]["question"] ?></h3>
                <div class="faq-content">
                  <p><?= $language["faqs"][3]["answer"] ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item -->

              <div class="faq-item">
                <h3><?= $language["faqs"][4]["question"] ?></h3>
                <div class="faq-content">
                  <p><?= $language["faqs"][4]["answer"] ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item -->

              <div class="faq-item">
                <h3><?= $language["faqs"][5]["question"] ?></h3>
                <div class="faq-content">
                  <p><?= $language["faqs"][5]["answer"] ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- /End Faq item -->

              <div class="faq-item">
                <h3><?= $language["faqs"][6]["question"] ?></h3>
                <div class="faq-content">
                  <p><?= $language["faqs"][6]["answer"] ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- /End Faq item -->

            </div>

          </div><!-- End Faq Column -->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <div class="container">

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="content">
              <div class="section-category mb-3"></div>
              <h2 class="display-5 mb-4"><?= $language["contact_title"]?></h2>
              <p class="lead mb-4"><?= $language["contact_paragraph"]?></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="contact-form card" >
              <div class="card-body p-4 p-lg-5">

                <form action="forms/contact" method="post" class="php-email-form">
                  <div class="row gy-4">

                    <div class="col-12">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                    </div>

                    <div class="col-12 ">
                      <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                    </div>

                      <button type="submit" class="btn btn-submit w-100"><?= $language["contact_submit"]?></button>
                    </div>

                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <?php include $base_path . "assets/include/footer.php"; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <!-- Vendor JS Files 
  <script src="<?//=$base_url?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?//=$base_url?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?//=$base_url?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?//=$base_url?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?//=$base_url?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?//=$base_url?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?//=$base_url?>assets/vendor/swiper/swiper-bundle.min.js"></script>-->
  <script src="<?=$base_url?>assets/vendor/aos/aos.js"></script>

  <!-- Main JS File -->
  <script src="<?=$base_url?>assets/js/main.js"></script>

</body>

</html>