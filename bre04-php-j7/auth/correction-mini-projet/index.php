<?php session_start();
require "connexion.php";

$route = null;

if (isset($_GET["route"])) {
    $route = $_GET["route"];
}

require "layout.phtml";
