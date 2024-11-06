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

      <?php require "inc/_header.php" ?>

      <div class="main">
         <div><h1>Home</h1></div>
      </div>

      <section class="home">

         <h2>Boxing is not just a sport it is a way of life</h2>

         <div class="box-container">

            <div class="boxing">
               <div class="image">
                  <img src="/secure/public/images/ali.jpg" alt="Ali8">

               </div>
            </div>

            <div class="boxing">
               <div class="image">
                  <img src="/secure/public/images/ali-2.jpg" alt="Ali">

               </div>
            </div>

            <div class="boxing">
               <div class="image">
                  <img src="/secure/public/images/ali-3.jpg" alt="Ali">
               </div>
            </div>

            <div class="boxing">
               <div class="image">
                  <img src="/secure/public/images/ali-4.jpg" alt="Ali">
               </div>
            </div>

         </div>

         <h2>Float like a butterfly, sting like a bee...</h2>

      </section>

      <?php require "inc/_footer.php" ?>

   </body>
</html>