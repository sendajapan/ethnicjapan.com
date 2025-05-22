<?php
session_start();

$default_lang = 'en';
$lang = $_SESSION['ethnic']['selected_lang'] ?? $default_lang;

$allowed_langs = ['en', 'jp'];
if (!in_array($lang, $allowed_langs)) {
    $lang = $default_lang;
}

include(__DIR__ ."/$lang.php");
