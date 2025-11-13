<?php

class ProductController
{
    public function index()
    {
        $products = (new Product)->all();
        include_once "Views/clients/list.php";
    }
    public function show()
    {
        //Lấy id trên URL
        $id = $_GET['id'];
        // $categories = (new Category)->all();
        $data = (new Product)->find($id);
        $products = (new Product)->getOther($data);
        include_once "Views/clients/detail.php";
    }
}
