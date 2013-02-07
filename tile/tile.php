<?php

class Tile {
	public $config;
	
	/**
	 *   Set up the Tile variables
	 */
	public function __construct($config) {
		$this->config = $config;
	}
	
	/**
	 *   Print the results of Tile to the screen
	 */
	public function output() {
		var_dump($config);
	}
}
