<?php

$config=require 'config.php';
$db= new Database($config['database'],'root','');
$notes=$db->qurey('SELECT * FROM `notes`')->getAll();



$heading='Notes';
require 'views/notes/index.view.php';