<?php include "assets/include/config.php"; 
	if($lang=='jp'){
		include $base_path . "assets/include/blog_data_jp.php" ;
		include $base_path . "assets/include/recipe_data_jp.php";
		}
	else{
		include $base_path . "assets/include/blog_data.php" ;
		include $base_path . "assets/include/recipe_data.php";
	}

?>


<!DOCTYPE html>
<html lang="en">

<?php $title = $language['header_logo'];
include ($base_path . "assets/include/head.php"); ?>

<body class="index-page">

  <?php include $base_path . "assets/include/header.php"; ?>

  <main class="main">


      <section id="hero-slider" class="hero-slider d-none d-lg-block" style="margin-bottom:0px !important;">


              <div class="testimonials-slider swiper init-swiper">
                  <script type="application/json" class="swiper-config">
                      {
                          "slidesPerView": 1,
                          "loop": true,
                          "speed": 1000,
                          "autoplay": {
                              "delay": 5000
                          }
                      }
                  </script>

                  <div class="swiper-wrapper">

                      <div class="swiper-slide">
                          <img src="<?=$base_url?>assets/img/slider/62f25f200ccd6qrrbi6.webp" class="img-fluid w-100" alt="">
                      </div><!-- End Slide Item -->
                      <div class="swiper-slide">
                          <img src="<?=$base_url?>assets/img/slider/64be666e8d681t6kzgp.webp" class="img-fluid w-100" alt="">
                      </div><!-- End Slide Item -->
                      <div class="swiper-slide">
                          <img src="<?=$base_url?>assets/img/slider/64d12be1d03a5uaijpj.webp" class="img-fluid w-100" alt="">
                      </div><!-- End Slide Item -->
                      <div class="swiper-slide">
                          <img src="<?=$base_url?>assets/img/slider/64f760c567462cfcruq.webp" class="img-fluid w-100" alt="">
                      </div><!-- End Slide Item -->
                      <div class="swiper-slide">
                          <img src="<?=$base_url?>assets/img/slider/64f7611d6ad008t4t6d.webp" class="img-fluid w-100" alt="">
                      </div><!-- End Slide Item -->
                      <div class="swiper-slide">
                          <img src="<?=$base_url?>assets/img/slider/6310fbfdb4f56guzvzp.webp" class="img-fluid w-100" alt="">
                      </div><!-- End Slide Item -->


                  </div>
              </div>

      </section>


    <!-- Video Section -->

    <section id="about" class="about section light-background my-0">

      <div class="container">
      
        <div class="ratio ratio-16x9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/sF-Dd2sUGvA?si=3OyxCd3qcJtW1Lf9" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen>
          </iframe>
        </div>

      </div>

    </section>


    <!-- Hero Section -->
      <section id="hero" class="hero section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row align-items-center content">
            <!-- Text Column -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <h2 class="hero_title"><?= $language["hero_title"]; ?></h2>
              <p class="lead"><?= $language["hero_paragraph"]; ?></p>
              <div class="cta-button" data-aos="fade-up" data-aos-delay="300">
                <a href="<?= $base_url; ?>products" class="btn btn-outline"><?= $language["hero_button"]; ?></a>
              </div>
            </div>
      
            <!-- Image Column -->
            <div class="col-lg-6 position-relative d-flex justify-content-center mt-4 mt-lg-0">
              <img src="<?= $base_url; ?>assets/img/portfolio/hero-img.jpg"
                   alt="Main Hero Image"
                   class="img-fluid"
                   style="width: 100%; max-width: 450px; z-index: 0;" />
      
              <img src="<?= $base_url; ?>assets/img/portfolio/olive-oil.webp"
                   alt="Olive Oil"
                   class="position-absolute d-none d-md-block"
                   style="top: 200px; right: 0; width: 210px; z-index: 1;" />
            </div>
          </div>
        </div>
      </section>
    <!-- /Hero Section -->

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
              <img src="<?=$base_url?>assets/img/services/seeds.webp" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <span class="subtitle"><?= $language["about_subtitle"]; ?></span>

              <h2><?= $language["about_main_title"]; ?></h2>

              <p class="lead mb-4"><?= $language["about_paragraph"]; ?></p>

              <div class="personal-info">
                <div class="row g-4">
                  <div class="col-6">
                    <div class="info-item">
                      <span class="label"><img src="<?=$base_url?>assets/img/svg/check-mark.svg" alt="" style="width: 30px; padding-right: 10px;"><?= $language["about_mission_title"]; ?></span>
                      <span class="value"><?= $language["about_mission_paragraph"]; ?></span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label"><img src="<?=$base_url?>assets/img/svg/check-mark.svg" alt="" style="width: 30px; padding-right: 10px;"><?= $language["about_vision_title"]; ?></span>
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
        <h2><?= $language["products_title"]; ?></h2>
        <p><?= $language["products_paragraph"]; ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 skills-animation align-items-stretch">

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/services/organic-products.jpg" alt="" style="width:15.8rem; height: 11.5rem; object-fit: cover; padding-bottom: 30px;">
              <h3><?= $language["products"][0]["title"] ?></h3>
              <p><?= $language["products"][0]["paragraph"] ?></p>
              <a href="#products"><button class="buttons"><?= $language["products"][0]["button"] ?></button></a>
            </div>
          </div> 

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/services/super-foods.jpg" alt="" style="width:15.8rem; height: 11.5rem; object-fit: cover; padding-bottom: 30px;">
              <h3><?= $language["products"][1]["title"] ?></h3>
              <p><?= $language["products"][1]["paragraph"] ?></p>
              <a href="<?=$base_url?>products"><button class="buttons"><?= $language["products"][1]["button"] ?></button></a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/services/promoted-oils.jpg" alt="" style="width:15.8rem; height: 11.5rem; object-fit: cover; padding-bottom: 30px;">
              <h3><?= $language["products"][2]["title"] ?></h3>
              <p><?= $language["products"][2]["paragraph"] ?></p>
              <a href="<?=$base_url?>products"><button class="buttons"><?= $language["products"][2]["button"] ?></button></a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="skill-box h-100" style="background-image: url('<?=$base_url?>assets/img/services/org.jpg'); background-size: cover; background-color: rgba(255, 255, 255, 0.71); background-blend-mode: lighten; align-items: center; border-radius: 8px; padding: 150px 0;">
                <h3><?= $language["products"][3]["title"] ?></h3>
                <a href="<?=$base_url?>products"><button class="buttons"><?= $language["products"][3]["button"] ?></button></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->


    <!-- Products Section -->
    <section id="products" class="skills section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2 style="font-size: 35px"><?= $language["promoting_organic"]; ?></h2>
      </div><!-- End Section Title -->




      <div class="container" data-aos="fade-up" data-aos-delay="100">

          <p class="mb-4"><?= $language["promoting_organic_paragraph"]; ?></p>

          <div class="page-title"  id="products">
                  <h1><?= $language["featured_super_foods"]; ?></h1>
          </div>
        <div class="row mt-3 skills-animation justify-content-md-center align-items-stretch">
      
          <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/chia.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][0]["title"] ?></h4>
                <p><?= $language["super_foods"][0]["paragraph"] ?></p>
              </div>
            </div>
          </div>
      
          <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="200">
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

            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/cocoa.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][2]["title"] ?></h4>
                <p><?= $language["super_foods"][2]["paragraph"] ?></p>
              </div>
            </div>
          </div>

            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
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

            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/adzuki.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][4]["title"] ?></h4>
                <p><?= $language["super_foods"][4]["paragraph"] ?></p>
              </div>
            </div>
          </div>

            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
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

            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box d-flex h-100">
              <img src="<?=$base_url?>assets/img/categories/sesame.webp" alt="">
              <div class="info-right d-block text-start">
                <h4><?= $language["super_foods"][6]["title"] ?></h4> 
                <p><?= $language["super_foods"][6]["paragraph"] ?></p>
              </div>
            </div>
          </div>

            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
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
              <h2><?= $language["ethnic_a_brand"] ?></h2>
              <p class="lead mb-4"><?= $language["ethnic_a_brand_paragraph"] ?></p>
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


    <!-- Why Choose Us Section -->
    <section id="about" class="about section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
  
        <div class="row align-items-center">
          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="<?=$base_url?>assets/img/services/why-choose-us.jpg" alt="Profile Image" class="img-fluid rounded-4">
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
                        <p><img src="<?=$base_url?>assets/img/svg/check-mark.svg" alt="">
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



    <!-- Blog Section -->
  <section id="portfolio" class="portfolio section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2><?= $language["blogs_title"] ?></h2>
    <p><?= $language["insights_that_paragraph"] ?></p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-4 align-items-stretch" data-aos="fade-up" data-aos-delay="300">
      
      <?php
          $count = 0;
          foreach ($blog_data as $key => $blog):
            if ($count >= 2) break;
            $count++; ?>
      
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-card h-100">
          <a href="<?= $blog['url']; ?>" class="portfolio-link d-block h-100 text-decoration-none text-reset">
            <div class="portfolio-image">
              <img src="<?= $blog['feature_img']; ?>" class="img-fluid" alt="" loading="lazy">
            </div>
            <div class="portfolio-content">
              <span class="category"><?= $blog['category']; ?></span>
              <h3><?= $blog['title']; ?></h3>
              <p><?= $blog['date']; ?></p>
            </div>
          </a>
        </div>
      </div><!-- End Blog Item -->
      <?php endforeach; ?>


    </div>

  </div>

  </section><!-- /Blog Section -->


      <!-- Recipe Section -->
    <section id="portfolio" class="portfolio section">
    
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?= $language["recipes_title"] ?></h2>
        <p><?= $language["recipes_subtitle"] ?></p>
      </div>
    
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row row-cols-1 row-cols-md-4 g-4 align-items-stretch" data-aos="fade-up" data-aos-delay="300">
    
        <?php
          $count = 0;
          foreach ($recipe_data as $key => $recipe):
            if ($count >= 4) break;
            $count++; ?>
          <div class="col d-flex">
            <a href="<?= $recipe['url']; ?>">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="<?= $recipe['feature_img']; ?>" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category"><?= $recipe['category']; ?></span>
                  <h3><?= $recipe['title']; ?></h3>
                  <p><?= $recipe['sub']; ?></p>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>

        </div>
      </div>
    </section><!-- /Blog Section -->



      <?php /*

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

      */ ?>


  
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

                <form action="<?=$base_url?>forms/contact" method="post" class="php-email-form">
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

  <?php include $base_path . "assets/include/footer.php"; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <!--<script src="<?//=$base_url?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
  <!--<script src="<?//=$base_url?>assets/vendor/php-email-form/validate.js"></script>-->
  <script src="<?=$base_url?>assets/vendor/aos/aos.js"></script>
  <!--<script src="<?//=$base_url?>assets/vendor/waypoints/noframework.waypoints.js"></script>-->
  <!--<script src="<?//=$base_url?>assets/vendor/glightbox/js/glightbox.min.js"></script>-->
  <!--<script src="<?//=$base_url?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>-->
  <!--<script src="<?//=$base_url?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>-->
  <!--<script src="<?//=$base_url?>assets/vendor/swiper/swiper-bundle.min.js"></script>-->

  <!-- Main JS File -->
  <script src="<?=$base_url?>assets/js/main.js"></script>

</body>

</html>