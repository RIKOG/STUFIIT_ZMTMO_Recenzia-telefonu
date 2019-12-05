<?php
session_start();

if (empty($_SESSION['lang'])) {
    $_SESSION['lang'] = 'sk';
}

else if (isset($_GET['lang'])) {
    if($_GET['lang'] == "en")
        $_SESSION['lang'] = "en";

    if($_GET['lang'] == "sk")
        $_SESSION['lang'] = "sk";
// $_SESSION['lang'] = $_GET['lang'] == 'sk' ? 'sk' : 'en';
}
?>