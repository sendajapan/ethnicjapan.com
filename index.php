<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<?php
session_start();

$default_lang = 'en';
$lang = $_SESSION['ethnic']['selected_lang'] ?? $default_lang;

$allowed_langs = ['en', 'jp'];
if (!in_array($lang, $allowed_langs)) {
    $lang = $default_lang;
}

include(__DIR__ . "/assets/include/$lang.php");
?>


<!DOCTYPE html>
<html lang="en">

<?php include "assets/include/head.php"; ?>

<body class="index-page">

  <?php include "assets/include/header.php"; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h2><?= $language["hero_title"]; ?></h2>
            <p class="lead"><?= $language["hero_paragraph"]; ?></p>
            <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
              <a href="services.php" class="btn btn-outline"><?= $language["hero_button"]; ?></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image">
              <img src="assets/img/portfolio/org.jpg" alt="Portfolio Hero Image" class="img-fluid" data-aos="zoom-out" data-aos-delay="300" style="position:absolute; bottom:30px; left:10px; z-index: 0; width: 20rem;">
              <img src="assets/img/portfolio/houses.webp" alt="" style="position:absolute; bottom:0px; left:300px; z-index: 1; width: 12rem;">
              <img src="assets/img/portfolio/business1.webp" alt="" style="position:absolute; top:0px; left:110px; z-index: 2; width: 18rem;">
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
       <div class="container section-title" data-aos="fade-up">
        <h2><?= $language["about_title"]; ?></h2>
        <p><?= $language["about_sub"]; ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="assets/img/services/seeds.webp" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <span class="subtitle"><?= $language["about_subtitle"]; ?></span>

              <h2><?= $language["about_main_title"]; ?></h2>

              <p class="lead mb-4"><?= $language["about_paragraph"]; ?></p>

              <!--<p class="mb-4">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>-->

              <div class="personal-info">
                <div class="row g-4">
                  <div class="col-6">
                    <div class="info-item">
                      <span class="label"><img src="assets/img/svg/check-mark.svg" alt="" style="width: 30px; padding-right: 10px;"><?= $language["about_mission_title"]; ?></span>
                      <span class="value"><?= $language["about_mission_paragraph"]; ?></span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label"><img src="assets/img/svg/check-mark.svg" alt="" style="width: 30px; padding-right: 10px;"><?= $language["about_vision_title"]; ?></span>
                      <span class="value"><?= $language["about_vision_paragraph"]; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container section-title" data-aos="fade-up">
        <h2><?= $language["services_title"]; ?></h2>
        <p><?= $language["service_paragraph"]; ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 skills-animation align-items-stretch">

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box h-100">
              <img src="assets/img/services/services1.jpg" alt="" style="width:15.8rem; height: 11.5rem; object-fit: cover; padding-bottom: 30px;">
              <h3><?= $language["services"][0]["title"] ?></h3>
              <p><?= $language["services"][0]["paragraph"] ?></p>
              <a href="#products"><button class="buttons"><?= $language["services"][0]["button"] ?></button></a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box h-100">
              <img src="assets/img/services/seeds.jpg" alt="" style="width:15.8rem; height: 11.5rem; object-fit: cover; padding-bottom: 30px;">
              <h3><?= $language["services"][1]["title"] ?></h3>
              <p><?= $language["services"][1]["paragraph"] ?></p>
              <a href="services.php"><button class="buttons"><?= $language["services"][1]["button"] ?></button></a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box h-100">
              <img src="assets/img/services/meeting.webp" alt="" style="width:15.8rem; height: 11.5rem; object-fit: cover; padding-bottom: 30px;">
              <h3><?= $language["services"][2]["title"] ?></h3>
              <p><?= $language["services"][2]["paragraph"] ?></p>
              <a href="services.php"><button class="buttons"><?= $language["services"][2]["button"] ?></button></a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="skill-box h-100" style="background-image: url('assets/img/services/organic.jpg'); background-size: contain; background-color: rgba(255,255,255,0.6); background-blend-mode: lighten; align-items: center; border-radius: 8px; padding: 150px 0;">
                <h3><?= $language["services"][3]["title"] ?></h3>
                <a href="services.php"><button class="buttons"><?= $language["services"][3]["button"] ?></button></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->


    <!-- Products Section -->
    <section id="skills" class="skills section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2 style="font-size: 35px"><?= $language["promoting_organic"]; ?></h2>
      </div><!-- End Section Title -->

      <p class="lead mb-4"><?= $language["promoting_organic_paragraph"]; ?></p>

      <div class="page-title"  id="products">
        <div class="title-wrapper">
          <h1><?= $language["featured_super_foods"]; ?></h1>
        </div>
      </div><!-- End Page Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
      
        <div class="row mt-3 skills-animation justify-content-md-center align-items-stretch">
      
          <div class="col-6" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="assets/img/services/chia.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][0]["title"] ?></h4>
                <p><?= $language["super_foods"][0]["paragraph"] ?></p>
              </div>
            </div>
          </div>
      
          <div class="col-6" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box d-flex h-100">
              <img src="assets/img/services/hemp.png" alt="">
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
              <img src="assets/img/services/cocoa.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][2]["title"] ?></h4>
                <p><?= $language["super_foods"][2]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          <div class="col-6" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box d-flex h-100">
              <img src="assets/img/services/quinoa.webp" alt="">
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
              <img src="assets/img/services/adzuki.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][4]["title"] ?></h4>
                <p><?= $language["super_foods"][4]["paragraph"] ?></p>
              </div>
            </div>
          </div>
      
          <div class="col-6" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box d-flex h-100">
              <img src="assets/img/services/amaranth2.png" alt="">
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
              <img src="assets/img/services/sesame.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][6]["title"] ?></h4> 
                <p><?= $language["super_foods"][6]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          <div class="col-6" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box d-flex h-100">
              <img src="assets/img/services/sacha.png" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][7]["title"] ?></h4> 
                <p><?= $language["super_foods"][7]["paragraph"] ?></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> <!--/ End Service Intro -->

    

    <!-- Service Intro -->
    <section id="skills" class="skills section">
      
      <!-- Page Title -->
      <div class="page-title">
        <div class="title-wrapper">
          <h1><?= $language["promoted_oils"] ?></h1>
          <p class="lead mb-4 mt-5"><?= $language["promoted_oils_paragraph"] ?></p>
        </div>
      </div><!-- End Page Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-animation justify-content-md-center align-items-stretch">

          <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="assets/img/services/chia-oil.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["promoted_oils_list"][0]["title"] ?></h4>
                <p><?= $language["promoted_oils_list"][0]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4 " data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box d-flex h-100">
              <img src="assets/img/services/olive-oil.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["promoted_oils_list"][1]["title"] ?></h4>
                <p><?= $language["promoted_oils_list"][1]["paragraph"] ?></p>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box d-flex h-100">
              <img src="assets/img/services/sacha-oil.jpg" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["promoted_oils_list"][2]["title"] ?></h4>
                <p><?= $language["promoted_oils_list"][2]["paragraph"] ?></p>
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
              <h2><?= $language["ethnic_a_brand"] ?></h2>
              <p class="lead mb-4"><?= $language["ethnic_a_brand_paragraph"] ?></p>
            </div>
          </div>

          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="assets/img/services/grain.jpg" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>
        </div>
      </div>

    </section><!-- /About Section -->


    <!-- Why Choose Us Section -->
    <section id="about" class="about section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
  
        <div class="row align-items-center">
          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="assets/img//services/farmers.jpg" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>
        
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
        
              <h2><?= $language["why_choose_us"] ?></h2>
        
              <p class="lead mb-4"><?= $language["why_choose_us_paragraph"] ?></p>
                
              <div class="personal-info" style="width: auto;">
                <div class="grid">
                  <div class="colu-6">
                    <div class="info-item" style="width: 100%;">

                      <?php foreach ($language["why_choose_us_list"] as $item): ?>
                        <p><img src="assets/img/svg/check-mark.svg" alt="">
                          <?= $item ?>
                        </p>
                      <?php endforeach; ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Why Choose Us Section -->


    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?= $language["insights_that"] ?></h2>
        <p><?= $language["insights_that_paragraph"] ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row g-4 isotope-container align-items-stretch" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card h-100">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/organic.jpg" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category"><?= $language["insights_that_list"][0]["title"] ?></span>
                  <h3><?= $language["insights_that_list"][0]["subtitle"] ?></h3>
                  <p><?= $language["insights_that_list"][0]["paragraph"] ?></p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics">
              <div class="portfolio-card h-100">
                <div class="portfolio-image">
                  <img src="assets/img/services/chia+cover.jpeg" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category"><?= $language["insights_that_list"][1]["title"] ?></span>
                  <h3><?= $language["insights_that_list"][1]["subtitle"] ?></h3>
                  <p><?= $language["insights_that_list"][1]["paragraph"] ?></p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-motion">
              <div class="portfolio-card h-100">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/business.webp" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category"><?= $language["insights_that_list"][2]["title"] ?></span>
                  <h3><?= $language["insights_that_list"][2]["subtitle"] ?></h3>
                  <p><?= $language["insights_that_list"][2]["paragraph"] ?></p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-brand">
              <div class="portfolio-card h-100">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/wholesale.jpg" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category"><?= $language["insights_that_list"][3]["title"] ?></span>
                  <h3><?= $language["insights_that_list"][3]["subtitle"] ?></h3>
                  <p><?= $language["insights_that_list"][3]["paragraph"] ?></p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?= $language["testimonial_title"] ?></h2>
        <p><?= $language["testimonial_paragraph"] ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "slidesPerView": 1,
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>

          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2><?= $language["testimonials"][0]["title"] ?></h2>
                    <p><?= $language["testimonials"][0]["testimonial"] ?> </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/person2.png" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3><?= $language["testimonials"][0]["name"] ?></h3>
                        <span><?= $language["testimonials"][0]["position"] ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/person2.png" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2><?= $language["testimonials"][1]["title"] ?></h2>
                    <p><?= $language["testimonials"][1]["testimonial"] ?></p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/person1.png" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3><?= $language["testimonials"][1]["name"] ?></h3>
                        <span><?= $language["testimonials"][1]["position"] ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/person1.png" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2><?= $language["testimonials"][2]["title"] ?></h2>
                    <p><?= $language["testimonials"][2]["testimonial"] ?></p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/person3.png" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3><?= $language["testimonials"][2]["name"] ?></h3>
                        <span><?= $language["testimonials"][2]["position"] ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/person3.png" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

          </div>

          <div class="swiper-navigation w-100 d-flex align-items-center justify-content-center">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

  
    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <div class="container" >

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="content" >
              <div class="section-category mb-3"><?= $language["contact"] ?></div>
              <h2 class="display-5 mb-4"><?= $language["contact_title"] ?></h2>
              <p class="lead mb-4"><?= $language["contact_paragraph"] ?></p>

              <div class="contact-info mt-5">
                <div class="info-item d-flex mb-3">
                  <i class="bi bi-envelope-at me-3"></i>
                  <span><?= $language["contact_email"] ?></span>
                </div>

                <div class="info-item d-flex mb-3">
                  <i class="bi bi-telephone me-3"></i>
                  <span><?= $language["contact_phone"] ?></span>
                </div>

                <div class="info-item d-flex mb-4">
                  <i class="bi bi-geo-alt me-3"></i>
                  <span><?= $language["contact_address"] ?></span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="contact-form card" ><!--data-aos="fade-up" data-aos-delay="300"-->
              <div class="card-body p-4 p-lg-5">

                <form action="forms/contact.php" method="post" class="php-email-form">
                  <div class="row gy-4">

                    <div class="col-12">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                    </div>

                    <div class="col-12 ">
                      <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                    </div>

                    <!--<div class="col-12">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>

                    <div class="col-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="col-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>-->

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