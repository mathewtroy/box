<?php
require "../db/config.php"; 

if(!isset($_SESSION['user_name'])){
   header('location:../controllers/login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>user page</title>
        <?php require "inc/_style.php" ?>
    </head>

    <body>
        <div class="container">
            <div class="content">
                <h2>Welcome, <span><?php echo $_SESSION['user_name'] ?></span></h2>
                <p>This is an user page</p>

                <a href="../models/home.php">Home</a>
                <a href="../models/about.php">About</a>
                <a href="../controllers/review.php"> Review</a>
                <a href="../controllers/booking.php">Booking</a>

                <a href="../controllers/logout.php" class="btn">logout</a>
            </div>
        </div>
    </body>
</html>