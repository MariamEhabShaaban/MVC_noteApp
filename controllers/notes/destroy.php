<?php
use Core\App;

$db=App::container()->resolve(\Core\Database::class);

$currentUserId = 1;

$id=$_POST['id'];

$note = $db->query('SELECT * FROM notes WHERE id =?', [$id])->findORfail();

authorize($note['user_id'] === $currentUserId);

$db->query('DELETE FROM notes WHERE id = ?', [$id]);


header('location: /notes');

exit();