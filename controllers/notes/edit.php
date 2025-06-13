<?php



use Core\App;
// $cur_user_id=1;
$db=App::container()->resolve(\Core\Database::class);

$id=$_GET['id'];

$note=$db->query('SELECT * FROM `notes` WHERE id=?',[$id])->findORfail();

authorize($cur_user_id ==$note['user_id']);

require view('notes/edit.view.php',[
    'heading'=>'Edit'
]);