<?php

namespace Http\Forms;

use Core\Validator;
use Core\ValidationException;

class LoginForm {
	protected $errors;
	public $attributes;

	public function __construct($attributes) {

		$errors = []; 

		if (!Validator::email($attributes['email'])) {
			$this->errors['email'] = 'Please provide a valid email address';

		}
		if (!Validator::string($attributes['password'])) {
			$this->errors['password'] = 'Please provide a valid password ';

		}
	}
	public static function validate ($attributes) {
		$instance = new static($attributes);

		if ($instance->failed()) {
			throw new ValidationException();
		}

		return $instance;
	}

	public function failed() {
		return count($this->errors);
	}

	public function errors() {
		return $this->errors; 
	}

	public function error($field, $message) {
		$this->errors[$field] = $message;
	}
}