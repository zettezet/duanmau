<?php

require_once "connection.php";
require_once "Controller.php";

$c = $_GET['c'] ?? '';

$mess = match ($c) {
    '' => index(),
    'create' => create(),
    'edit' => edit(),
    default => "404 NOT FOUND !!!",
};
echo $mess;