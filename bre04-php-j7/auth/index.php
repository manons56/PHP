<?php 

require 'connexion.php';

function routing() : ?string {
    if(isset($_GET['route'])){
        if($_GET['route'] ==='home') {
            return 'home';
        } elseif ($_GET['route'] ==='inscription') {
            return 'inscription';
        } elseif ($_GET['route'] ==='connexion') {
            return 'connexion';
        }
    }
    return null;
}



$template = routing();

require 'layout.phtml';
?>


