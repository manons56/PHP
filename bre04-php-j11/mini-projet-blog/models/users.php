<?php

class User {
    private ?int $id = null;
    private string $username;
    private string $email;
    private string $password;
    private string $role;
    private DateTime $created_at;
    

    public function __construct($username, $email, $password, $role, $created_at) {
        $this -> username = $username;
        $this -> email = $email;
        $this -> password = $password;
        $this -> role = $role;
        $this -> created_at = $created_at;
      
    }

   
    public function getId(): int {
        return $this->id;
    }

    public function getUsername(): string {
        return $this->username;
    }
    
    
    public function getEmail(): string {
        return $this->email;
    }


    public function getPassword(): string {
        return $this->password;
    }
    
    
    public function getRole(): string {
        return $this->role;
    }
    
    
      public function getCreated_at(): string {
        return $this->created_at;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }
    
     public function setUsername(string $username): void {
        $this->username = $username;
    }
    
    
    public function setEmail(string $email): void {
            $this->email = $email;
     }

    public function setPassword(string $password): void {
        $this->password = $password;
    }
    
     public function setRole(string $role): void {
        $this->role = $role;
    }


     public function setCreated_at(DateTime $created_at): void {
            $this->created_at = $created_at;
     }
   
}