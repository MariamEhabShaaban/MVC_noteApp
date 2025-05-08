<?php

$config=require 'config.php';

$db= new Database($config['database'],'root','');


$id=$_GET['id'];

$cur_user_id=1;

$note=$db->qurey('SELECT * FROM `notes` WHERE id=?',[$id])->findORfail();

authorize($cur_user_id !=$note['user_id']);

$heading='Note';

require 'views/notes/show.php';