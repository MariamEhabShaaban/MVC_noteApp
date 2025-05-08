<?php

require 'routes.php';
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function abort($code=404){
    http_response_code($code);
    require "controllers/{$code}.php";
    die();
}


function routeToController($uri,$router){
    if (array_key_exists($uri, $router)) {
   
        require $router[$uri];
    } else {
        abort(Response::NOT_FOUND);
    }
    
}

//dd($uri);
routeToController($uri,$router);