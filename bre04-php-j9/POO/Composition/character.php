<?php 

require "weapon.php";

class Character
{
    private Weapon $weapon;
    private string $name;
    
     public function __construct(string $name)
    {

        $this->weapon = new Weapon ("", 0);  
        $this->name = $name;
    } 
 
    
    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }

    public function getName(): string
    {
        return $this->name;
    }

  
   
    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    
    public function fight(): string
    {
        return $this -> weapon -> strike();
    }
}

?>