<?php 
require "../db/config.php"; 
require "../models/lib/validate_booking.php";

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


   $validateNameBookMin = valNameBookMin($name_b);
   $validateNameBookMax = valNameBookMax($name_b);
   $validateNameBookPattern = valNameBookPattern($name_b);
   $validateEmailBookPattern = valBookEmailAll($email_b);
   $validateStartPhone = valStartPhone($phone);

   if ($validateNameBookMin && $validateNameBookMax && $validateNameBookPattern 
   && $validateEmailBookPattern && $validateStartPhone) {
      // everything is OK, I can work with data
      // perhaps create a new user in the DB
      $request = " INSERT INTO book_form(name_b, email_b, phone, reservation) 
      VALUES('$name_b','$email_b','$phone','$reservation') ";
      mysqli_query($conn, $request);

      header('location:book.php');
   } else {
         // error, I stop at the form and display errors
   }


// }else{
//    echo 'Something went wrong please try again!';
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