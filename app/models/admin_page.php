<?php
require "../db/config.php";

if(!isset($_SESSION['admin_name'])){
   header('location:../controllers/login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- Import CSS section from PHP file -->
   <?php require "inc/_style.php" ?>

</head>
<body>
      
   <div class="container">

        <div class="content">
            <h3>Hi, <span>admin</span></h3>
            <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
            <p>This is an admin page</p>

            <a href="../models/home.php">Home</a>
            <a href="../models/about.php">About</a>
            <a href="../controllers/review.php"> Review</a>
            <a href="../controllers/booking.php">Booking</a>

            <a href="../controllers/logout.php" class="btn">logout</a>
        </div>

   </div>

</body>
</html>