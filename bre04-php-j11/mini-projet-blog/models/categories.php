<?php


require_once "posts.php";

class Category {
    private ?int $id = null;
    private string $title;
    private string $description;
    private array $posts = [];
  

    public function __construct($title, $description) {
        $this -> title = $title;
        $this -> description = $description;
    }

   
    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }
    
      public function getDescription(): string {
        return $this->description;
    }
 

    public function setId(int $id): void {
        $this->id = $id;
    }
    
     public function setTitle(string $title): void {
        $this->title = $title;
    }


     public function setDescription(string $description): void {
            $this->description = $description;
     }


    public function getPosts(): array {
        return $this->posts;
    }
    
    public function setPosts(array $posts): void {
        $this->posts = $posts;
    }
   
   
   public function addPost(Post $post): void {
    foreach ($this->posts as $existingPost) {
        if ($existingPost === $post) {
            return; 
        }
    }
    $this->posts[] = $post;
    }
    
    
    public function removePost(Post $post): void {
    foreach ($this->posts as $index => $existingPost) {
        if ($existingPost === $post) {
            unset($this->posts[$index]);
            return;
        }
    }
}
}