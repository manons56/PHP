<?php
// Classe abstraite pour la gestion de la connexion à la base de données
abstract class AbstractManager {
    protected PDO $db;

    public function __construct() {
        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "manonsara_translate-blog";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

        $user = "manonsara";
        $password = "7639763c730e9069300e065f0a99cd54";
        $this->db = new PDO($connexionString, $user, $password);
    }
}