<?php
session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'user-db';

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("We apologize. Database is not working. 
  We will fix the problem in the near future." . 
  $conn->connect_error);
}

// echo "Connected successfully";

?>