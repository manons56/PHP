<?php

require "user.php";
require "connexion.php";



$query = $db->prepare("SELECT * FROM `users` ORDER BY `users`.`id`");




$query->execute([]);

$data = $query->fetch(PDO::FETCH_ASSOC);

if ($data) {
   
    $user = new User("", "", "");
    
    $user->hydrate($data);

echo $user->getLastName();
echo $user->getFirstName();
echo $user->getEmail();
}


?>



