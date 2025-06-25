
<?php

abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "manonsara_crud_mvc";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname";
        
        $user = "manonsara";
        $password = "7639763c730e9069300e065f0a99cd54";
        
        $this -> db = new PDO(
            $connexionString,
            $user,
            $password
              
        }
}


