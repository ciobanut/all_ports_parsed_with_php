<?php

use Core\App;
$db = App::resolve(Core\Database::class);

$currentUserId = 1;

$query = "select * from notes where id = :id";
$note = $db->query($query, [
	'id' => $_GET['id']
	])->findOrFail();

authorize($note['user_id'] === $currentUserId);

views("notes/show.view.php", [
	'heading'	=>	'My Note',
	'note'	=>	$note
]);