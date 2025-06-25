<?php


require_once "users.php";
require_once "categories.php";

class Post {
    private ?int $id = null;
    private string $title;
    private string $excerpt;
    private string $content;
    private User $author;
    private DateTime $created_at;
    private array $categories = [];
    

    public function __construct($title, $excerpt, $content, $author, $created_at) {
        $this -> title = $title;
        $this -> excerpt = $excerpt;
        $this -> content = $content;
        $this -> author = $author;
        $this -> created_at = $created_at;
      
    }

   
    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }
    
    
    public function getExcerpt(): string {
        return $this->excerpt;
    }


    public function getContent(): string {
        return $this->content;
    }
    
    
    public function getAuthor(): User {
        return $this->author;
    }
    
    
      public function getCreated_at(): string {
        return $this->created_at;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }
    
     public function setTitle(string $title): void {
        $this->title = $title;
    }


    public function setExcerpt(string $excerpt): void {
        $this->excerpt = $excerpt;
    }
    
     public function setContent(string $content): void {
        $this->content = $content;
    }
    
    
     public function setAuthor(User $author): void {
        $this->author = $author;
    }


     public function setCreated_at(DateTime $created_at): void {
            $this->created_at = $created_at;
     }


   
    
    public function getCategories(): array {
    return $this->categories;
    }
    
    public function setCategories(array $categories): void {
        $this->categories = $categories;
    }
   
   
   public function addCategory(Category $category): void {
    foreach ($this->categories as $existingCategory) {
        if ($existingCategory === $category) {
            return; 
        }
    }
    $this->categories[] = $category;
    }

    
    public function removeCategory(Category $category): void {
    foreach ($this->categories as $index => $existingCategory) {
        if ($existingCategory === $category) {
            unset($this->categories[$index]);
            return;
        }
    }   
    }


}