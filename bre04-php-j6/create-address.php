<?php 

require 'connexion.php';

$query = $db->prepare("INSERT INTO address (street, city, zipcode) VALUES (:street, :city, :zipcode)");

$parameters = [
    'street' => $_POST['street'],
    'city' => $_POST['city'],
    'zipcode' => $_POST['zipcode']
];

$query->execute($parameters);

$id = $db->lastInsertId();



?>