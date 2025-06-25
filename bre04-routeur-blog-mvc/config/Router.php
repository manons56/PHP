<?php


class Router{
    
    public function __construct() {
        
    }
    
    public function handleRequest(array $get):void {
        
        $controllerPage = new PageController();
        $controllerCategory = new PageController();
        $controllerArticle = new PageController();
        
        if (isset ($get["route"]) && $get["route"] === "a-propos"){
            $controllerPage -> about();
            
        } elseif (isset ($get["route"]) && $get["route"] === "contact"){
            $controllerPage -> contact();
            
        } elseif (isset($get['route']) && $get['route'] === 'categorie') {
             if (isset($get['categorie'])) {
                    if ($get['categorie'] === 'dev-back') {
                        $controllerCategory->categoryDevBack();
                    } elseif ($get['categorie'] === 'dev-front') {
                        $controllerCategory->categoryDevFront();
                    } else {
                        $controllerCategory->notFound();
                    }
             } else {
                $controllerCategory->notFound();
             }

         } elseif (isset($get['route']) && $get['route'] === 'article') {
             if (isset($get['article'])) {
                  if ($get['article'] === 'i-love-php') {
                         $controllerArticle->articlePhp();
                  } elseif ($get['article'] === 'i-love-js') {
                         $controllerArticle->articleJs();
                  } else {
                         $controllerArticle->notFound();
                  }
              } else {
                $controlleArticler->notFound();
              }
              
        } elseif (!isset($get ['route'])) {
              $controllerPage -> home();
        } else {
              $controllerPage -> notFound();
        }
    }
    
} 