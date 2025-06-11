<?php 

require 'connexion.php';

$query = $db->prepare('SELECT   `first_name`, `last_name`, `address`, address.street, address.city, address.zipcode FROM users JOIN address ON users.address = address.id');
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($users);

?>