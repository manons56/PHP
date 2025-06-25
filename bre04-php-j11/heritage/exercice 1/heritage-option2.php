
<?php



require "reader.php";



$reader1 = new Reader("exemple1@gmail.com", "password1");

$reader1->addBookToFavorites("1984");
$reader1->addBookToFavorites("Le Petit Prince");

var_dump($reader1);

$reader1->removeBookFromFavorites("1984");


var_dump($reader1);


$identifiants = $reader1->login();
echo "Email : " . $identifiants['login'] . "<br>";
echo "Mot de passe : " . $identifiants['password'] . "<br>";




?>



