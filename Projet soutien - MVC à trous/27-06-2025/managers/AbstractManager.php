<?php

abstract class AbstractManager {
    protected PDO $db;

    public function __construct() {
        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "manonsara_soutien_mvc_books";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

        $user = "manonsara";
        $password = "7639763c730e9069300e065f0a99cd54";
        $this->db = new PDO($connexionString, $user, $password);
    }
}