<?php

$config=require 'config.php';
$db= new Database($config['database'],'root','');
$notes=$db->qurey('SELECT * FROM `notes`');


$heading='Notes';
require 'views/notes.view.php';