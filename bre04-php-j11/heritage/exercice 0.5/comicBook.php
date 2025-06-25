
<?php


require "book.php";


class ComicBook extends Book {
  
  public function __construct(private string $artist, string $title, string $writer)
  {
      parent::__construct($title, $writer);
  }

  public function getArtist() : string
  {
    return $this->artist();
  }

  public function setArtist(string $artist) : void
  {
    $this->artist = $artist;
  }
}