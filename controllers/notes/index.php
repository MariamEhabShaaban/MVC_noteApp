<?php
use Core\Database;


$config=require base_path('config.php');

$db= new Database($config['database'],'root','');


$user_id=1;

$notes=$db->query('SELECT * FROM `notes` WHERE user_id=?',[$user_id])->getAll();

$heading='Notes';

require view('notes/index.view.php',[
    'heading'=>$heading,
    'notes'=>$notes
]);