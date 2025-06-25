<?php

class Character
{
    private int $id;
    private string $firstName;
    private string $lastName;

    
    public function __construct(int $id)
    {
        $this->id = $id;
        $this->firstName = "Jane";  
        $this->lastName = "Doe";
    }

    
    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

   
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    
    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

?>
