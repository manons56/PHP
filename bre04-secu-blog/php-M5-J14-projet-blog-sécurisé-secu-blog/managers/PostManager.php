<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */



class PostManager extends AbstractManager
{


             public function __construct()
                    {
                        parent::__construct();
                    }




            // findLatest() qui retourne les 4 derniers posts
                 public function findLatest() : array
                            {
                                $um = new UserManager();
                                $cm = new CategoryManager();
                        
                                $query = $this->db->prepare('SELECT * FROM posts ORDER BY id DESC LIMIT 4');
                        
                        
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_ASSOC)
                                
                                $posts = [];
                        
                               foreach ($results as $result) {
                                    $user = $um->findOne($result["author"]);
                                    $categories = $cm->findByPost($result["id"]);
                            
                                    $post = new Post(
                                        $result["title"],
                                        $result["excerpt"],
                                        $result["content"],
                                        $user,
                                        DateTime::createFromFormat('Y-m-d H:i:s', $result["created_at"]),
                                        $categories
                                    );
                            
                                    $post->setId($result["id"]);
                                    $posts[] = $post;
                                }
                        
                                    return $posts;
                                }
                        
                               
                 }


            // findOne(int $id) qui retourne le post qui a l'id passé en paramètre, null si il n'existe pas


           public function findOne(int $id) : ? Post
            {
                $um = new UserManager();
                $cm = new CategoryManager();
        
                $query = $this->db->prepare('SELECT * FROM posts WHERE id=:id');
        
                $parameters = [
                    "id" => $id
                ];
        
                $query->execute($parameters);
                $result = $query->fetch(PDO::FETCH_ASSOC);
        
                if($result)
                {
                    $categories = $cm->findByPost($result["id"]);
                    $user = $um->findOne($result["author"]);
                    $post = new Post($result["title"], $result["excerpt"], $result["content"], $user, DateTime::createFromFormat('Y-m-d H:i:s', $result["created_at"]), $categories);
                    $post->setId($result["id"]);
            
        
                    return $post;
                }
        
                return null;
            }
                 

            // findByCategory(int $categoryId) qui retourne les posts ayant la catégorie dont l'id est passé en paramètre
            
             public function findByCategory(int $categoryId): array
                {
                    $userManager = new UserManager();
                    $categoryManager = new CategoryManager();
                
                    
                    $query = $this->db->prepare(
                        "SELECT * FROM posts
                         JOIN post_category ON posts.id = post_category.post_id
                         WHERE post_category.category_id = :category_id"
                    );
                
                    $parameters = [
                        "category_id" => $categoryId
                    ];
                
                    $query->execute($parameters);
                    $results = $query->fetchAll(PDO::FETCH_ASSOC);
                
                    $posts = [];
                
                    foreach ($results as $result) {
                        $user = $userManager->findOne($result["author"]);
                        $categories = $categoryManager->findByPost($result["id"]);
                
                       
                        $post = new Post(
                            $result["title"],
                            $result["excerpt"],
                            $result["content"],
                            $user,
                            DateTime::createFromFormat('Y-m-d H:i:s', $result["created_at"]),
                            $categories
                        );
                
                        $post->setId($result["id"]);
                        $posts[] = $post;
                    }
                
                    return $posts;
                }
            


}