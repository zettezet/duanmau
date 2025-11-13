<?php

class HomeController {
    function index(){
        $genres = (new Genre)->all();
        include_once "Views/movies/list.php";
    }

    function error404(){
        echo "404 FILE NOT FOUND";
    }
}