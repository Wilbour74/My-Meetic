<?php
$dsn = 'mysql:dbname=mymeetic;host=127.0.0.1';
$user = 'wilfried_bour';
$password = "will";

try{
    $db = new PDO($dsn, $user, $password);
}

catch(PDOException $e){
    error : $e->getMessage();
}
