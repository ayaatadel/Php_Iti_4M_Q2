<?php

echo "<h1 style='text-align:center'>Connection with database </h1>";
/**
 * connection database ==> mysqli  ==>sql  ===> deprecated after v5 of php
 * ======================> PDO ======> sql ,postgree   ====>  class 
 * 
 * connection with database ===> setCraditionals
 * ==> dbtype
 * ==> host
 * ==> dbname
 * ===> userName
 * ===>password
 * 
 * ===>pdo(database basics,$username,$password)
 */
$dbtype="mysql";
$host="localhost";
$dbname="iti_php_int_2025";
$userName="root";
$password="";

 $connetion=new PDO("$dbtype:host=$host;dbname=$dbname",$userName,$password);
 var_dump($connetion);


 /*** insert , select , update ,delete */
//  INSERT into users(name,email,PASSWORD) VALUES('nada','nada@gmail.com','123');
 $query="INSERT into users(name,email,PASSWORD)  VALUES('nour','nour@gmail.com','123')";
//  $query="INSERT into users(id,name,email,PASSWORD)  VALUES(7,'masood','masood@gmail.com','123')";
//  var_dump($query);
$statment=$connection->prepare($query);
$statment->execute();

