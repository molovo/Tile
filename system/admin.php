<?php

/*  
	*
	Not too sure on this class
	*
*/
class Admin {
	
	var $image;
	var $connection;

	//construct admin variables
	public function __construct($newImage) {
		$this->image = $newImage;
		$this->connection = 
	}

	//function for storing image variable in database
	public function storeImage() {
		$this->connection->query('INSERT $this->image INTO table_name');
	}

	
}