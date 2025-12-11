<?php include "assets/include/config.php"; ?>


<!DOCTYPE html>
<html lang="en">

<?php $title = $language['title_contact'];
include ($base_path . "assets/include/head.php"); ?>

<body class="service-details-page">

  <?php include $base_path . "assets/include/header.php"; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      
      <div class="title-wrapper">
        <h1><?= $language["contact_us"] ?></h1>
        <p><?= $language["contact_us_p"] ?></p>
      </div>
    </div><!-- End Page Title -->

    <section id="skills" class="skills section" >

      <div class="container">

        <div class="row g-3 skills-animation justify-content-md-center align-items-stretch">

          <div class="col-md-6 col-lg-3">
            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/svg/mail1.svg" alt="" style="width: 5rem; padding-bottom: 25px; padding-right: 0;">
              <p class="text-center"><?= $language["contact_cards"][0]["title"] ?></p>
              <h3><?= $language["contact_cards"][0]["paragraph"] ?></h3>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/svg/phone1.svg" alt="" style="width: 5rem; padding-bottom: 25px; padding-right: 0;">
              <p class="text-center"><?= $language["contact_cards"][1]["title"] ?></p>
              <h3><?= $language["contact_cards"][1]["paragraph"] ?></h3>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="skill-box h-100">
              <img src="<?=$base_url?>assets/img/svg/location1.svg" alt="" style="width: 5rem; padding-bottom: 25px; padding-right: 0;">
              <p class="text-center"><?= $language["contact_cards"][2]["title"] ?></p>
              <h3><?= $language["contact_cards"][2]["paragraph"] ?></h3>
          </div>
        </div>
      </div>
    </section><!-- /Skills Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact light-background">
      
      <div class="contact-form">
        <!--<div class="card-body p-2 p-lg-3">-->

          <div class="container my-5">
            <div class="card shadow-sm p-4 mx-auto w-100 w-md-75 w-lg-50" style="max-width: 900px; border: none; border-radius: 12px; background: #fff;">
              <h4 class="mb-4 text-center fw-semibold"><?= $language["contact_title"] ?></h4>
          
              <form class="row g-3 align-items-start php-email-form" method="post">
                <!-- Company Name -->
                <div class="col-md-3 text-md-end">
                  <label for="companyName" class="col-form-label fw-semibold"><?= $language["contact_label1"] ?></label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="companyName" placeholder="" Required>
                </div>
          
                <!-- Contact Person -->
                <div class="col-md-3 text-md-end">
                  <label for="contactPerson" class="col-form-label fw-semibold"><?= $language["contact_label2"] ?></label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" id="contactPerson" placeholder="" Required>
                </div>
          
                <!-- Phone Number -->
                <div class="col-md-3 text-md-end">
                  <label for="phoneNumber" class="col-form-label fw-semibold"><?= $language["contact_label3"] ?></label>
                </div>
                <div class="col-md-9">
                  <input type="tel" class="form-control" id="phoneNumber" placeholder="" Required>
                </div>
          
                <!-- Email Address -->
                <div class="col-md-3 text-md-end">
                  <label for="email" class="col-form-label fw-semibold"><?= $language["contact_label4"] ?></label>
                </div>
                <div class="col-md-9">
                  <input type="email" class="form-control" id="email" placeholder="" Required>
                </div>
          
                <!-- Email Confirmation -->
                <div class="col-md-3 text-md-end">
                  <label for="confirmEmail" class="col-form-label fw-semibold"><?= $language["contact_label5"] ?></label>
                </div>
                <div class="col-md-9">
                  <input type="email" class="form-control" id="confirmEmail" placeholder="" Required>
                </div>
          
                <!-- Inquiry Details -->
                <div class="col-md-3 text-md-end">
                  <label for="inquiryDetails" class="col-form-label fw-semibold"><?= $language["contact_label6"] ?></label>
                </div>
                <div class="col-md-9">
                  <textarea class="form-control" id="inquiryDetails" rows="4" placeholder="" Required></textarea>
                </div>
          
                <!-- Submit Button -->
                <div class="col-12 text-center">
                  <div class="loading"><?= $language["contact_us_loading"] ?></div>
                  <div class="error-message"></div>
                  <div class="sent-message"><?= $language["contact_us_sent_message"] ?></div>
  
                  <button type="submit" class="btn btn-submit w-100"><?= $language["contact_submit"]?></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->







      <!--<div class="row g-5">
          <div class="col-lg-6">
            <img src="<?//=$base_url?>assets/img/services/meeting.webp" alt="" class="rounded mt-5 mr-3" style="width:30rem;">
          </div>
      
          <div class="col-lg-6">
            <div class="contact-form card">
              <div class="card-body p-2 p-lg-3">
      
                <form action="forms/contact" method="post" class="php-email-form">
                  <div class="row gy-2">
      
                    <div class="col-12">
                      <input type="text" name="name" class="form-control" placeholder="Name" required="">
                    </div>
      
                    <div class="col-12 ">
                      <input type="email" class="form-control" name="email" placeholder="Email" required="">
                    </div>

                    <div class="col-12">
                      <input type="text" class="form-control" name="phone" placeholder="Phone Number" required="">
                    </div>
          
                    <div class="col-12">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>
      
                    <div class="col-12">
                      <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                    </div>
      
                    <div class="col-12 text-center">
                      <div class="loading"><?//= $language["contact_us_loading"] ?></div>
                      <div class="error-message"></div>
                      <div class="sent-message"><?//= $language["contact_us_sent_message"] ?></div>
      
                      <button type="submit" class="btn btn-submit w-100"><?//= $language["contact_submit"]?></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>/Contact Section -->










      <!-- Map Section -->
      <div class="container-fluid p-0">
        <div class="map light-background">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.4345855706442!2d139.78022167457334!3d35.71552912809114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188e99ff32ba29%3A0x977ee388968b506f!2s5-ch%C5%8Dme-24-9%20Higashiueno%2C%20Taito%20City%2C%20Tokyo%20110-0015%2C%20Japan!5e0!3m2!1sen!2scl!4v1745281474903!5m2!1sen!2scl" width="100%" height="500" style="border:0;" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div><!--/Map Section-->

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