<?php

//  Get the config
$config = require_once 'system/config.php';

//  Include the Tile class
include_once 'tile/tile.php';

//  Create a new Tile object
$tile = new Tile($config);

//  And output
echo $tile->render();
