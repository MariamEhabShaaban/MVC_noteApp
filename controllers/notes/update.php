<?php
use Core\App;
use Core\validator;
$db=App::container()->resolve(\Core\Database::class);

$heading ='Update Note';

    $id=$_POST['id'];
    $errors=[];
    $body=htmlspecialchars(trim($_POST['body']));
  
    if(!validator::string($body,1,1000)){
        $errors['body']='   Description is required and no more than 1000 chars';
        
   
    }
    if(!empty($errors)){
        require view('notes/edit.view.php',[
            'heading'=>'Edit',
            'errors'=>$errors
        ]);
    }
    else if(empty($errors)){
        $db->query('UPDATE notes SET body=? WHERE id=?',[$body,$id]);
        header('location:/notes');
        exit;
    }
    
