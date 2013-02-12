<?php

class Admin {
	public function __construct($config) {
		$this->connection = new Database($config);
	}
	
	public function render($view) {
		$base = $_SERVER['DOCUMENT_ROOT'] . 'admin/page/';
		
		if(!file_exists($base . $view . '.php')) {
			$view = 404;
		}
	
		include_once $base . $view . '.php';
	}
}
