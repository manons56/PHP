<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CommentManager extends AbstractManager
{
    
         public function __construct()
            {
                parent::__construct();
            }
            
            

            // findByPost(int $postId) qui retourne les commentaires ayant le post dont l'id est passé en paramètre

            public function findByPost(int $postId): array
                {
                    $userManager = new UserManager();
                    $postManager = new PostManager();
                
                    $query = $this->db->prepare("SELECT * FROM comments WHERE post_id = :post_id");
                
                    $parameters = [
                        "post_id" => $postId
                    ];
                
                    $query->execute($parameters);
                    $results = $query->fetchAll(PDO::FETCH_ASSOC);
                
                    $comments = [];
                
                    foreach ($results as $result) {
                        $user = $userManager->findOne($result["user_id"]);
                        $post = $postManager->findOne($result["post_id"]);
                
                        $comment = new Comment($result["content"], $user, $post);
                        $comment->setId($result["id"]);
                
                        $comments[] = $comment;
                    }
                
                    return $comments;
                }






                // create(Comment $comment) qui insère le commentaire passé en paramètres dans la base de données


                public function create(Comment $comment): void
                {
                    
                    $query = $this->db->prepare("
                        INSERT INTO comments (content, user_id, post_id)
                        VALUES (:content, :user_id, :post_id)
                    ");
                
                    $parameters = [
                        "content"   => $comment->getContent(),
                        "user_id"   => $comment->getUser()-> getId(),
                        "post_id"   => $comment->getPost() -> getId(),
                        
                    ];
                
                    $query->execute($parameters);
                    $comment->setId($this->db->lastInsertId());
                  
                }
                
                
                
    
}            
                
        