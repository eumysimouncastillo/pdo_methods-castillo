<?php

$host = "localhost"; // host name of database
$user = "root"; // username of database
$password = ""; // password of database
$dbname = "castillo"; //my database name
$dsn = "mysql:host={$host};dbname={$dbname}"; // data source name to be used in pdo

$pdo = new PDO($dsn, $user, $password); // to establish a database connection
$pdo->exec("SET time_zone = '+08:00';"); // to set time zone

?>
