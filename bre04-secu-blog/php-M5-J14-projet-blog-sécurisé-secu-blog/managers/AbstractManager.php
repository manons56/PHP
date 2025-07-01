<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "manonsara_secu_blog";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname";
        
        $user = "manonsara";
        $password = "7639763c730e9069300e065f0a99cd54";
        
        $this -> db = new PDO(
            $connexionString,
            $user,
            $password
            );
              
    }

    private function getDatabaseInfo() : array
    {
        $handle = fopen("config/database.txt", "r");
        $lineNbr = 0;
        $info = [];

        if ($handle) {

            while (($line = fgets($handle)) !== false) {

                if($lineNbr === 0)
                {
                    $info["user"] = trim($line);
                }
                else if($lineNbr === 1)
                {
                    $info["password"] = trim($line);
                }
                else if($lineNbr === 2)
                {
                    $info["host"] = trim($line);
                }
                else if($lineNbr === 3)
                {
                    $info["db_name"] = trim($line);
                }

                $lineNbr++;
            }

            fclose($handle);
        }

        return $info;
    }
}