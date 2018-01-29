<?php

$server = 'servicedesktintegra-mysqldbserver.mysql.database.azure.com';
$username = 'mysqldbuser@servicedesktintegra-mysqldbserver';
$password = 'T$oport02018';
$database = 'mysqldatabase38707';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
