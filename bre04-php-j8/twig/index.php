<?php


require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__);

$twig = new \Twig\Environment($loader,['debug' => true]);

$title = "The League";

echo $twig->render("teams.html.twig", ["title" => $title]);