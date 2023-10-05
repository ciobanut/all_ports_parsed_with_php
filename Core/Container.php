<?php

namespace Core;

class Container {

	protected $bidings = [];
	public function bind($key, $resolver) {
		$this->bidings[$key] = $resolver;
	}

	public function resolve($key) {
		if (! array_key_exists($key, $this->bidings)) {
			throw new \Exception("No matching bindings found for {$key}");
		}


		$resolver = $this->bidings[$key];

		return call_user_func($resolver);


	}
}