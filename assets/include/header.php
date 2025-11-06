<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid position-relative d-flex align-items-center justify-content-between">
		
		<a href="<?php echo $base_url; ?>" class="logo d-flex align-items-center me-auto me-xl-0">
			<img class="img-fluid" src="<?php echo $base_url; ?>assets/img/logo-header.png" alt="">
		</a>

		<!-- NAV MENU -->
        <nav id="navmenu" class="navmenu">
			<ul>
	            <li><a href="<?= $base_url; ?>" class="item <?= ($currentPage == $base_url.'') ? 'active' : '' ?>"><?= $language["header_home"]; ?> </a></li>
	            <li><a href="<?= $base_url; ?>about" class="item <?= ($currentPage == $base_url.'about') ? 'active' : '' ?>"><?= $language["header_about"]; ?> </a></li>
	            <li><a href="<?= $base_url; ?>products" class="item <?= ($currentPage == $base_url.'products') ? 'active' : '' ?>"><?= $language["header_products"]; ?> </a></li>
	            <li><a href="<?= $base_url; ?>recipes" class="item <?= ($currentPage == $base_url.'recipes') ? 'active' : '' ?>"><?= $language["header_recipes"]; ?> </a></li>
	            <li><a href="<?= $base_url; ?>wholesale" class="item <?= ($currentPage == $base_url.'wholesale') ? 'active' : '' ?>"><?= $language["header_wholesale"]; ?> </a></li>
	            <li><a href="<?= $base_url; ?>contact" class="item <?= ($currentPage == $base_url.'contact') ? 'active' : '' ?> btn btn-outline"><?= $language["header_contact"]; ?> </a></li>
            
            
				<li class="d-block d-lg-none" style="border-bottom: 1px solid rgba(190, 190, 190, 0.5);">
					<a href="<?=$base_url?>assets/include/switch_lang?lang=jp" <?php if($lang == 'jp'){ echo 'class="active" '; } ?>>
						<span id='flag' class="fi fi-jp"></span><span id='country'><?= $language["header_jp"]; ?></span>
					</a>
				</li>
				<li class="d-block d-lg-none">
					<a href="<?=$base_url?>assets/include/switch_lang?lang=en" <?php if($lang == 'en'){ echo 'class="active" '; } ?>>
						<span id='flag' class="fi fi-us"></span><span id='country'><?= $language["header_en"]; ?></span>
					</a>
				</li>

            </ul>
			<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
		</nav>
		
		<div class="lang d-none d-xxl-flex ">
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
					<li style="border-bottom: 1px solid rgba(190, 190, 190, 0.5);"><a href="<?=$base_url?>assets/include/switch_lang?lang=jp"><span id='flag' class="fi fi-jp" ></span><span id='country'><?= $language["header_jp"]; ?> </span></a></li>
					<li><a href="<?php echo $base_url; ?>assets/include/switch_lang?lang=en"><span id='flag' class="fi fi-us" ></span><span id='country'><?= $language["header_en"]; ?> </span></a></li>
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