<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<?php include "assets/include/init.php"; ?>


<!DOCTYPE html>
<html lang="en">

<?php include "assets/include/head.php"; ?>

<body class="starter-page-page">

  <?php include "assets/include/header.php"; ?>

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
              <img src="assets/img/svg/mail.svg" alt="" style="width: 5rem; padding-bottom: 25px; ">
              <p><?= $language["contact_cards"][0]["title"] ?></p>
              <h3><?= $language["contact_cards"][0]["paragraph"] ?></h3>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="skill-box h-100">
              <img src="assets/img/svg/phone.svg" alt="" style="width: 5rem; padding-bottom: 25px; ">
              <p><?= $language["contact_cards"][1]["title"] ?></p>
              <h3><?= $language["contact_cards"][1]["paragraph"] ?></h3>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="skill-box h-100">
              <img src="assets/img/svg/location.svg" alt="" style="width: 5rem; padding-bottom: 25px; ">
              <p><?= $language["contact_cards"][2]["title"] ?></p>
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
            <img src="assets/img/services/meeting.webp" alt="" class="rounded mt-5 mr-3" style="width:30rem;">
          </div>
      
          <div class="col-lg-6">
            <div class="contact-form card">
              <div class="card-body p-2 p-lg-3">
      
                <form action="forms/contact.php" method="post" class="php-email-form">
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


        <!--<optgroup id="country-optgroup-Africa" label="Africa">
            <option value="DZ" label="Algeria">Algeria</option>
            <option value="AO" label="Angola">Angola</option>
            <option value="BJ" label="Benin">Benin</option>
            <option value="BW" label="Botswana">Botswana</option>
            <option value="BF" label="Burkina Faso">Burkina Faso</option>
            <option value="BI" label="Burundi">Burundi</option>
            <option value="CM" label="Cameroon">Cameroon</option>
            <option value="CV" label="Cape Verde">Cape Verde</option>
            <option value="CF" label="Central African Republic">Central African Republic</option>
            <option value="TD" label="Chad">Chad</option>
            <option value="KM" label="Comoros">Comoros</option>
            <option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
            <option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
            <option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
            <option value="DJ" label="Djibouti">Djibouti</option>
            <option value="EG" label="Egypt">Egypt</option>
            <option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
            <option value="ER" label="Eritrea">Eritrea</option>
            <option value="ET" label="Ethiopia">Ethiopia</option>
            <option value="GA" label="Gabon">Gabon</option>
            <option value="GM" label="Gambia">Gambia</option>
            <option value="GH" label="Ghana">Ghana</option>
            <option value="GN" label="Guinea">Guinea</option>
            <option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
            <option value="KE" label="Kenya">Kenya</option>
            <option value="LS" label="Lesotho">Lesotho</option>
            <option value="LR" label="Liberia">Liberia</option>
            <option value="LY" label="Libya">Libya</option>
            <option value="MG" label="Madagascar">Madagascar</option>
            <option value="MW" label="Malawi">Malawi</option>
            <option value="ML" label="Mali">Mali</option>
            <option value="MR" label="Mauritania">Mauritania</option>
            <option value="MU" label="Mauritius">Mauritius</option>
            <option value="YT" label="Mayotte">Mayotte</option>
            <option value="MA" label="Morocco">Morocco</option>
            <option value="MZ" label="Mozambique">Mozambique</option>
            <option value="NA" label="Namibia">Namibia</option>
            <option value="NE" label="Niger">Niger</option>
            <option value="NG" label="Nigeria">Nigeria</option>
            <option value="RW" label="Rwanda">Rwanda</option>
            <option value="RE" label="Réunion">Réunion</option>
            <option value="SH" label="Saint Helena">Saint Helena</option>
            <option value="SN" label="Senegal">Senegal</option>
            <option value="SC" label="Seychelles">Seychelles</option>
            <option value="SL" label="Sierra Leone">Sierra Leone</option>
            <option value="SO" label="Somalia">Somalia</option>
            <option value="ZA" label="South Africa">South Africa</option>
            <option value="SD" label="Sudan">Sudan</option>
            <option value="SZ" label="Swaziland">Swaziland</option>
            <option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
            <option value="TZ" label="Tanzania">Tanzania</option>
            <option value="TG" label="Togo">Togo</option>
            <option value="TN" label="Tunisia">Tunisia</option>
            <option value="UG" label="Uganda">Uganda</option>
            <option value="EH" label="Western Sahara">Western Sahara</option>
            <option value="ZM" label="Zambia">Zambia</option>
            <option value="ZW" label="Zimbabwe">Zimbabwe</option>
        </optgroup>
        <optgroup id="country-optgroup-Americas" label="Americas">
            <option value="AI" label="Anguilla">Anguilla</option>
            <option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="AR" label="Argentina">Argentina</option>
            <option value="AW" label="Aruba">Aruba</option>
            <option value="BS" label="Bahamas">Bahamas</option>
            <option value="BB" label="Barbados">Barbados</option>
            <option value="BZ" label="Belize">Belize</option>
            <option value="BM" label="Bermuda">Bermuda</option>
            <option value="BO" label="Bolivia">Bolivia</option>
            <option value="BR" label="Brazil">Brazil</option>
            <option value="VG" label="British Virgin Islands">British Virgin Islands</option>
            <option value="CA" label="Canada">Canada</option>
            <option value="KY" label="Cayman Islands">Cayman Islands</option>
            <option value="CL" label="Chile">Chile</option>
            <option value="CO" label="Colombia">Colombia</option>
            <option value="CR" label="Costa Rica">Costa Rica</option>
            <option value="CU" label="Cuba">Cuba</option>
            <option value="DM" label="Dominica">Dominica</option>
            <option value="DO" label="Dominican Republic">Dominican Republic</option>
            <option value="EC" label="Ecuador">Ecuador</option>
            <option value="SV" label="El Salvador">El Salvador</option>
            <option value="FK" label="Falkland Islands">Falkland Islands</option>
            <option value="GF" label="French Guiana">French Guiana</option>
            <option value="GL" label="Greenland">Greenland</option>
            <option value="GD" label="Grenada">Grenada</option>
            <option value="GP" label="Guadeloupe">Guadeloupe</option>
            <option value="GT" label="Guatemala">Guatemala</option>
            <option value="GY" label="Guyana">Guyana</option>
            <option value="HT" label="Haiti">Haiti</option>
            <option value="HN" label="Honduras">Honduras</option>
            <option value="JM" label="Jamaica">Jamaica</option>
            <option value="MQ" label="Martinique">Martinique</option>
            <option value="MX" label="Mexico">Mexico</option>
            <option value="MS" label="Montserrat">Montserrat</option>
            <option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
            <option value="NI" label="Nicaragua">Nicaragua</option>
            <option value="PA" label="Panama">Panama</option>
            <option value="PY" label="Paraguay">Paraguay</option>
            <option value="PE" label="Peru">Peru</option>
            <option value="PR" label="Puerto Rico">Puerto Rico</option>
            <option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
            <option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="LC" label="Saint Lucia">Saint Lucia</option>
            <option value="MF" label="Saint Martin">Saint Martin</option>
            <option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
            <option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
            <option value="SR" label="Suriname">Suriname</option>
            <option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
            <option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
            <option value="US" label="United States">United States</option>
            <option value="UY" label="Uruguay">Uruguay</option>
            <option value="VE" label="Venezuela">Venezuela</option>
        </optgroup>
        <optgroup id="country-optgroup-Asia" label="Asia">
            <option value="AF" label="Afghanistan">Afghanistan</option>
            <option value="AM" label="Armenia">Armenia</option>
            <option value="AZ" label="Azerbaijan">Azerbaijan</option>
            <option value="BH" label="Bahrain">Bahrain</option>
            <option value="BD" label="Bangladesh">Bangladesh</option>
            <option value="BT" label="Bhutan">Bhutan</option>
            <option value="BN" label="Brunei">Brunei</option>
            <option value="KH" label="Cambodia">Cambodia</option>
            <option value="CN" label="China">China</option>
            <option value="GE" label="Georgia">Georgia</option>
            <option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
            <option value="IN" label="India">India</option>
            <option value="ID" label="Indonesia">Indonesia</option>
            <option value="IR" label="Iran">Iran</option>
            <option value="IQ" label="Iraq">Iraq</option>
            <option value="IL" label="Israel">Israel</option>
            <option value="JP" label="Japan">Japan</option>
            <option value="JO" label="Jordan">Jordan</option>
            <option value="KZ" label="Kazakhstan">Kazakhstan</option>
            <option value="KW" label="Kuwait">Kuwait</option>
            <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
            <option value="LA" label="Laos">Laos</option>
            <option value="LB" label="Lebanon">Lebanon</option>
            <option value="MO" label="Macau SAR China">Macau SAR China</option>
            <option value="MY" label="Malaysia">Malaysia</option>
            <option value="MV" label="Maldives">Maldives</option>
            <option value="MN" label="Mongolia">Mongolia</option>
            <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
            <option value="NP" label="Nepal">Nepal</option>
            <option value="NT" label="Neutral Zone">Neutral Zone</option>
            <option value="KP" label="North Korea">North Korea</option>
            <option value="OM" label="Oman">Oman</option>
            <option value="PK" label="Pakistan">Pakistan</option>
            <option value="PS" label="Palestinian Territories">Palestinian Territories</option>
            <option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
            <option value="PH" label="Philippines">Philippines</option>
            <option value="QA" label="Qatar">Qatar</option>
            <option value="SA" label="Saudi Arabia">Saudi Arabia</option>
            <option value="SG" label="Singapore">Singapore</option>
            <option value="KR" label="South Korea">South Korea</option>
            <option value="LK" label="Sri Lanka">Sri Lanka</option>
            <option value="SY" label="Syria">Syria</option>
            <option value="TW" label="Taiwan">Taiwan</option>
            <option value="TJ" label="Tajikistan">Tajikistan</option>
            <option value="TH" label="Thailand">Thailand</option>
            <option value="TL" label="Timor-Leste">Timor-Leste</option>
            <option value="TR" label="Turkey">Turkey</option>
            <option value="TM" label="Turkmenistan">Turkmenistan</option>
            <option value="AE" label="United Arab Emirates">United Arab Emirates</option>
            <option value="UZ" label="Uzbekistan">Uzbekistan</option>
            <option value="VN" label="Vietnam">Vietnam</option>
            <option value="YE" label="Yemen">Yemen</option>
        </optgroup>
        <optgroup id="country-optgroup-Europe" label="Europe">
            <option value="AL" label="Albania">Albania</option>
            <option value="AD" label="Andorra">Andorra</option>
            <option value="AT" label="Austria">Austria</option>
            <option value="BY" label="Belarus">Belarus</option>
            <option value="BE" label="Belgium">Belgium</option>
            <option value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="BG" label="Bulgaria">Bulgaria</option>
            <option value="HR" label="Croatia">Croatia</option>
            <option value="CY" label="Cyprus">Cyprus</option>
            <option value="CZ" label="Czech Republic">Czech Republic</option>
            <option value="DK" label="Denmark">Denmark</option>
            <option value="DD" label="East Germany">East Germany</option>
            <option value="EE" label="Estonia">Estonia</option>
            <option value="FO" label="Faroe Islands">Faroe Islands</option>
            <option value="FI" label="Finland">Finland</option>
            <option value="FR" label="France">France</option>
            <option value="DE" label="Germany">Germany</option>
            <option value="GI" label="Gibraltar">Gibraltar</option>
            <option value="GR" label="Greece">Greece</option>
            <option value="GG" label="Guernsey">Guernsey</option>
            <option value="HU" label="Hungary">Hungary</option>
            <option value="IS" label="Iceland">Iceland</option>
            <option value="IE" label="Ireland">Ireland</option>
            <option value="IM" label="Isle of Man">Isle of Man</option>
            <option value="IT" label="Italy">Italy</option>
            <option value="JE" label="Jersey">Jersey</option>
            <option value="LV" label="Latvia">Latvia</option>
            <option value="LI" label="Liechtenstein">Liechtenstein</option>
            <option value="LT" label="Lithuania">Lithuania</option>
            <option value="LU" label="Luxembourg">Luxembourg</option>
            <option value="MK" label="Macedonia">Macedonia</option>
            <option value="MT" label="Malta">Malta</option>
            <option value="FX" label="Metropolitan France">Metropolitan France</option>
            <option value="MD" label="Moldova">Moldova</option>
            <option value="MC" label="Monaco">Monaco</option>
            <option value="ME" label="Montenegro">Montenegro</option>
            <option value="NL" label="Netherlands">Netherlands</option>
            <option value="NO" label="Norway">Norway</option>
            <option value="PL" label="Poland">Poland</option>
            <option value="PT" label="Portugal">Portugal</option>
            <option value="RO" label="Romania">Romania</option>
            <option value="RU" label="Russia">Russia</option>
            <option value="SM" label="San Marino">San Marino</option>
            <option value="RS" label="Serbia">Serbia</option>
            <option value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option>
            <option value="SK" label="Slovakia">Slovakia</option>
            <option value="SI" label="Slovenia">Slovenia</option>
            <option value="ES" label="Spain">Spain</option>
            <option value="SJ" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
            <option value="SE" label="Sweden">Sweden</option>
            <option value="CH" label="Switzerland">Switzerland</option>
            <option value="UA" label="Ukraine">Ukraine</option>
            <option value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
            <option value="GB" label="United Kingdom">United Kingdom</option>
            <option value="VA" label="Vatican City">Vatican City</option>
            <option value="AX" label="Åland Islands">Åland Islands</option>
        </optgroup>
        <optgroup id="country-optgroup-Oceania" label="Oceania">
            <option value="AS" label="American Samoa">American Samoa</option>
            <option value="AQ" label="Antarctica">Antarctica</option>
            <option value="AU" label="Australia">Australia</option>
            <option value="BV" label="Bouvet Island">Bouvet Island</option>
            <option value="IO" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
            <option value="CX" label="Christmas Island">Christmas Island</option>
            <option value="CC" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
            <option value="CK" label="Cook Islands">Cook Islands</option>
            <option value="FJ" label="Fiji">Fiji</option>
            <option value="PF" label="French Polynesia">French Polynesia</option>
            <option value="TF" label="French Southern Territories">French Southern Territories</option>
            <option value="GU" label="Guam">Guam</option>
            <option value="HM" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
            <option value="KI" label="Kiribati">Kiribati</option>
            <option value="MH" label="Marshall Islands">Marshall Islands</option>
            <option value="FM" label="Micronesia">Micronesia</option>
            <option value="NR" label="Nauru">Nauru</option>
            <option value="NC" label="New Caledonia">New Caledonia</option>
            <option value="NZ" label="New Zealand">New Zealand</option>
            <option value="NU" label="Niue">Niue</option>
            <option value="NF" label="Norfolk Island">Norfolk Island</option>
            <option value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option>
            <option value="PW" label="Palau">Palau</option>
            <option value="PG" label="Papua New Guinea">Papua New Guinea</option>
            <option value="PN" label="Pitcairn Islands">Pitcairn Islands</option>
            <option value="WS" label="Samoa">Samoa</option>
            <option value="SB" label="Solomon Islands">Solomon Islands</option>
            <option value="GS" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
            <option value="TK" label="Tokelau">Tokelau</option>
            <option value="TO" label="Tonga">Tonga</option>
            <option value="TV" label="Tuvalu">Tuvalu</option>
            <option value="UM" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
            <option value="VU" label="Vanuatu">Vanuatu</option>
            <option value="WF" label="Wallis and Futuna">Wallis and Futuna</option>
        </optgroup>-->
    
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