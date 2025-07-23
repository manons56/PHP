<?php



class Router
{
    private PostsController $pc;
    private CategoryController $cc;

    public function __construct()
    {
        $this->pc = new PostsController();
        $this->cc = new CategoryController();
    }
    
   
    public function handleRequest(array $get) : void
    {
        if (isset($get["route"]) && $get["route"] === "posts")
        {
            $this->pc->showAllPosts();
        }
        else if(isset($get["route"]) && $get["route"] === "categories")
        {
            $this->cc->showAllCategories();
        }
        else
        {
            $this->cc->showAllCategories();
        }
    }
}