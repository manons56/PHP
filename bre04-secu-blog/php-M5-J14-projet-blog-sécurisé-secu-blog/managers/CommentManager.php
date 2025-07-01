<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CommentManager extends AbstractManager
{

}




// CommentManager﻿
findByPost(int $postId) qui retourne les commentaires ayant le post dont l'id est passé en paramètre



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





create(Comment $comment) qui insère le commentaire passé en paramètres dans la base de données

