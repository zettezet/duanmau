<?php
require_once 'Models/Movie.php';
require_once 'Models/Genre.php';
class MovieController {
    public function index(){
        $movies = (new Movie)->all();
        include_once "Views/movies/list.php";
    }
    
    public function create(){
        $genres = (new Genre)->all();
        include_once "Views/movies/add.php";
    }

    public function store(){
        $data = $_POST;
        $data['poster']= '';
        $file = $_FILES['poster'];
        if($file['size'] >0){
            $image = 'posters/' . $file['name'];
            move_uploaded_file($file['tmp_name'], $image);
            $data['poster'] = $image;
        }

        (new Movie)->create($data);
        header("location:" . BASE_URL . '?c=index');
        die;
    }

    public function delete(){
        $id= $_GET['id'];
        (new Movie)->delete($id);
        header("location:" . BASE_URL . '?c=index');
        die;
    }

    public function edit() {
        $id = $_GET['id'] ?? null;
        $movie = (new Movie)->find($id);
        $genres = (new Genre)->all();
        include_once "Views/movies/edit.php";
    }

    public function update(){
        $id = $_GET['id'];
        $movies = (new Movie)->find($id);
        $data = $_POST;
        $data['poster']= '';
        $file = $_FILES['poster'];
        if($file['size'] >0){
            $image = 'posters/' . $file['name'];
            move_uploaded_file($file['tmp_name'], $image);
            $data['poster'] = $image;
        }
        (new Movie)->update($id, $data);
        header("location:" . BASE_URL . '?c=index');
        die;
    }
}