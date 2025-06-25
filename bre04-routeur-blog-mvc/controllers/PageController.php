<?php

class PageController{

    public function home():void {
        $route = "home";
        require "templates/layout.phtml";
    }
    
     public function about():void {
        $route= "about";
        require "templates/layout.phtml";
    }
    
     public function notFound():void {
        $route ="notFound";
        require "templates/layout.phtml";
    }
    
     public function contact(): void
    {
        $route = "contact";
        require 'templates/layout.phtml';
    }
    
     public function categoryDevBack(): void
    {
        $route = "category-dev-back";
        require 'templates/layout.phtml';
    }
    
     public function categoryDevFront(): void
    {
        $route = "category-dev-front";
        require 'templates/layout.phtml';
    }
    
     public function articleJs(): void
    {
        $route = "article-js";
        require 'templates/layout.phtml';
    }
    
     public function articlePhp(): void
    {
        $route = "article-php";
        require 'templates/layout.phtml';
    }
}