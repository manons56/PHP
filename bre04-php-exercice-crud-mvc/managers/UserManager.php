
<?php

class UserManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }
    
    
     
     public function findAll(): array
    {
        $users = [];

        $query = $this->db->query("SELECT * FROM users");

        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $data) {
            $user = new User();
            $user->setId($data['id']);
            $user->setEmail($data['email']);
            $user->setFirstName($data['first_name']);
            $user->setLastName($data['last_name']);
            $users[] = $user;
         };
         return $users;
    }
    
    
    
    public function findOne(int $id){
    
    $query = $db->prepare('SELECT * FROM users WHERE id = :id');
    $parameters = ['id' => $_GET['id']
    ];
    $query->execute($parameters);
    $data = $query->fetch(PDO::FETCH_ASSOC);
    if ($data) {
            $user = new User();
            $user->setId($data['id']);
            $user->setEmail($data['email']);
            $user->setFirstName($data['first_name']);
            $user->setLastName($data['last_name']);
            return $user;
        }
     return null;
    }

    
    public function create(User $user) : void{
        $query = $this->db->prepare("
            INSERT INTO users (id, email, first_name, last_name)
            VALUES (NULL, :email, :first_name, :last_name)");
         $parameters = [
                 'email' => $_POST['email'],
                 'first_name' => $_POST ['first_name'],
                 'last_name' => $_POST ['last_name'],
             ];
        $query->execute($parameters);
    }
    
    
    
    
       public function update(User $user): void
        {
            $query = $this->db->prepare("
                UPDATE users
                SET email = :email, first_name = :first_name, last_name = :last_name
                WHERE id = :id
            ");
             $parameters = [
                 'id' => $_GET['id'],
                 'email' => $_GET['email'],
                 'first_name' => $_GET ['first_name'],
                 'last_name' => $_GET ['last_name'],
             ];
            $query->execute($parameters);
        }

    
    
    
    public function delete(int $id){
        $query = $this->db->prepare("DELETE FROM users WHERE id = :id");
        $parameters = ['id' => $_GET['id']
         ];
        $query->execute($parameters);
        }



   
}



