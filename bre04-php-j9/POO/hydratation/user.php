<?php 

class User
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    
    
     public function __construct(string $firstName,string $lastName, string $email)
    {
        $this->id = 0; 
        $this->firstName = $firstName;  
        $this->lastName = $lastName;
        $this->email = $email;
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
        return $this-> lastName;
    }
  
  
   public function getEmail(): string
    {
        return $this->email;
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
    
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    
    
    public function hydrate(array $data): void
        {
            if (isset($data['id'])) {
                $this->setId($data['id']);
            }
            if (isset($data['first_name'])) {
                $this->setFirstName($data['first_name']);
            }
            if (isset($data['last_name'])) {
                $this->setLastName($data['last_name']);
            }
            if (isset($data['email'])) {
                $this->setEmail($data['email']);
            }
        }

}

?>