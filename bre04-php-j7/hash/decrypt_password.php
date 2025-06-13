<?php

 if (isset($_POST["password"])) {
        $password = $_POST["password"];
 }

if (isset($_POST["password-crypted"])) {
        $hash = $_POST["password-crypted"];
}


$isPasswordCorrect = password_verify($password, $hash);

if($isPasswordCorrect === true)
{
	echo "Mot de passe correct";
}


else
{
 echo "Mot de passe incorrect";
}

?>