<?php include "assets/include/config.php"; ?>


<!DOCTYPE html>
<html lang="en">

<?php include ($base_path . "assets/include/head.php"); ?>

<body class="service-details-page">

  <?php include $base_path . "assets/include/header.php"; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      
      <div class="title-wrapper">
        <h1><?= $language["contact_us"] ?></h1>
        <p></p>
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
    <section id="contact" class="contact section light-background">

    <!-- Section Title -->
    <div class="container section-title">
        <h2><?= $language["contact_us_message"] ?></h2>
      </div> <!-- /End Section Title -->

      <div class="container">
      
        <div class="row g-5">
          <div class="col-lg-6">
            <img src="<?=$base_url?>assets/img/services/meeting.webp" alt="" class="rounded mt-5 mr-3" style="width:30rem;">
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
                    <select name="country" class="form-control" id="country">
                      <option value="0" disabled selected style="color: grey;"><?= $language["contact_us_country"] ?></option>
                      <option value="algeria"><?= $language["algeria"] ?></option>
                      <option value="andorra"><?= $language["andorra"] ?></option>
                      <option value="angola"><?= $language["angola"] ?></option>
                      <option value="antigua_and_barbuda"><?= $language["antigua_and_barbuda"] ?></option>
                      <option value="argentina"><?= $language["argentina"] ?></option>
                      <option value="armenia"><?= $language["armenia"] ?></option>
                      <option value="australia"><?= $language["australia"] ?></option>
                      <option value="austria"><?= $language["austria"] ?></option>
                      <option value="azerbaijan"><?= $language["azerbaijan"] ?></option>
                      <option value="bahamas"><?= $language["bahamas"] ?></option>
                      <option value="bahrain"><?= $language["bahrain"] ?></option>
                      <option value="bangladesh"><?= $language["bangladesh"] ?></option>
                      <option value="barbados"><?= $language["barbados"] ?></option>
                      <option value="belarus"><?= $language["belarus"] ?></option>
                      <option value="belgium"><?= $language["belgium"] ?></option>
                      <option value="belize"><?= $language["belize"] ?></option>
                      <option value="benin"><?= $language["benin"] ?></option>
                      <option value="bhutan"><?= $language["bhutan"] ?></option>
                      <option value="bolivia"><?= $language["bolivia"] ?></option>
                      <option value="bosnia_and_herzegovina"><?= $language["bosnia_and_herzegovina"] ?></option>
                      <option value="botswana"><?= $language["botswana"] ?></option>
                      <option value="brazil"><?= $language["brazil"] ?></option>
                      <option value="brunei"><?= $language["brunei"] ?></option>
                      <option value="bulgaria"><?= $language["bulgaria"] ?></option>
                      <option value="burkina_faso"><?= $language["burkina_faso"] ?></option>
                      <option value="burundi"><?= $language["burundi"] ?></option>
                      <option value="cabo_verde"><?= $language["cabo_verde"] ?></option>
                      <option value="cambodia"><?= $language["cambodia"] ?></option>
                      <option value="cameroon"><?= $language["cameroon"] ?></option>
                      <option value="canada"><?= $language["canada"] ?></option>
                      <option value="central_african_republic"><?= $language["central_african_republic"] ?></option>
                      <option value="chad"><?= $language["chad"] ?></option>
                      <option value="chile"><?= $language["chile"] ?></option>
                      <option value="china"><?= $language["china"] ?></option>
                      <option value="colombia"><?= $language["colombia"] ?></option>
                      <option value="comoros"><?= $language["comoros"] ?></option>
                      <option value="congo_brazzaville"><?= $language["congo_brazzaville"] ?></option>
                      <option value="congo_kinshasa"><?= $language["congo_kinshasa"] ?></option>
                      <option value="costa_rica"><?= $language["costa_rica"] ?></option>
                      <option value="croatia"><?= $language["croatia"] ?></option>
                      <option value="cuba"><?= $language["cuba"] ?></option>
                      <option value="cyprus"><?= $language["cyprus"] ?></option>
                      <option value="czech_republic"><?= $language["czech_republic"] ?></option>
                      <option value="denmark"><?= $language["denmark"] ?></option>
                      <option value="djibouti"><?= $language["djibouti"] ?></option>
                      <option value="dominica"><?= $language["dominica"] ?></option>
                      <option value="dominican_republic"><?= $language["dominican_republic"] ?></option>
                      <option value="ecuador"><?= $language["ecuador"] ?></option>
                      <option value="egypt"><?= $language["egypt"] ?></option>
                      <option value="el_salvador"><?= $language["el_salvador"] ?></option>
                      <option value="equatorial_guinea"><?= $language["equatorial_guinea"] ?></option>
                      <option value="eritrea"><?= $language["eritrea"] ?></option>
                      <option value="estonia"><?= $language["estonia"] ?></option>
                      <option value="eswatini"><?= $language["eswatini"] ?></option>
                      <option value="ethiopia"><?= $language["ethiopia"] ?></option>
                      <option value="fiji"><?= $language["fiji"] ?></option>
                      <option value="finland"><?= $language["finland"] ?></option>
                      <option value="france"><?= $language["france"] ?></option>
                      <option value="gabon"><?= $language["gabon"] ?></option>
                      <option value="gambia"><?= $language["gambia"] ?></option>
                      <option value="georgia"><?= $language["georgia"] ?></option>
                      <option value="germany"><?= $language["germany"] ?></option>
                      <option value="ghana"><?= $language["ghana"] ?></option>
                      <option value="greece"><?= $language["greece"] ?></option>
                      <option value="grenada"><?= $language["grenada"] ?></option>
                      <option value="guatemala"><?= $language["guatemala"] ?></option>
                      <option value="guinea"><?= $language["guinea"] ?></option>
                      <option value="guinea_bissau"><?= $language["guinea_bissau"] ?></option>
                      <option value="guyana"><?= $language["guyana"] ?></option>
                      <option value="haiti"><?= $language["haiti"] ?></option>
                      <option value="honduras"><?= $language["honduras"] ?></option>
                      <option value="hungary"><?= $language["hungary"] ?></option>
                      <option value="iceland"><?= $language["iceland"] ?></option>
                      <option value="india"><?= $language["india"] ?></option>
                      <option value="indonesia"><?= $language["indonesia"] ?></option>
                      <option value="iran"><?= $language["iran"] ?></option>
                      <option value="iraq"><?= $language["iraq"] ?></option>
                      <option value="ireland"><?= $language["ireland"] ?></option>
                      <option value="israel"><?= $language["israel"] ?></option>
                      <option value="italy"><?= $language["italy"] ?></option>
                      <option value="ivory_coast"><?= $language["ivory_coast"] ?></option>
                      <option value="jamaica"><?= $language["jamaica"] ?></option>
                      <option value="japan"><?= $language["japan"] ?></option>
                      <option value="jordan"><?= $language["jordan"] ?></option>
                      <option value="kazakhstan"><?= $language["kazakhstan"] ?></option>
                      <option value="kenya"><?= $language["kenya"] ?></option>
                      <option value="kiribati"><?= $language["kiribati"] ?></option>
                      <option value="kosovo"><?= $language["kosovo"] ?></option>
                      <option value="kuwait"><?= $language["kuwait"] ?></option>
                      <option value="kyrgyzstan"><?= $language["kyrgyzstan"] ?></option>
                      <option value="laos"><?= $language["laos"] ?></option>
                      <option value="latvia"><?= $language["latvia"] ?></option>
                      <option value="lebanon"><?= $language["lebanon"] ?></option>
                      <option value="lesotho"><?= $language["lesotho"] ?></option>
                      <option value="liberia"><?= $language["liberia"] ?></option>
                      <option value="libya"><?= $language["libya"] ?></option>
                      <option value="liechtenstein"><?= $language["liechtenstein"] ?></option>
                      <option value="lithuania"><?= $language["lithuania"] ?></option>
                      <option value="luxembourg"><?= $language["luxembourg"] ?></option>
                      <option value="madagascar"><?= $language["madagascar"] ?></option>
                      <option value="malawi"><?= $language["malawi"] ?></option>
                      <option value="malaysia"><?= $language["malaysia"] ?></option>
                      <option value="maldives"><?= $language["maldives"] ?></option>
                      <option value="mali"><?= $language["mali"] ?></option>
                      <option value="malta"><?= $language["malta"] ?></option>
                      <option value="marshall_islands"><?= $language["marshall_islands"] ?></option>
                      <option value="mauritania"><?= $language["mauritania"] ?></option>
                      <option value="mauritius"><?= $language["mauritius"] ?></option>
                      <option value="mexico"><?= $language["mexico"] ?></option>
                      <option value="micronesia"><?= $language["micronesia"] ?></option>
                      <option value="moldova"><?= $language["moldova"] ?></option>
                      <option value="monaco"><?= $language["monaco"] ?></option>
                      <option value="mongolia"><?= $language["mongolia"] ?></option>
                      <option value="montenegro"><?= $language["montenegro"] ?></option>
                      <option value="morocco"><?= $language["morocco"] ?></option>
                      <option value="mozambique"><?= $language["mozambique"] ?></option>
                      <option value="myanmar"><?= $language["myanmar"] ?></option>
                      <option value="namibia"><?= $language["namibia"] ?></option>
                      <option value="nauru"><?= $language["nauru"] ?></option>
                      <option value="nepal"><?= $language["nepal"] ?></option>
                      <option value="netherlands"><?= $language["netherlands"] ?></option>
                      <option value="new_zealand"><?= $language["new_zealand"] ?></option>
                      <option value="nicaragua"><?= $language["nicaragua"] ?></option>
                      <option value="niger"><?= $language["niger"] ?></option>
                      <option value="nigeria"><?= $language["nigeria"] ?></option>
                      <option value="north_korea"><?= $language["north_korea"] ?></option>
                      <option value="north_macedonia"><?= $language["north_macedonia"] ?></option>
                      <option value="norway"><?= $language["norway"] ?></option>
                      <option value="oman"><?= $language["oman"] ?></option>
                      <option value="pakistan"><?= $language["pakistan"] ?></option>
                      <option value="palau"><?= $language["palau"] ?></option>
                      <option value="panama"><?= $language["panama"] ?></option>
                      <option value="papua_new_guinea"><?= $language["papua_new_guinea"] ?></option>
                      <option value="paraguay"><?= $language["paraguay"] ?></option>
                      <option value="peru"><?= $language["peru"] ?></option>
                      <option value="philippines"><?= $language["philippines"] ?></option>
                      <option value="poland"><?= $language["poland"] ?></option>
                      <option value="portugal"><?= $language["portugal"] ?></option>
                      <option value="qatar"><?= $language["qatar"] ?></option>
                      <option value="romania"><?= $language["romania"] ?></option>
                      <option value="russia"><?= $language["russia"] ?></option>
                      <option value="rwanda"><?= $language["rwanda"] ?></option>
                      <option value="saint_kitts_and_nevis"><?= $language["saint_kitts_and_nevis"] ?></option>
                      <option value="saint_lucia"><?= $language["saint_lucia"] ?></option>
                      <option value="saint_vincent_and_the_grenadines"><?= $language["saint_vincent_and_the_grenadines"] ?></option>
                      <option value="samoa"><?= $language["samoa"] ?></option>
                      <option value="san_marino"><?= $language["san_marino"] ?></option>
                      <option value="sao_tome_and_principe"><?= $language["sao_tome_and_principe"] ?></option>
                      <option value="saudi_arabia"><?= $language["saudi_arabia"] ?></option>
                      <option value="senegal"><?= $language["senegal"] ?></option>
                      <option value="serbia"><?= $language["serbia"] ?></option>
                      <option value="seychelles"><?= $language["seychelles"] ?></option>
                      <option value="sierra_leone"><?= $language["sierra_leone"] ?></option>
                      <option value="singapore"><?= $language["singapore"] ?></option>
                      <option value="slovakia"><?= $language["slovakia"] ?></option>
                      <option value="slovenia"><?= $language["slovenia"] ?></option>
                      <option value="solomon_islands"><?= $language["solomon_islands"] ?></option>
                      <option value="somalia"><?= $language["somalia"] ?></option>
                      <option value="south_africa"><?= $language["south_africa"] ?></option>
                      <option value="south_korea"><?= $language["south_korea"] ?></option>
                      <option value="south_sudan"><?= $language["south_sudan"] ?></option>
                      <option value="spain"><?= $language["spain"] ?></option>
                      <option value="sri_lanka"><?= $language["sri_lanka"] ?></option>
                      <option value="sudan"><?= $language["sudan"] ?></option>
                      <option value="suriname"><?= $language["suriname"] ?></option>
                      <option value="sweden"><?= $language["sweden"] ?></option>
                      <option value="switzerland"><?= $language["switzerland"] ?></option>
                      <option value="syria"><?= $language["syria"] ?></option>
                      <option value="taiwan"><?= $language["taiwan"] ?></option>
                      <option value="tajikistan"><?= $language["tajikistan"] ?></option>
                      <option value="tanzania"><?= $language["tanzania"] ?></option>
                      <option value="thailand"><?= $language["thailand"] ?></option>
                      <option value="timor_leste"><?= $language["timor_leste"] ?></option>
                      <option value="togo"><?= $language["togo"] ?></option>
                      <option value="tonga"><?= $language["tonga"] ?></option>
                      <option value="trinidad_and_tobago"><?= $language["trinidad_and_tobago"] ?></option>
                      <option value="tunisia"><?= $language["tunisia"] ?></option>
                      <option value="turkey"><?= $language["turkey"] ?></option>
                      <option value="turkmenistan"><?= $language["turkmenistan"] ?></option>
                      <option value="tuvalu"><?= $language["tuvalu"] ?></option>
                      <option value="uganda"><?= $language["uganda"] ?></option>
                      <option value="ukraine"><?= $language["ukraine"] ?></option>
                      <option value="united_arab_emirates"><?= $language["united_arab_emirates"] ?></option>
                      <option value="united_kingdom"><?= $language["united_kingdom"] ?></option>
                      <option value="united_states"><?= $language["united_states"] ?></option>
                      <option value="uruguay"><?= $language["uruguay"] ?></option>
                      <option value="uzbekistan"><?= $language["uzbekistan"] ?></option>
                      <option value="vanuatu"><?= $language["vanuatu"] ?></option>
                      <option value="vatican_city"><?= $language["vatican_city"] ?></option>
                      <option value="venezuela"><?= $language["venezuela"] ?></option>
                      <option value="vietnam"><?= $language["vietnam"] ?></option>
                      <option value="yemen"><?= $language["yemen"] ?></option>
                      <option value="zambia"><?= $language["zambia"] ?></option>
                      <option value="zimbabwe"><?= $language["zimbabwe"] ?></option>
                    </select>
    
                    </div>
      
                    <div class="col-12">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>
      
                    <div class="col-12">
                      <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                    </div>
      
                    <div class="col-12 text-center">
                      <div class="loading"><?= $language["contact_us_loading"] ?></div>
                      <div class="error-message"></div>
                      <div class="sent-message"><?= $language["contact_us_sent_message"] ?></div>
      
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