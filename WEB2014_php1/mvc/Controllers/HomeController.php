<?php

class HomeController
{
    function index()
    {
        $categories = (new Category)->all();
        include_once "Views/clients/home.php";
    }

    function error404()
    {
        echo "404 FILE NOT FOUND";
    }
}
