<!DOCTYPE html>
<html lang="en">

<?php include "assets/include/head.php"; ?>

<body class="service-details-page">

<?php include "assets/include/header.php"; ?>


  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <!--<div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Category</a></li>
            <li class="breadcrumb-item active current">Service Details</li>
          </ol>
        </nav>
      </div>-->

      <div class="title-wrapper">
        <h1>Service Details</h1>
        <p>Eco-friendly properties & growth support for your business.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="service-details-slider swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": 1,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="assets/img/services/grain.avif" alt="" class="img-fluid" loading="lazy" style="width: 50rem;">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/services/business1.avif" alt="" class="img-fluid" loading="lazy" style="width: 50rem;">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/services/house.avif" alt="" class="img-fluid" loading="lazy">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>

            <div class="content mt-5">
              <h3>Sustainable Solutions</h3>
              <p>
                Our services are designed to help your business thrive sustainably, offering eco-friendly property solutions and tailored growth support that ensures both environmental responsibility and long-term success.           </p>
              <p>
                With a focus on innovation and sustainability, we provide the tools and expertise to help your business grow while making a positive impact on the environment.              
              </p>

              <div class="features mt-4">
                <div class="row gy-4">
                  <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-box d-flex align-items-center">
                      <i class="bi bi-check"></i>
                      <h4>Organic Food Import & Export</h4>
                    </div>
                  </div>
                  <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-box d-flex align-items-center">
                      <i class="bi bi-check"></i>
                      <h4>Property Services</h4>
                    </div>
                  </div>
                  <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-box d-flex align-items-center">
                      <i class="bi bi-check"></i>
                      <h4>Business Consultancy</h4>
                    </div>
                  </div>
                  <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-box d-flex align-items-center">
                      <i class="bi bi-check"></i>
                      <h4>Growth Support</h4>
                    </div>
                  </div>
                </div>
              </div>

              <p class="mt-4">
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
              </p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="service-info">
              <h4>Service Information</h4>
              <div class="info-item">
                <i class="bi bi-clock"></i>
                <h5>Project Duration</h5>
                <p>3-6 months</p>
              </div>
              <div class="info-item">
                <i class="bi bi-person-check"></i>
                <h5>Project Manager</h5>
                <p>Sarah Johnson</p>
              </div>
              <div class="info-item">
                <i class="bi bi-telephone"></i>
                <h5>Contact Support</h5>
                <p>+1 (555) 123-4567</p>
              </div>
            </div>

            <div class="related-services mt-5">
              <h4>Related Services</h4>
              <div class="service-item">
                <i class="bi bi-bar-chart"></i>
                <h5><a href="#">Business Analytics</a></h5>
                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
              </div>
              <div class="service-item">
                <i class="bi bi-briefcase"></i>
                <h5><a href="#">Business Consulting</a></h5>
                <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
              </div>
              <div class="service-item">
                <i class="bi bi-graph-up"></i>
                <h5><a href="#">Financial Planning</a></h5>
                <p>Sed perspiciatis omnis iste natus error sit voluptatem doloremque</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

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