<?php 

require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Country.php';


//connect to database. DB object keeps the connection and uses it for all queries
$success = connect('localhost', 'world', 'root', '');


//select function - preps and executes querey + runs FetchAll on statement, returns result



function get_cities($page_nr = 0) {

    $offset = ($page_nr - 1) * 20;

    $results = select(
        "SELECT * 
        FROM `cities` 
        ORDER BY `cities`.`name` ASC
        LIMIT $offset, 20"
    );

    var_dump($results);


}

get_cities(5);