<?php 


// connection

try {
    $connection = new PDO(
        'mysql:dbname=world;host=localhost;charset=utf8', // connection string
        'root', // username
        '' // password
    );
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// querey

$query = "
    SELECT `cities`.*
    FROM `cities`
    WHERE `cities`.`name`
    LIKE  'Pra%'
    or 
    `cities`.`name`
    LIKE '% Pra%'
";

$statement = $connection->prepare($query);
$statement->setFetchMode(PDO::FETCH_CLASS, 'cities');

$success = $statement->execute();

if(!$success) echo "Error executing statement";
$all_results = $statement->fetchAll();

var_dump($all_results);

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
    <h1>test</h1>
</body>
</html>