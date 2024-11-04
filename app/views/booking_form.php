<!-- Booking section starts -->

<section class="booking">

   <h2 class="heading-title">Reserve personal training now</h2>

<!-- For non-users -->
      <!-- 
      Unauthorized users see Login page , Register Page
      -->
      <?php if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_name']) ): ?>
         
      <p class="nonuser">If you have a profile in this website, 
         you can create a reservation for training.
         To do this, log into your account.
      </p>
      
      <?php else:?>

<!-- For USERS -->

      <!--  Authorized users see Log Out page -->


<!-- <div > -->

   <div class="form-container">
   <form 
   action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
   class="book-form" 
   id="book_form" 
   method="post">


      <div class="form-control">

         <label for="name_b" class="inputBox">Firstname</label>
         <p class="inform">Use only Latin letter, min. 2 characters,
            max. 20 characters</p>
         <input type="text" 
         name="name_b" 
         value="<?= htmlspecialchars($name_b); ?>"
         placeholder="Enter firstname (Required)" 
         required pattern ='[A-Za-z].{1,19}'
         id="name_b">
         <span class="error"></span>

         <?php
               if (isset($validateNameBookMin) && $validateNameBookMin == false) {
                  echo '<span class="error">Firstname must be at least 2 characters</span>';
               }

               if (isset($validateNameBookMax) && $validateNameBookMax == false) {
                  echo '<span class="error">Firstname must be no more than 20 characters</span>';
               }

               if (isset($validateNameBookPattern) && $validateNameBookPattern == false) {
                  echo '<span class="error">Firstname must contain only Latin alphabets</span>';
               }    
         ?>
      </div>


      <div class="form-control">

         <label for="email_b" class="inputBox">Email</label>
         <p class="inform">Use an email like *example@mail.cz, do not use special 
            characters</p>
         <input type="email" 
         name="email_b"  
         value="<?= htmlspecialchars($email_b); ?>"
         placeholder="Enter email (Required)"
         required pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$'
         id="email_b">
         <span class="error"></span>
<!-- 
 -->
         <?php
               if (isset($validateEmailBookPattern) && $validateEmailBookPattern == false) {
                  echo '<span class="error">Provide a valid email address, 
                  please</span>';
               }
         ?>
      </div>


      <div class="form-control">
         
         <label for="phone" class="inputBox">Phone</label>
         <p class="inform">Use an phone number like *777111222, use only 
            digits, maximum 9 digits</p>
         <input type="number" 
         name="phone" 
         min= "700000000"
         max= "799999999"
         value="<?= htmlspecialchars($phone); ?>"
         required placeholder="Enter phone number (Required)" 
         id="phone">
         <span class="error"></span>

         <?php

               if (isset($validateStartPhone) && $validateStartPhone == false) {
                  echo '<span class="error">Phone must start from digit 7 
                  and contain 9 characters</span>';
               }
   
         ?>
         <!-- 776123123 - Czech phone number -->
         <!-- User can write only DIGITS because of the type="number" -->

      </div>

      <div class="form-control">

         <label for="reservation" class="inputBox">Reservation</label>
         <p class="inform">Choose reservation date</p>
         <input type="date" 
         name="reservation" 
         value="<?= htmlspecialchars($reservation); ?>"
         min="<?= date('Y-m-d') ?>" 
         required
         id="reservation">
         <!-- minimal value is today date -->
         <!-- https://stackoverflow.com/questions/6982692/how-to-set-input-type-dates-default-value-to-today -->
         <span class="error"></span>

      </div>
         <input type="submit" name="do_send" value="Send booking" class="btn">
      </div>


      <!-- CSRF -->


   </form>
   </div>

   <?php endif; ?>
   <!-- </div>    -->

</section>

<!-- Booking section ends -->