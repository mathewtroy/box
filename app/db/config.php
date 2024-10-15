<?php
// config.php

//  Path to public resources
define('PUBLIC_URL', 'public/');

//  Paths for directories inside public
define('CSS_URL', PUBLIC_URL . 'css/');
define('JS_URL', PUBLIC_URL . 'js/');
define('IMAGES_URL', PUBLIC_URL . 'images/');

//  Paths for application logic
define('APP_PATH', '../app/');
define('DB_PATH', APP_PATH . 'db/');
define('MODELS_PATH', APP_PATH . 'models/');
define('CONTROLLERS_PATH', 'controllers/');
define('VIEWS_PATH', APP_PATH . 'views/');

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