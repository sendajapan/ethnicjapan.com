<?php
session_start();
if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
    $_SESSION['ethnic']['selected_lang'] = $lang;
    
}
header('location: ../../index.php');
?>