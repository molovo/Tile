<?php
  /*
	* Tile CMS 
	* Connect to database code
  * by Jack Emerson	
	*/
	define('HOST', 'localhost');
	define('USER', 'admin');
	define('PASS', '');
	define('NAME', 'images');
	
  $connecion = mysqli_connect('localhost', 'admin', '', 'images');
?>