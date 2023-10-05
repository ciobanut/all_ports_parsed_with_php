<?php

use Core\Validator;
use Core\App;
$db = App::resolve(Core\Database::class);

$errors = [];

if (! Validator::string($_POST['body'], 1, 100)) {
	$errors['body'] = 'A body of no more than 100 characters is required!';
}

if (!empty($errors)) {
	return views("notes/create.view.php", [
		'heading'	=>	'Create Note',
		'errors'	=>	$errors
	]);
}

$db -> query('INSERT INTO notes(body, user_id) VALUES (:body, :user_id)', [
	'body' => $_POST['body'],
	'user_id' => 1
]);

header('location: /notes');
die();