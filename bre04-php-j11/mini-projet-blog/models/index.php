<?php

require_once "users.php";
require_once "posts.php";
require_once "categories.php";

$date= new DateTime("2016-01-07");
$user = new User("Test", "test@test.fr", "Password", "USER", $date);
var_dump($user);






$post = new Post("un titre", "excerpt", "du contenu", $user, $date);
var_dump($post);




$category = new Category("mon titre", "une description");
var_dump($category);



$post->addCategory($category);     
$category->addPost($post);   


var_dump($post);
var_dump($category);