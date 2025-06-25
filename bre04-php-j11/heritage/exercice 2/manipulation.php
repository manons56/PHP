<?php

require "mage.php";
require "warrior.php";

$character = new Character();
$character->setName("Alex");
$character->setLife(100);

echo "Nom du personnage : " . $character->getName();
echo "Vie : " . $character->getLife();




$warrior = new Warrior(150, "Thor", 80);
echo $warrior->introduceWarrior();




$mage = new Mage(100, "Gandalf", 120);
echo $mage->introduceMage();