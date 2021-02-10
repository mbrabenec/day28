<?php

require_once 'DB.php';
require_once 'DB_functions.php';

require_once 'Region.php';

connect('localhost', 'world', 'root', '');

$region = new Region;
$region->name = 'Asia';
$region->insert();

echo 'A region with id' . $region->id . 'was inserted';