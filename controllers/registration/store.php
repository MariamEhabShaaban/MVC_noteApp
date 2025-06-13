<?php

use Core\validator;
use Core\App;
$email = $_POST['email'];

$password = $_POST['password'];

// validation 
$errors=[];
if(!validator::email($email)){
      $errors['email']='Enter a valid email';
}

if(!validator::string($password,7,255)){
    $errors['password']='password must be at least 7 chars';
}
if(!empty($errors)){
    require view('registration/create.view.php',[
        'errors'=>$errors
    ]);
}


$db=App::container()->resolve(\Core\Database::class);
$user=$db->query('SELECT * FROM users WHERE email =?',[$email])->find();


if(!$user){
    $password=md5($password);
    $db->query('INSERT INTO users (email,password) VALUES (?,?)',[$email,$password]);
    $_SESSION['user']=[
        'email'=>$email
    ];
    header('location:/');
    exit;
}
else{
    header('location:/');
    exit;
}



// insert into database



