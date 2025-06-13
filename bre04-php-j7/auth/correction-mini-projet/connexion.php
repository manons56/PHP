<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "VOTREID_php_j6";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "VOTREID";
$password = "VOTREMDP";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

// echo "<pre>";
// var_dump($db);
// echo "</pre>";