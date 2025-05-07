<?php
//require_once 'Response.php';

require_once 'Database.php';
$config=require 'config.php';
$db= new Database($config['database'],'root','');


$id=$_GET['id'];
$cur_user_id=1;
$notes=$db->qurey('SELECT * FROM `notes` WHERE id=? AND user_id=?',[$id,$cur_user_id]);
 if(!$notes){
    abort(403);
 }
$heading='Note';
require 'views/note.view.php';