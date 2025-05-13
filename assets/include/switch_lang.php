<?php
session_start();
if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
    $_SESSION['ethnic']['language_selected'] = $lang;
    
}
header('location: ../index.php');
?>