<?php


class Book {
  
  public function __construct(protected string $title, protected string $writer)
  {

  }

  public function getWriter() : string
  {
    return $this->writer;
  }

  public function setWriter(string $writer) : void
  {
    $this->writer = $writer;
  }

  public function getTitle() : string
  {
    return $this->title;
  }

  public function setTitle(string $title) : void
  {
    $this->title = $title;
  }
}