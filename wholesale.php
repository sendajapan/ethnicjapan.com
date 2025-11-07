<?php include "assets/include/config.php"; ?>


<!DOCTYPE html>
<html lang="en">

<?php $title = $language['title_wholesale'];
include ($base_path . "assets/include/head.php"); ?>

<body class="service-details-page">

  <?php include $base_path . "assets/include/header.php"; ?>

  <main class="main">

    <!-- Hero -->
    <section class="hero-banner d-flex align-items-center text-white"  style="background:url('<?=$base_url?>assets/img/portfolio/farm.jpg') center/cover no-repeat;">>
      <div class="container">
        <div class="col-lg-8"> <!-- limits width of text -->
          <h3 class="display-6 fw-bold mb-2"><?= $language["wholesale_hero_bold"]; ?></h3>
          <h4 class="mb-2"><?= $language["wholesale_hero_1"]; ?></h4>
          <h4 class="mb-4"><?= $language["wholesale_hero_2"]; ?></h4>
          <p class="fs-5"><?= $language["wholesale_hero_3"]; ?></p>
        </div>
      </div>
    </section> <!-- /Hero -->

    <!-- Why Choose Us -->
    <section id="skills" class="skills section">

      <div class="container section-title" data-aos="fade-up">
        <h2><?= $language["wholesale_why_choose_us"]; ?></h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-3 skills-animation align-items-stretch">

          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/categories/network.png" alt="" style="width:12rem; height: auto; object-fit: cover; padding-bottom: 30px;">
              <h3><?= $language["why_choose_ethnic"][0]["title"] ?></h3>
              <p class="text-start"><?= $language["why_choose_ethnic"][0]["paragraph"] ?></p>
            </div>
          </div> 

          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/categories/quality.png" alt="" style="width:12rem; height: auto; object-fit: cover; padding-bottom: 30px;">
              <h3><?= $language["why_choose_ethnic"][1]["title"] ?></h3>
              <p class="text-start"><?= $language["why_choose_ethnic"][1]["paragraph"] ?></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/categories/supply.png" alt="" style="width:12rem; height: auto; object-fit: cover; padding-bottom: 30px;">
              <h3><?= $language["why_choose_ethnic"][2]["title"] ?></h3>
              <p class="text-start"><?= $language["why_choose_ethnic"][2]["paragraph"] ?></p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Why Choose Us -->

    <!-- Ingredients Table-->
    <section id="skills" class="skills section">

      <div class="container section-title" data-aos="fade-up">
        <h2><?= $language["wholesale_ingredients"]; ?></h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <table class="table table-hover table-ing">
          <caption class="mt-2"><?= $language["wholesale_table_caption"]; ?></caption>
          <thead>
            <tr>
              <th scope="col"><?= $language["wholesale_table_header_col1"]; ?></th>
              <th scope="col"><?= $language["wholesale_table_header_col2"]; ?></th>
              <th scope="col"><?= $language["wholesale_table_header_col3"]; ?></th>
              <th scope="col"><?= $language["wholesale_table_header_col4"]; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?= $language["wholesale_table_row1_col1"]; ?></th>
              <td><?= $language["wholesale_table_row1_col2"]; ?></td>
              <td><?= $language["wholesale_table_row1_col3"]; ?></td>
              <td><?= $language["wholesale_table_row1_col4"]; ?></td>
            </tr>
            <tr>
              <th scope="row"><?= $language["wholesale_table_row2_col1"]; ?></th>
              <td><?= $language["wholesale_table_row1_col2"]; ?></td>
              <td><?= $language["wholesale_table_row1_col3"]; ?></td>
              <td><?= $language["wholesale_table_row1_col4"]; ?></td>
            </tr>
            <tr>
              <th scope="row"><?= $language["wholesale_table_row3_col1"]; ?></th>
              <td><?= $language["wholesale_table_row3_col2"]; ?></td>
              <td><?= $language["wholesale_table_row1_col3"]; ?></td>
              <td><?= $language["wholesale_table_row3_col4"]; ?></td>
            </tr>
            <tr>
              <th scope="row"><?= $language["wholesale_table_row4_col1"]; ?></th>
              <td><?= $language["wholesale_table_row1_col2"]; ?></td>
              <td><?= $language["wholesale_table_row1_col3"]; ?></td>
              <td><?= $language["wholesale_table_row3_col4"]; ?></td>
            </tr>
            <tr>
              <th scope="row"><?= $language["wholesale_table_row5_col1"]; ?></th>
              <td><?= $language["wholesale_table_row1_col2"]; ?></td>
              <td><?= $language["wholesale_table_row1_col3"]; ?></td>
              <td><?= $language["wholesale_table_row1_col4"]; ?></td>
            </tr>
            <tr>
              <th scope="row"><?= $language["wholesale_table_row6_col1"]; ?></th>
              <td><?= $language["wholesale_table_row1_col2"]; ?></td>
              <td><?= $language["wholesale_table_row1_col3"]; ?></td>
              <td><?= $language["wholesale_table_row3_col4"]; ?></td>
            </tr>
          </tbody>
        </table>

      </div>

    </section><!-- /Ingredients Table-->

    <!-- Proposals Section -->
    <section id="about" class="about section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2><?= $language["wholesale_proposals_title"]; ?></h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Manufacturers -->
        <div class="row mb-5 mt-5 align-items-center"> 

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content pointers">
              <h2 class="mb-4"><?= $language["wholesale_proposals_manufacturers"] ?></h2>

              <h4><?= $language["wholesale_proposals_issues"] ?></h4>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_proposals_manufacturers_issues1"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_proposals_manufacturers_issues2"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_proposals_manufacturers_issues3"] ?></p>

              <h4 class="mt-5"><?= $language["wholesale_proposals_solutions"] ?></h4>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_proposals_manufacturers_solutions1"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_proposals_manufacturers_solutions2"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_proposals_manufacturers_solutions3"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_proposals_manufacturers_solutions4"] ?></p>

            </div>
          </div>

          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="<?=$base_url?>assets/img/services/farmers.jpg" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>
        </div>

        <!-- Cafés -->
        <div class="row mb-5 mt-5 align-items-center"> 

          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="<?=$base_url?>assets/img/services/pastries.jpg" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content pointers">
              <h2 class="mb-4"><?= $language["wholesale_proposals_cafes"] ?></h2>

              <h4><?= $language["wholesale_proposals_issues"] ?></h4>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_proposals_cafes_issues1"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_proposals_cafes_issues2"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_proposals_cafes_issues3"] ?></p>

              <h4 class="mt-5"><?= $language["wholesale_proposals_solutions"] ?></h4>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_proposals_cafes_solutions1"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_proposals_cafes_solutions2"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_proposals_cafes_solutions3"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_proposals_cafes_solutions4"] ?></p>
            </div>
          </div>
        </div>

        <!-- Retails -->
        <div class="row mb-5 mt-5 align-items-center"> 

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content pointers">
              <h2 class="mb-4"><?= $language["wholesale_proposals_retailers"] ?></h2>

              <h4><?= $language["wholesale_proposals_issues"] ?></h4>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_proposals_retailers_issues1"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_proposals_retailers_issues2"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_proposals_retailers_issues3"] ?></p>

              <h4 class="mt-5"><?= $language["wholesale_proposals_solutions"] ?></h4>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_proposals_retailers_solutions1"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_proposals_retailers_solutions2"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_proposals_retailers_solutions3"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_proposals_retailers_solutions4"] ?></p>
            </div>
          </div>

          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="<?=$base_url?>assets/img/services/retail.jpg" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Proposals Section -->

    <!-- Commitment Section-->
    <section id="skills" class="skills section">

      <div class="container section-title" data-aos="fade-up">
        <h2><?= $language["wholesale_commit_title"]; ?></h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row mb-5 mt-2 g-5 align-items-center"> 

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content pointers">
              <h4><?= $language["wholesale_commit_sub1"] ?></h4>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_commit_sub1_p1"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_commit_sub1_p2"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_commit_sub1_p3"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_commit_sub1_p4"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_commit_sub1_p5"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/pointers.svg" alt=""><?= $language["wholesale_commit_sub1_p6"] ?></p>

              <h4 class="mt-5"><?= $language["wholesale_commit_sub2"] ?></h4>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_commit_sub2_p1"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_commit_sub2_p2"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_commit_sub2_p3"] ?></p>
              <p><img src="<?=$base_url?>assets/img/svg/ticks.svg" alt=""><?= $language["wholesale_commit_sub2_p4"] ?></p>
            </div>
          </div>

          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="<?=$base_url?>assets/img/portfolio/mills.jpg" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Commitment Section -->

    <!-- Trading Steps -->
    <section id="about" class="about section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2><?= $language["wholesale_trading_title"]; ?></h2>
      </div><!-- End Section Title -->
      
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row mb-5 mt-5 align-items-center"> 

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content pointers">
              <div class="container pointers" data-aos="fade-up" data-aos-delay="100" style="padding:2rem;">
                <div class="align-items-center mb-2">
                  <h3>  <span class="fw-bold"><?= $language["wholesale_trading_step1_bold"];?></span>  <?= $language["wholesale_trading_step1"]; ?></h3>
                  <p><img src="<?=$base_url?>assets/img/svg/down.svg" alt=""><?= $language["wholesale_trading_step1_p"]; ?></p>
                </div>
                <div class="align-items-center mb-2">
                  <h3>  <span class="fw-bold"><?= $language["wholesale_trading_step2_bold"];?></span>  <?= $language["wholesale_trading_step2"]; ?></h3>
                  <p><img src="<?=$base_url?>assets/img/svg/down.svg" alt=""><?= $language["wholesale_trading_step2_p"]; ?></p>
                </div>
                <div class="align-items-center mb-2">
                  <h3>  <span class="fw-bold"><?= $language["wholesale_trading_step3_bold"];?></span>  <?= $language["wholesale_trading_step3"]; ?></h3>
                  <p><img src="<?=$base_url?>assets/img/svg/down.svg" alt=""><?= $language["wholesale_trading_step3_p"]; ?></p>
                </div>
                <div class="align-items-center mb-2">
                  <h3>  <span class="fw-bold"><?= $language["wholesale_trading_step4_bold"];?></span>  <?= $language["wholesale_trading_step4"]; ?></h3>
                  <p><img src="<?=$base_url?>assets/img/svg/down.svg" alt=""><?= $language["wholesale_trading_step4_p"]; ?></p>
                </div>
                <div class="align-items-center mb-2">
                  <h3>  <span class="fw-bold"><?= $language["wholesale_trading_step5_bold"];?></span>  <?= $language["wholesale_trading_step5"]; ?></h3>
                  <p><img src="<?=$base_url?>assets/img/svg/down.svg" alt=""><?= $language["wholesale_trading_step5_p"]; ?></p>
                </div>
                <div class="align-items-center mb-2">
                  <h3>  <span class="fw-bold"><?= $language["wholesale_trading_step6_bold"];?></span>  <?= $language["wholesale_trading_step6"]; ?></h3>
                  <p><img src="<?=$base_url?>assets/img/svg/down.svg" alt=""><?= $language["wholesale_trading_step6_p"]; ?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="<?=$base_url?>assets/img/services/quinoa_bg.png" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Trading Steps -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container section-title" data-aos="fade-up">
        <h2><?= $language["faqs_title"]?></h2>
      </div>

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
              </div>

              <div class="faq-item">
                <h3><?= $language["faqs"][1]["question"] ?></h3>
                <div class="faq-content">
                  <p><?= $language["faqs"][1]["answer"] ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3><?= $language["faqs"][2]["question"] ?></h3>
                <div class="faq-content">
                  <p><?= $language["faqs"][2]["answer"] ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div> 

              <div class="faq-item">
                <h3><?= $language["faqs"][3]["question"] ?></h3>
                <div class="faq-content">
                  <p><?= $language["faqs"][3]["answer"] ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div> 

              <div class="faq-item">
                <h3><?= $language["faqs"][4]["question"] ?></h3>
                <div class="faq-content">
                  <p><?= $language["faqs"][4]["answer"] ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div> 

              <div class="faq-item">
                <h3><?= $language["faqs"][5]["question"] ?></h3>
                <div class="faq-content">
                  <p><?= $language["faqs"][5]["answer"] ?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>

          </div> 

          <div class="col-lg-10 mx-auto text-center">
            <div class="cta-button" data-aos="fade-up" data-aos-delay="300" style="margin-top: 3rem;">
              <a href="<?= $base_url; ?>contact" class="btn btn-outline"><?= $language["contact_button"]; ?></a>
            </div>
          </div>

        </div>

      </div>

    </section> <!-- /FAQ Section -->

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