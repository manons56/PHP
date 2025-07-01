<?php


require_once "User.php";
require_once 'Category.php';

class Post
{
    
    private ?int $id = null;
    private string $title;
    private string $excerpt;
    private string $content;
    private User $author;
    private \DateTime $created_at;
    private array $categories =[];
    
    
    public function __construct (string $title, string $excerpt, string $content, User $author, DateTime $created_at, array $categories)
    {
        
        $this -> title = $title;
        $this -> excerpt = $excerpt;
        $this -> content = $content;
        $this -> author = $author;
        $this -> created_at = $created_at;
        $this -> category = $categories;
    }
    
    
    
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getExcerpt(): string
    {
        return $this->excerpt;
    }

    public function getContent(): string
    {
        return $this->content;
    }


  public function getAuthor(): User
    {
        return $this->author;
    }
    
      public function getCreated_at(): DateTime
    {
        return $this->created_at;
    }
    
        
    public function getCategories():array {
        return $this -> categories;
    }
  
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setExerpt(string $excerpt): void
    {
        $this->excerpt = $excerpt;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }
    
     public function setAuthor(User $author): void
    {
        $this->author = $author;
    }
    
     public function setCreated_at(DateTime $created_at): void
    {
        $this->created_at = $created_at;

    }
    
     public function setCategories(array $categories):void {
         $this -> categories = $categories;
    } 
    
}