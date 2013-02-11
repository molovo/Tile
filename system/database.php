<?php

//require connection array
$config = require_once 'config.php';

class Database {

	public $connection;
	
	public function __construct($connection) {
		$this->connection = new PDO ('mysql:host=' . $this->config['host'] .)
	}
}
