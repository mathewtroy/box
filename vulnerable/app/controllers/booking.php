<?php 
require "../db/config.php"; 

$name_b = '';
$email_b = '';
$phone = '';
$reservation = '';
$bookFormIsSent = isset($_POST['do_send']);

if($bookFormIsSent) {

   $name_b = $_POST['name_b'];
   $email_b = $_POST['email_b'];
   $phone = $_POST['phone'];
   $reservation = $_POST['reservation'];

   $request = " INSERT INTO bookings(name_b, email_b, phone, reservation) 
   VALUES('$name_b','$email_b','$phone','$reservation') ";
   mysqli_query($conn, $request);
   header('location:../controllers/booking.php');
}


?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>booking</title>

      <!-- Import CSS section from PHP file -->
      <?php require "../models/inc/_style.php" ?>

   </head>
    
   <body>

      <!-- Import header section from PHP file -->
      <?php require "../models/inc/_header.php" ?>

      <div class="main">
         <div><h1>Booking</h1></div>
      </div>

      <!-- Import booking section from PHP file -->
      <?php require "../views/booking_form.php" ?>

      <!-- Import footer section from PHP file -->
      <?php require "../models/inc/_footer.php" ?>

   </body>
</html>