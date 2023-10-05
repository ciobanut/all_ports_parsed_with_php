<?php

use Core\Authenticator;
use Http\Forms\LoginForm;
use Core\Session;

$form = LoginForm::validate($attributes = [
	'email' => $_POST['email'],
	'password' => $_POST['password']
]);

$auth = new Authenticator();
if ($auth->attempt($attributes['email'], $attributes['password'])) {
	redirect('/');
}

$form->error('email', 'No matching account found for that email address and password.');


Session::flash('errors', $form->errors());
Session::flash('old', [
	'email' => $_POST['email']
]);

return redirect('/login');