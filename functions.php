<?php


function dd($data){
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function uriIs($uri){
    return $uri==$_SERVER['REQUEST_URI'];
}