<?php

$server = 'servicedesktintegra-mysqldbserver.mysql.database.azure.com:3306';
$username = 'mysqldbuser@servicedesktintegra-mysqldbserver';
$password = 'T$oport02018';
$database = 'php_login_database';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
