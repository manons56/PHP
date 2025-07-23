<?php

//MODELS

require "models/categories.php";
require "models/posts.php";



//MANAGERS
require "managers/AbstractManager.php";
require "managers/CategoryManager.php";
require "managers/PostsManager.php";





//CONTROLLERS
require "controllers/CategoryController.php";
require "controllers/PostsController.php";




//SERVICES

require "Router.php";