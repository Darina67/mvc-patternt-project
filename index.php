<?php


function dd($data){
    echo '<pre>';
    echo (var_dump($data));
    echo '</pre>';
}

require __DIR__ . "./vendor/autoload.php";

require "bootstrap.php";

