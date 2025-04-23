<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="assets/img/icon.png" alt="">
        <h1>ETHNIC LTD</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="item active">Home</a></li>
          <li><a href="about.php" class="item">About</a></li>
          <li><a href="services.php" class="item">Services</a></li>
          <li><a href="testimonials.php" class="item">Testimonials</a></li>
          <li><a href="contact.php" class="item">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <script>
    $('.navmenu .item').on("click", function() {
      $('.navmenu .item').removeClass('active');
      $(this).addClass('active');
    });
  </script>