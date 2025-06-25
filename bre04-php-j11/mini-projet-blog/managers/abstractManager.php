<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "manonsara_pooj1";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "manonsara";
$password = "7639763c730e9069300e065f0a99cd54";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

var_dump($db);

?>



<?php

abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        $host = "db.3wa.io"; 
        $dbname = 'manonsara_blog_poo'; 
        $user = 'manonsara'; 
        $password = '7639763c730e9069300e065f0a99cd54'; 

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
}