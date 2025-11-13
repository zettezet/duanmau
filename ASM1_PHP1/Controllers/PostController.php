<?php

class PostController
{
    protected $post;
    public function __construct()
    {
        $this->post = new Post;
    }
    public function index()
    {
        $list_id = $_GET['id'] ?? '';

        $posts = $this->post->productInCategory($list_id);

        $listModel = new Listmodels();

        $list = $listModel->all();

        $category = $listModel->find($list_id);

        include_once "Views/clients/list.php";
    }

    public function show()
    {
        //Lấy id trên URL
        $id = $_GET['id'] ?? '';
        $lists = (new Listmodels)->all();
        $post = $this->post->find($id);
        include_once "Views/clients/detail.php";
    }
}
