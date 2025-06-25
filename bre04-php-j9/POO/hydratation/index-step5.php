<?php

require "user.php";
require "connexion.php";


$user = new User("Clark", "Kent", "clark.kent@test.fr");

$query = $db->prepare("INSERT INTO users (first_name, last_name, email)
    VALUES (:firstName, :lastName, :email)");


$query->execute([
    'firstName' => $user->getFirstName(),
    'lastName'  => $user->getLastName(),
    'email'     => $user->getEmail()
    ]);


$lastId = $db->lastInsertId(); 
$user->setId((int)$lastId); 

    

echo $user->getLastName();
echo $user->getFirstName();
echo $user->getEmail();



?>



