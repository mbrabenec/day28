<?php 

require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Country.php';


//connect to database. DB object keeps the connection and uses it for all queries
$success = connect('localhost', 'world', 'root', '');


//select function - preps and executes querey + runs FetchAll on statement, returns result
$results = select(
    'SELECT * FROM `countries` WHERE `population` > ?', [20000000], 'Country');   ///SQLi prevention. Array contains subsititutions as correct data types and values

var_dump($results);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    
    <?php foreach($results as $country) : ?>

        <li>
        <?= $country->name ?><br>
        <?= $country->getSurfaceFormatted() ?>
        </li>


    <?php endforeach ?>
    
    </ul>
</body>
</html>