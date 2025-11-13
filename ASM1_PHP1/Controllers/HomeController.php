<?php
require_once "Models/List.php";
require_once "Models/Post.php";

class HomeController {
    function index(){
        $lists = (new Listmodels)->all();
        $posts = (new Post)->all();    
        include_once "Views/clients/home.php"; 
    }

    function error404(){
        echo "404 FILE NOT FOUND";
    }
}
