<?php

require "character.php";


$character = new Character("Ragnar");

$weapon = new Weapon("Sword", 10);

$character->setWeapon($weapon);



echo $character->getName();
echo $character->getWeapon()->getName();
echo $character->getWeapon()->getDamages();


echo $character-> fight(); 

?> 