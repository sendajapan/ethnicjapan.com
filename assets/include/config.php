<?php 
$currentPage = basename($_SERVER['PHP_SELF']);
if($_SERVER['HTTP_HOST']=='localhost'){
	$base_path = $_SERVER['DOCUMENT_ROOT'].'/ethnicjapan.com/';
	$base_url = 'http://'.$_SERVER['HTTP_HOST'].'/ethnicjapan.com/';
}
else{
	$base_path = $_SERVER['DOCUMENT_ROOT'].'/';
	$base_url = 'https://'.$_SERVER['HTTP_HOST'].'/';
}

session_start();

$default_lang = 'jp';
$lang = $_SESSION['ethnic']['selected_lang'] ?? $default_lang;

$allowed_langs = ['en', 'jp'];
if (!in_array($lang, $allowed_langs)) {
    $lang = $default_lang;
}

include($base_path . "assets/include/$lang.php");
?>

