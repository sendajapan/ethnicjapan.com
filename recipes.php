<?php include "assets/include/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php include $base_path . "assets/include/head.php"; ?>

<body class="starter-page-page">

  <?php include $base_path . "assets/include/header.php"; ?>

  <main class="main">

    <!-- Recipe Section -->
    <section id="portfolio" class="portfolio section">
    
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Recipes</h2>
        <p>Explore seasonal, organic recipes made with real ingredients.</p>
      </div>
    
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row row-cols-1 row-cols-md-4 g-4 align-items-stretch" data-aos="fade-up" data-aos-delay="300">
    
          <div class="col d-flex">
            <a href="<?=$base_url?>recipe?chia-pudding-recipe">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="<?=$base_url?>assets/img/recipes/chia_pudding.webp" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category">Breakfast</span>
                  <h3>Chia Seed Pudding</h3>
                  <p>A nutritious porridge to start the day with energy!</p>
                </div>
              </div>
            </a>
          </div>
    
          <div class="col d-flex">
            <a href="<?=$base_url?>recipe?cocoa-chia-cookies">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="<?=$base_url?>assets/img/recipes/cocoa_chia_cookies.webp" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category">Snacks</span>
                  <h3>Cocoa Chia Cookies</h3>
                  <p>A recipe to sweeten your day and make everything even tastier.</p>
                </div>
              </div>
            </a>
          </div>
    
          <div class="col d-flex">
            <a href="<?=$base_url?>recipe?blueberry-chia-juice">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="<?=$base_url?>assets/img/recipes/juice.webp" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category">Drinks</span>
                  <h3>Blueberry and Chia Juice</h3>
                  <p>A nutritious yet refreshing drink to get your energy for the day.</p>
                </div>
              </div>
            </a>
          </div>
    
          <div class="col d-flex">
            <a href="<?=$base_url?>recipe?focaccia">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="<?=$base_url?>assets/img/recipes/focaccia.jpg" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category">Savory</span>
                  <h3>Focaccia with Garlic Oil</h3>
                  <p>For those who like the delicious aroma and flavor of garlic, how about a recipe?</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col d-flex">
            <a href="<?=$base_url?>recipe?soup">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="<?=$base_url?>assets/img/recipes/soup.jpg" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category">Savory</span>
                  <h3>Creamy Soup of Sprouted Lentils, Tomato and Olive Oil</h3>
                  <p>That recipe for those who love flavors and creamy soups!</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col d-flex">
            <a href="<?=$base_url?>recipe?arugula-pesto">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="<?=$base_url?>assets/img/recipes/arugula_pesto.webp" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category">Savory</span>
                  <h3>Arugula Pesto with Gorgonzola</h3>
                  <p>Arugula pesto is a tasty, slightly spicy sauce. </p>
                </div>
              </div>
            </a>
          </div>

          <div class="col d-flex">
            <a href="<?=$base_url?>recipe?breakfast-bowl">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="<?=$base_url?>assets/img/recipes/bowl.webp" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category">Breakfast</span>
                  <h3>Breakfast Bowl</h3>
                  <p>A delicious and healthy breakfast option, the Breakfast Bowl will become a regular part of your routine!</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col d-flex">
            <a href="<?=$base_url?>recipe?bruschetta">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="<?=$base_url?>assets/img/recipes/bruschetta.jpg" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category">Snacks</span>
                  <h3>Bruschetta with Garlic Olichia</h3>
                  <p>Bruschetta is an Italian appetizer made with a slice of rustic bread, made with dark, thick flour.</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col d-flex">
            <a href="<?=$base_url?>recipe?avocado-toast">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="<?=$base_url?>assets/img/recipes/toast.webp" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category">Snacks</span>
                  <h3>Avocado Toast with Oregano Oil</h3>
                  <p>Avocado is one of the most consumed foods in Brazil. But usually, its recipes are sweet. How about this trend full of nutrients with a taste of oregano?</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col d-flex">
            <a href="<?=$base_url?>recipe?protein-smoothie">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="<?=$base_url?>assets/img/recipes/smoothie.webp" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category">Drinks</span>
                  <h3>Refreshing Protein Smoothie</h3>
                  <p>Smoothies are complete juices and ideal for those seeking a healthy diet, rich in fiber and vitamins. </p>
                </div>
              </div>
            </a>
          </div>

          <div class="col d-flex">
            <a href="<?=$base_url?>recipe?ratatouille">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="<?=$base_url?>assets/img/recipes/ratatouille.jpeg" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category">Savory</span>
                  <h3>Ratatouille with Olichia with natural Basil aroma</h3>
                  <p>Ratatouille is a classic French dish that became very famous thanks to the film of the same name.</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col d-flex">
            <a href="<?=$base_url?>recipe?yogurt-chia">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="<?=$base_url?>assets/img/recipes/yogurt.jpg" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category">Breakfast</span>
                  <h3>Perfect Combination of Yogurt and Chia Seeds</h3>
                  <p>This combination became known as Chia Pudding. It is easy to prepare and perfect for breakfast, snacks and even dessert. </p>
                </div>
              </div>
            </a>
          </div>

          <div class="col d-flex">
            <a href="<?=$base_url?>recipe?shake">
              <div class="portfolio-card d-flex flex-column h-100 w-100">
                <div class="portfolio-image">
                  <img src="<?=$base_url?>assets/img/recipes/shake.webp" class="img-fluid" alt="" loading="lazy">
                </div>
                <div class="portfolio-content">
                  <span class="category">Drinks</span>
                  <h3>Pre-workout Shake</h3>
                  <p>Healthy, quick and easy shake to make for you to consume before training or at any time of the day.</p>
                </div>
              </div>
            </a>
          </div>
    
        </div>
      </div>
    </section><!-- /Recipe Section -->

  </main>

  <?php include $base_path . "assets/include/footer.php"; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=$base_url?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=$base_url?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?=$base_url?>assets/vendor/aos/aos.js"></script>
  <script src="<?=$base_url?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?=$base_url?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=$base_url?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?=$base_url?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=$base_url?>assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="<?=$base_url?>assets/js/main.js"></script>

</body>

</html>