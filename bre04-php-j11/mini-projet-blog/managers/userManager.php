<?php

require_once 'abstractManager.php';
require_once 'users.php'; 

class UserManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct(); 
    }

   
    public function findAll(): array
    {
        $query = $this->db->query("SELECT * FROM users");
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        $users = [];
        foreach ($results as $row) {
            $user = new User(
                $row['username'],
                $row['email'],
                $row['password'],
                $row['role'],
                new DateTime($row['created_at'])
            );
            $user->setId((int)$row['id']);
            $users[] = $user;
        }

        return $users;
    }

   
    public function findOne(int $id): ?User
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $user = new User(
                $row['username'],
                $row['email'],
                $row['password'],
                $row['role'],
                new DateTime($row['created_at'])
            );
            $user->setId((int)$row['id']);
            return $user;
        }

        return null;
    }

    
    public function create(User $user): void
    {
        $stmt = $this->db->prepare("
            INSERT INTO users (username, email, password, role, created_at)
            VALUES (:username, :email, :password, :role, :created_at)
        ");

        $stmt->execute([
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'role' => $user->getRole(),
            'created_at' => $user->getCreated_at()->format('Y-m-d H:i:s')
        ]);
    }

   
    public function update(User $user): void
    {
        $stmt = $this->db->prepare("
            UPDATE users SET 
                username = :username,
                email = :email,
                password = :password,
                role = :role,
                created_at = :created_at
            WHERE id = :id
        ");

        $stmt->execute([
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'role' => $user->getRole(),
            'created_at' => $user->getCreated_at()->format('Y-m-d H:i:s'),
            'id' => $user->getId()
        ]);
    }

   
    public function delete(int $id): void
    {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}