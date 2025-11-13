<?php
require_once "Models/Product.php";

class HomeController
{
    function index()
    {
        $products = (new Product)->all();
        include_once "Views/clients/home.php";
    }

    function error404()
    {
        echo "404 FILE NOT FOUND";
    }
}
