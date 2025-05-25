<?php
$basePath = "/";
?>
<footer id="footer" class="footer">

    <div class="container" style="display: flex; justify-content: center; align-items: center;">

        <div class="logo-foot" style="display: flex; justify-content: right;">
            <img src="<?php echo $basePath; ?>assets/img/logo.png" alt="" style="width: 12rem;">
        </div>

        <div class="links" style="padding-left:2rem;">
            <div class="social-links d-flex justify-content-center">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>

            <div class="credits">
                <?= $language["footer_credits"]?> <a href="https://sendajapan.com/"><?= $language["footer_link"]?></a>
            </div>

            <div class="copyright text-center">
                <p style="padding-top:1rem;"><?= $language["footer_copyright_sign"]?>  <span><?= $language["footer_copyright"]?></span> <strong class="px-1 sitename"><?= $language["footer_logo"]?></strong> <span><?= $language["footer_rights"]?></span></p>
            </div>
        </div>
    </div>

</footer>