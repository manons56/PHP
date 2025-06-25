<?php

require_once "character.php";

class Warrior extends Character {
    protected int $energy;
   
    public function __construct($life, $name, $energy) {
        $this->life = $life;
        $this->name = $name;
        $this->energy = $energy;
    }

   
    public function getEnergy(): int {
        return $this->energy;
    }

    public function setEnergy(int $energy): void {
        $this->energy = $energy;
    }


     public function introduceWarrior(): string {
        return $this->introduce() . ". J'ai {$this->life} points de vie et {$this->energy} points d'énergie.";
    }
   
}