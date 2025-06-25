<?php

class User
{
    
    private ?int $id = null;
    private string $email;
    private string $firstName;
    private string $lastName;
    
    
    public function __construct (string $email, string $firstName, string $lastName)
    {
        $this -> id = 0
        $this -> email = $email;
        $this -> first_name = $firstName;
        $this -> last_name = $lastName;
    }
    
    
    
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

  
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setFirstName(string $firstName): void
    {
        $this->first_name = $firstName;
    }

    public function setLastName(string $lastName): void
    {
        $this->last_name = $lastName;
    }
}