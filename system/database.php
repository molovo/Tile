<?php

class Database {

	private $_config;
	public $connection = false;
	
	public function __construct($config) {
		//  Save the config in its own object
		$this->_config = $config;
		
		//  If there's no connection, try to start it
		if($this->connection === false) {
			try {
				//  Build the query string
				$connection = 'mysql:host=' . $this->_config['host'] . ';dbname=' . $this->_config['name'] . ';port=' . $this->_config['port'];
		
				//  Initiate the connection
				$this->connection = new PDO($connection, $this->_config['user'], $this->_config['pass'], array(
					PDO::ATTR_PERSISTENT => true
				));
		
				//  Fix any character set issues
				$this->connection->exec('set character set utf8');
			} catch(PDOException $e) {
				//  die(var_dump($e));
			}
		}
	}
}
