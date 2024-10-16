<?php require "../db/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Booking</title>

      <!-- Import CSS section from PHP file -->
      <?php require "../models/inc/_style.php" ?>

   </head>

   <body>

        <!-- Import header section from PHP file -->
        <?php require "../models/inc/_header.php" ?>

        <div class="main">
            
            <!-- background of about -->
            <div class="heading-home"> 
                
                <h1>Booking</h1>
            
            </div>
        </div>

        <section class="home">

            <h2 class="heading-title">Boxing is not just a sport it is a way of life</h2>

            <div class="box-container">


        </section>

        <!-- Import booking section from PHP file -->
        <?php require "../views/booking_form.php" ?>

        <!-- Import footer section from PHP file -->
        <?php require "../models/inc/_footer.php" ?>

   </body>
</html>