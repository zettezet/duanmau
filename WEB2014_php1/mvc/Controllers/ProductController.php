<?php

class ProductController
{
    protected $product;
    public function __construct()
    {
        $this->product = new Product;
    }
    public function index()
    {
        //Lấy category_id trên URL
        $category_id = $_GET['id'];

        $products = $this->product->productInCategory($category_id);
        $categories = (new Category)->all();
        include_once "Views/clients/list.php";
    }

    public function show()
    {
        //Lấy id trên URL
        $id = $_GET['id'];
        $categories = (new Category)->all();
        $product = $this->product->find($id);
        include_once "Views/clients/detail.php";
    }
}
