<?php

class BookController {
    private BookManager $manager;

    public function __construct() {
        $this->manager = new BookManager();
    }

    public function list() : void
    {
        
        $users = $this->manager->findAll()
        $template = "books/list-book";
        require "templates/layout.phtml";
    }

    public function create() : void {
        $template = "books/add-book";
        require "templates/layout.phtml";
    }

    public function checkCreate() : void
    {
        header('Location: index.php');
    }

    public function notFound() : void
    {
        $template = "not-found";
        require "templates/layout.phtml";
    }
}