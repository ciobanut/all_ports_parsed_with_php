<?php

use Core\App;

$db = App::resolve(Core\Database::class);

$currentUserId = 1;
$query = "select * from notes where user_id = :id";
$notes = $db->query($query, ['id' => $currentUserId])->get();

views("notes/index.view.php", [
	'heading'	=>	'My Notes',
	'notes'	=>	$notes
]);