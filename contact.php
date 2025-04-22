<!DOCTYPE html>
<html lang="en">

<?php include "assets/include/head.php"; ?>

<body class="starter-page-page">

  <?php include "assets/include/header.php"; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <!--<div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Category</a></li>
            <li class="breadcrumb-item active current">Starter Page</li>
          </ol>
        </nav>
      </div>-->

      <div class="title-wrapper">
        <h1>Contact Us</h1>
        <p></p>
      </div>
    </div><!-- End Page Title -->

    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-3 skills-animation justify-content-md-center">

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box">
              <img src="assets/img/svg/mail.svg" alt="" style="width: 5rem; padding-bottom: 30px; ">
              <h3>info@ethnicltd.com</h3>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box">
              <img src="assets/img/svg/phone.svg" alt="" style="width: 5rem; padding-bottom: 30px; ">
              <h3>03-5826-7885</h3>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box">
              <img src="assets/img/svg/location.svg" alt="" style="width: 5rem; padding-bottom: 30px; ">
              <h3>Tokyo, Taito Ku <br> Higashi Ueno 5-24-9</h3>
            </div>
          </div>

        </div>

      </div>

      <div class="map" style="display: grid; justify-content: center; margin: 5rem 0;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.4345855706442!2d139.78022167457334!3d35.71552912809114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188e99ff32ba29%3A0x977ee388968b506f!2s5-ch%C5%8Dme-24-9%20Higashiueno%2C%20Taito%20City%2C%20Tokyo%20110-0015%2C%20Japan!5e0!3m2!1sen!2scl!4v1745281474903!5m2!1sen!2scl" width="400" height="300" style="border:0;" 
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

    </section><!-- /Skills Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="content" data-aos="fade-up" data-aos-delay="200">
              <div class="section-category mb-3"></div>
              <h2 class="display-5 mb-4">Subscribe to Our Newsletter</h2>
              <p class="lead mb-4">Join our newsletter to receive fresh updates, market insights, and new opportunities.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="contact-form card" data-aos="fade-up" data-aos-delay="300">
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

                      <button type="submit" class="btn btn-submit w-100">Submit</button>
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