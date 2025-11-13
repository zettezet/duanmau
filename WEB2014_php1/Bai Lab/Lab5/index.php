<?php
require_once "config.php";
require_once "Controllers/HomeController.php";
require_once "Controllers/MovieController.php";
$c = $_GET['c'] ?? '';
match ($c) {
    'index'  => (new MovieController)->index(),
    'create' => (new MovieController)->create(),
    'store'  => (new MovieController)->store(),
    'delete' => (new MovieController)->delete(),
    'edit' => (new MovieController)->edit(),
    'update' => (new MovieController)->update(),
    default => (new HomeController)->error404()
};
