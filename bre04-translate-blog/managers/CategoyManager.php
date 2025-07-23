<?php

class CategoryManager extends AbstractManager {

    public function __construct()
    {
        parent::__construct();
    }

    
    public function findAll(): array {
        $stmt = $this->db->query("SELECT * FROM categories");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $categories = [];

        foreach ($rows as $row) {
            $tcategory = new Category(
                $row['title'],$row['description'],
               
            );
            $category->setId($row['id']);
            $categories[] = $category;
        }
        return $categories;
    }

  
}