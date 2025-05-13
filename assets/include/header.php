<?php 
ini_set('display_errors', 'false');
  error_reporting(-1);
?>
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="assets/img/icon.png" alt="">
        <h1>ETHNIC LTD</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="item <?= ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a></li>
          <li><a href="about.php" class="item <?= ($currentPage == 'about.php') ? 'active' : '' ?>">About</a></li>
          <li><a href="services.php" class="item <?= ($currentPage == 'services.php') ? 'active' : '' ?>">Services</a></li>
          <li><a href="testimonials.php" class="item <?= ($currentPage == 'testimonials.php') ? 'active' : '' ?>">Testimonials</a></li>
          <li><a href="contact.php" class="item <?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="lang d-flex ">
        <div class="header-social-links">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      
        <li>
          <a href="">
					  <?php if($lang == 'jp'){ ?>
					  	<span id='flag_up' class="fi fi-jp"></span><i class='bx bx-chevron-down'></i> 
					  <?php }else{ ?>
					  	<span id='flag_up' class="fi fi-us"></span><i class='bx bx-chevron-down'></i>
					  <?php } ?>
				  </a>

          <ul class="drop-down">
            <li style="border-bottom: 1px solid rgba(190, 190, 190, 0.5);"><a href="http://localhost/ethnicjapan.com/include/switch_lang.php?lang=jp"><span id='flag' class="fi fi-jp" ></span><span id='country'>Japanese</span></a></li>
            <li><a href="http://localhost/ethnicjapan.com/include/switch_lang.php?lang=en"><span id='flag' class="fi fi-us" ></span><span id='country'>English</span></a></li>
          </ul>
        </li>
      </div>

    </div>
  </header>

  <script>
    $('.navmenu .item').on("click", function() {
      $('.navmenu .item').removeClass('active');
      $(this).addClass('active');
    });
  </script>