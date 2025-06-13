<?php 
session_start();
require "../connexion.php";

if (isset($_POST["email"], $_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    
    $query = $db->prepare("SELECT * FROM users WHERE email = :email");
    $parameters = [
        'email' => $email
    ];
    $query->execute($parameters);
    $user = $query->fetch(PDO::FETCH_ASSOC); 
    // fetch va permettre d'aller récuperer l'info du mail, s'il trouve rien,
    //il renvoie faux, et dans ce cas après on a le if il trouve rien donc if c'est faux, alors ca veut dire que mail incorrect
    
    if ($user === false) {
        echo "<h1>Email incorrect</h1>";
    } else {
        $passwordIsValid = password_verify($password, $user["password"]); // pour le $user[password] --> le passwordverify va récuperer le vrai mot de passe puis en deuxième variable, le user[password], c'est le password en crypté
        if (!$passwordIsValid)
        {
            echo "<h1>Mot de passe incorrect</h1>";
        } else {
            $_SESSION["user"] = ["last_name" => $user["last_name"], "first_name" => $user["first_name"]];
            header("Location: ../index.php?route=home");
        }
    }
}

