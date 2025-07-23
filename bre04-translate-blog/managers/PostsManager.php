<?php

class PostsManager  extends AbstractManager {

    public function __construct() {
        parent::__construct();
    }
   
    public function findAll(): array {
    $query = $this->db->prepare('SELECT * FROM posts');
    $query->execute();
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);

    $posts = []; 

    foreach ($rows as $row) {
        $category = new CategoryManager();
        $cate = $category-> findOne($row['category']);
       
        $post = new Posts(
            $row['title'], $row['excerpt'], $cate)
        );
        $gpost -> setId($row['id']);
        $posts[]=$post;
    }

    return $posts;
}
    
    
}


