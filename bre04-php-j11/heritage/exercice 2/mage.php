<?php

require_once "character.php";

class Mage extends Character {
    protected int $mana;
   
    public function __construct($life, $name, $mana) {
        $this->life = $life;
        $this->name = $name;
        $this->mana = $mana;
    }

   
    public function getMana(): int {
        return $this->mana;
    }

    public function setMana(int $mana): void {
        $this->mana = $mana;
    }


     public function introduceMage(): string {
        return $this->introduce() . ". J'ai {$this->life} points de vie et {$this->mana} points de mana.";
    }

    
   
}