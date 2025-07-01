<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class UserManager extends AbstractManager
{



           // findByEmail(string $email) qui retourne le user qui a l'email passé en paramètre, null si il n'existe pas

           public function findByEmail(string $email) : ? User
            {
              
                $query = $this->db->prepare('SELECT * FROM users WHERE email=:email');
        
                $parameters = [
                    "email" => $email
                ];
        
                $query->execute($parameters);
                $result = $query->fetch(PDO::FETCH_ASSOC);
        
                if($result)
                {
    
                    $createdAt = DateTime::createFromFormat('Y-m-d H:i:s', $result["created_at"]);
                   
                    $user = new User($result["username"], $result["email"], $result["password"], $result["role"], $createdAt);
                    $user->setId($result["id"]);
            
        
                    return $user;
                }
        
                return null;
            }


            // findOne(int id) qui retour le user qui a l'id passé en paramètre, null si il n'existe pas


           public function findOne(int $id) : ? User
            {
              
                $query = $this->db->prepare('SELECT * FROM users WHERE id=:id');
        
                $parameters = [
                    "id" => $id
                ];
        
                $query->execute($parameters);
                $result = $query->fetch(PDO::FETCH_ASSOC);
        
                if($result)
                {
                    $createdAt = DateTime::createFromFormat('Y-m-d H:i:s', $result["created_at"]);
                   
                    $user = new User($result["username"], $result["email"], $result["password"], $result["role"], $createdAt);
                    $user->setId($result["id"]);
            
        
                    return $user;
                }
        
                return null;
            }


                // create(User $user) qui insère l'utilisateur passé en paramètres dans la base de données
                
                public function create(User $user): void
                {
                    $query = $this->db->prepare("
                        INSERT INTO users (username, email, password, role, created_at)
                        VALUES (:username, :email, :password, :role, :created_at)
                    ");
                
                    $parameters = [
                        "username"   => $user->getUsername(),
                        "email"      => $user->getEmail(),
                        "password"   => $user->getPassword(),
                        "role"       => $user->getRole(),
                        "created_at" => $user->getCreated_at()->format('Y-m-d H:i:s')
                    ];
                
                    $query->execute($parameters);
                
                    $user->setId($this->db->lastInsertId());
                }
                
                
                
}                