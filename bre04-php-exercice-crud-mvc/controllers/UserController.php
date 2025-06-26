<?php

class UserController{

    public function show():void {
        $route = "show_user";
        require "templates/layout.phtml";
    }
    
     public function create():void {
        $route= "create_user";
        require "templates/layout.phtml";
    }
    
     public function checkCreate():void {
         
         /* ici tu récupères depuis le formulaire les infos pour ton User */
             
         if (isset($_POST['email'])) {
            $email = $_POST['email'];
         } else {
            $email = '';
         }
         
          if (isset($_POST['first_name'])) {
            $first_name = $_POST['first_name'];
         } else {
            $first_name = '';
         }
         
          if (isset($_POST['last_name'])) {
            $last_name = $_POST['last_name'];
         } else {
            $last_name = '';
         }
        
        /* ici tu hydrates ta classe avec */ 
         $user = new User($email, $first_name, $last_name);
        
         /* puis tu sauvegardes ça dans la base de données */
         $manager = new UserManager();
         $manager -> create($user);
         
         
         header('Location: index.php');
         exit; 
         
       // $route ="check_create_user"; 
      //  require "templates/layout.phtml";
      // pas besoin ici, puisqu'on fait appel au checkCreate() via l'action du formulaire 
      // puis une fois le formulaire remplie on redirige vers la liste avec le header 
      
    }
    
    
     public function update(): void
    {
        $route = "update_user";
        require 'templates/layout.phtml';
    }
    
    
     public function checkUpdate(): void
    {
        $route = "check_update_user";
        require 'templates/layout.phtml';
    }
    
     
     public function delete(): void
    {
        $route = "delete_user";
        require 'templates/layout.phtml';
    }
    
     
     public function list(): void
    {
        $route = "list";
        require 'templates/layout.phtml';
    }
}