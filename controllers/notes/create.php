<?php
use Core\Database;
use Core\validator;

$config=require base_path('config.php');
$db= new Database($config['database']);
$heading ='Create Note';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors=[];
    $body=htmlspecialchars(trim($_POST['body']));
  
    if(!validator::string($body,1,1000)){
        $errors['body']='   Description is required and no more than 1000 chars';
   
    }
    else if(empty($errors)){
        $db->qurey('INSERT INTO `notes` (`body` ,`user_id`) VALUES (?,?)',[$body,1]);
    }
}

require view('notes/create.view.php',[
    'heading'=>'Create'
]);