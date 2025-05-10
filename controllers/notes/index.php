<?php
use Core\Database;


$config=require base_path('config.php');

$db= new Database($config['database'],'root','');

$notes=$db->qurey('SELECT * FROM `notes`')->getAll();

$heading='Notes';

require view('notes/index.view.php',[
    'heading'=>$heading,
    'notes'=>$notes
]);