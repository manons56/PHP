<?php 

class Weapon
{
    private int $damages;
    private string $name;
    
     public function __construct(string $name, int $damages)
    {

        $this->damages = $damages;  
        $this->name = $name;
    }

    
    public function getDamages(): int
    {
        return $this->damages;
    }

    public function getName(): string
    {
        return $this->name;
    }

  
   
    public function setDamages(int $damages): void
    {
        $this->damages = $damages;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    
    public function strike(): string
    {
        return "Mais aïeuh! <br>";
    }
}

?>