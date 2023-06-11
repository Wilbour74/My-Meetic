<?php 
$keepemail = $_COOKIE['vitinha'];
session_start();

session_unset();

session_destroy();
$past = time() - 3600;
setcookie($keepemail, "", $past, "/");


header("Location: connexion.php");
exit;


?>