<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "manonsara_pooj1";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "manonsara";
$password = "7639763c730e9069300e065f0a99cd54";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

var_dump($db);

?>