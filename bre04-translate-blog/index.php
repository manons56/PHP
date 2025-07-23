<?php

session_start();
require_once __DIR__ . '/config/autoload.php';

if(!isset($_SESSION["lang"]))
{
    $_SESSION["lang"] = "en";
}

$router = new Router();
$router->handleRequest($_GET);





