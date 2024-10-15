<?php require "../db/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home</title>

      <!-- Import CSS section from PHP file -->
      <?php require "inc/_style.php" ?>

   </head>

   <body>

      <!-- Import header section from PHP file -->
      <?php require "inc/_header.php" ?>

      <div class="main">
        
         <!-- background of about -->
         <div class="heading-home"> 
            
            <h1>Home</h1>
         
         </div>
      </div>

      <section class="home">

         <h2 class="heading-title">Boxing is not just a sport it is a way of life</h2>

         <div class="box-container">

         <div class="boxing">
               <div class="image">
                  <img src="/<?= IMAGES_URL ?>ali.jpg" alt="Ali8">

               </div>
            </div>

            <div class="boxing">
               <div class="image">
                  <img src="/<?= IMAGES_URL ?>ali-2.jpg" alt="Ali">

               </div>
            </div>

            <div class="boxing">
               <div class="image">
                  <img src="/<?= IMAGES_URL ?>ali-3.jpg" alt="Ali">
               </div>
            </div>

            <div class="boxing">
               <div class="image">
                  <img src="/<?= IMAGES_URL ?>ali-4.jpg" alt="Ali">
               </div>
            </div>

         </div>

         <div class="content">
            <h3>up to 25% off</h3>
            <p>Book now and you will get discount</p>
            <p>Or Invite a friend you will also get a discount</p>
            <a href="booking.php" class="btn">Book now</a>
         </div>


      </section>



      <!-- Import footer section from PHP file -->
      <?php require "inc/_footer.php" ?>

   </body>
</html>