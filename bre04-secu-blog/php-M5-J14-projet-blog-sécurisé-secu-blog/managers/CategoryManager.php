<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CategoryManager extends AbstractManager
{

        public function __construct()
        {
            parent::__construct();
        }
        
        //findAll() qui retourne toutes les catégories
        
        public function findAll() : array
        {
            $query = $this -> db -> prepare('SELECT * FROM categories');
            $query -> execute();
            $resultat = $query -> fetchAll(PDO::FETCH_ASSOC);
            $categories= [];
            
            foreach($resultat as $item)
            {
                $category = new Category($item["title"], $item["description"]);
                $category -> setId($item["id"]);
                $categories[] = $category;
            }
            
            return $categories;
        }
        
        
        // findOne(int $id) qui retourne la catégorie qui a l'id passé en paramètre, null si elle n'existe pas
            public function findOne(int $id): ?Category
            {
                $query = $this->db->prepare("SELECT * FROM categories WHERE id = :id");
            
                $parameters = ['id' => $id]; 
                $query->execute($parameters);
            
                $item = $query->fetch(PDO::FETCH_ASSOC);
            
                if ($item) {
                    $category = new Category($item["title"], $item["description"]);
                    $category->setId($item["id"]);
                    return $category;
                }
            
                return null;
            }
                        
            
            
            // findByPost(int $postId) qui retourne sous forme de tableau associatif les informations des catégories liées au post qui à l'id passé en paramètre
            
           public function findByPost(int $postId): array
                {
                    $query = $this->db->prepare('
                        SELECT * FROM categories
                        JOIN posts_categories ON categories.id = posts_categories.category_id
                        WHERE posts_categories.post_id = :postId
                    ');
                
                    $parameters = ['postId' => $postId];
                    $query->execute($parameters);
                
                    $resultat = $query->fetchAll(PDO::FETCH_ASSOC);
                    $categories = [];
                
                    foreach ($resultat as $item) {
                        $category = new Category($item["title"], $item["description"]);
                        $category->setId($item["id"]);
                        $categories[] = $category;
                    }
                
                    return $categories;
                }

        
}

















