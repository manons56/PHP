<?php


class Router{
    
    public function __construct() {
        
    }
    
    public function handleRequest(array $get):void {
        
        $controller = new PageController();
        
        if (isset ($get["route"]) && $get["route"] === "a-propos"){
            $controller -> about();
        } elseif (isset ($get["route"]) && $get["route"] === "contact"){
            $controller -> contact();
        } elseif (!isset($get ['route'])) {
              $controller -> home();
        } else {
              $controller -> notFound();
        }
    }
    
} 