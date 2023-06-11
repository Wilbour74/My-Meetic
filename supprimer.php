<?php
$keepemail = $_COOKIE['vitinha'];
session_start();

if(!isset($_SESSION["logged_in"])){
    header("Location: connexion.php");
    exit;
}

$user_id= $_SESSION["email"];
$user_info= get_user_info_from_database($user_id);

session_unset();
session_destroy();

header("Location: connexion.php");
exit;
