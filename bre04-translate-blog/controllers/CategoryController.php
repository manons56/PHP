<?php
class CategoryController  {

    private CategoryManager $categoryManager;

    public function __construct() {
        $this->categoryManager = new CategoryManager();
    }

    public function showAllCategories(): void {
        $categories = $this->categoryManager->findAll();
        $partials = "category.phtml";
  
        require '../views/templates/layout.phtml';
        
    }

}