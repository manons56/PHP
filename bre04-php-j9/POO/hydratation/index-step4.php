<?php

require "user.php";
require "connexion.php";



$query = $db->prepare("SELECT * FROM `users`");




$query->execute([]);

$data = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $row) {
   
    $user = new User("", "", "");
    
    $user->hydrate($row);

echo $user->getLastName();
echo $user->getFirstName();
echo $user->getEmail();
}


?>



