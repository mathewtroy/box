<?php
session_start();

require '../db/config.php';

session_unset();
session_destroy();
    
header('location:../models/home.php'); 
?>