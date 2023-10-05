<?php
use Core\App;
use Core\Validator;
use Core\Database;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)) {
	$errors['email'] = 'Please provide a valid email address';

}
if (!Validator::string($password, 2, 255)) {
	$errors['password'] = 'Password must have 7 - 255 characters.';

}

if (! empty($errors)) {
	return views('registration/create.view.php', [
		'errors' => $errors
	]);
}

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
	'email' => $email
])->find();

if ($user) {
	header('Location: /');
	exit();
} else {
	$db->query('INSERT INTO users(email, password) VALUES (:email, :password)', [
		'email' => $email,
		'password' => password_hash($password, PASSWORD_BCRYPT)
	]);
	
	login($user);
	
	header('Location: /');
	exit();
}

// eu vreau ca 'cineva' sa ma creada 'cum' si sa faca 'ce'
// eu vreau ca fetele in ajun de nunta sa ma creada cel mai bun fotograf si sa comande de la mine
