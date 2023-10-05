<?php

use Core\Response;

function dd($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';

    die();
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN) {
    if (!$condition) {
        abort($status);
    }
}

function base_path($path) {
	return BASE_PATH . $path;
}

function views($path, $attributes = []) {
	extract($attributes);

	require base_path('views/' . $path);
}

function abort($code = 404) {
	require base_path("views/{$code}.php");
	die();
}

function redirect($to) {
	header('Location: '.$to);
	exit();
}

function old($key, $default = '') {
	return Core\Session::get('old')[$key] ?? $default;
}