<?php

echo "<h1 style='text-align:center'>Select Data </h1>";

// include('connection.php');
require('connection.php');

/*** insert , select , update ,delete */
$query = "SELECT * FROM users";
$statment = $connection->prepare($query);
$statment->execute();
// $result = $statment->fetch(PDO::FETCH_ASSOC);  // one line
$result = $statment->fetchAll(PDO::FETCH_ASSOC);  // all lines
print_r($result);
