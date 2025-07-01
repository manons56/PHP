<?php

class BookManager extends AbstractManager {

    public function __construct()
    {
        parent::__construct();
    }

    public function findAll() : array {
        return [];
    }

    public function create(Book $book) : Book {

        return $book;
    }
}