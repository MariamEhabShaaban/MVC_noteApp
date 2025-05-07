<?php

$router = [
    '/mvc/' => 'controllers/home.php',
    '/mvc/about' => 'controllers/about.php',
    '/mvc/contact' => 'controllers/contact.php',
     '/mvc/notes' => 'controllers/notes.php',
      '/mvc/note' => 'controllers/note.php'
];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function abort($code){
    http_response_code($code);
    require "controllers/{$code}.php";
}


function routeToController($uri,$router){
    if (array_key_exists($uri, $router)) {
   
        require $router[$uri];
    } else {
        abort(404);
    }
    
}

//dd($uri);
routeToController($uri,$router);