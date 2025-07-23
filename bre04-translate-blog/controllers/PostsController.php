<?php
class PostsController  {

    private PostsManager $postsManager;

    public function __construct() {
        $this->postsManager = new PostsManager();
    }

    public function showAllPosts(): void {
        $posts = $this->postsManager->findAll();
        $partials = "posts.phtml";
        require '../views/templates/layout.phtml';
        
    }

   
}

