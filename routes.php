<?php

// $router = [
//     '/' => 'controllers/home.php',
//     '/about' => 'controllers/about.php',
//     '/contact' => 'controllers/contact.php',
//      '/notes' => 'controllers/notes/index.php',
//       '/note' => 'controllers/notes/show.php',
//       '/note/create' => 'controllers/notes/create.php'

// ];


$router->get('/', 'controllers/home.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

// Notes routes
$router->delete('/note', 'controllers/notes/destroy.php');
$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/note/create', 'controllers/notes/create.php');
$router->post('/note/create', 'controllers/notes/create.php');
$router->get('/note/edit', 'controllers/notes/edit.php');

$router->post('/notes', 'controllers/notes/store.php');

$router->patch('/note', 'controllers/notes/update.php');