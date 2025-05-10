<?php
use Core\Database;
$cur_user_id=1;
$config=require base_path('config.php');

$db= new Database($config['database'],'root','');

$id=$_GET['id'];



$note=$db->qurey('SELECT * FROM `notes` WHERE id=?',[$id])->findORfail();

authorize($cur_user_id !=$note['user_id']);

$heading='Note';

require view('notes/show.php',[
    'heading'=>$heading
]);
