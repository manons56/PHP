<?php

function routing() : string {
    if(isset($_GET['route'])){
        if($_GET['route'] ==='about') {
            return 'about';
        } elseif ($_GET['route'] ==='contact'){
            return 'contact';
        }
    }
    return 'homepage';
}



$template = routing();
// echo $test;



require "templates/layout.phtml";


?>
