<?php
// Classe représentant un match entre deux équipes
class Posts
{
    private ?int $id = null;
    private string $title;
    private string $excerpt;
    private Categories $category;
   
  

    public function __construct(
        string $title,
        string $excerpt,
        Categories $category
    ) {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->category = $category;
    }  

   
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }

   
    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    
    public function getExcerpt(): string
    {
        return $this->excerpt;
    }

    public function setExcerpt(string $excerpt): void
    {
        $this->description = $description;
    }
    
    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): Category
    {
        $this->category = $category;
    }
}
