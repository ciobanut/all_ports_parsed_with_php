<?php

use Core\App;
$db = App::resolve(Core\Database::class);


$currentUserId = 1;

$query = "select * from notes where id = :id";
$note = $db->query($query, [
	'id' => $_POST['id']
	])->findOrFail();

authorize($note['user_id'] === $currentUserId);
$db->query('delete from notes where id = :id', [
	'id'	=>	$_POST['id']
]);

header('location: /notes');
exit();