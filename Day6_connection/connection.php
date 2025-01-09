<?php 
$dbtype = "mysql";
$host = "localhost";
$dbname = "iti_php_int_2025";
$userName = "root";
$password = "";

$connection = new PDO("$dbtype:host=$host;dbname=$dbname", $userName, $password);
// <!-- var_dump($connetion);



?>