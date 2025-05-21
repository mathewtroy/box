<!-- Booking section starts -->

<section class="booking">

   <h2 class="heading-title">Reserve personal training now</h2>

<!-- For non-users -->
      <!--  Unauthorized users see Login page , Register Page -->
      <?php if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_name']) ): ?>
         
      <p class="nonuser">If you have a profile in this website, 
         you can create a reservation for training.
         To do this, log into your account.
      </p>
      
      <?php else:?>

<!-- For USERS -->

      <!--  Authorized users see Log Out page -->

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
         placeholder="Enter firstname (Required)" 
         id="name_b">
      </div>

      <div class="form-control">
         <label for="email_b" class="inputBox">Email</label>
         <p class="inform">Use an email like *example@mail.cz, do not use special 
            characters</p>
         <input type="text" 
         placeholder="Enter email (Required)"
         id="email_b">
      </div>


      <div class="form-control">
         <label for="phone" class="inputBox">Phone</label>
         <p class="inform">Use an phone number like *777111222, use only 
            digits, maximum 9 digits</p>
         <input type="text" 
         name="phone" 
         placeholder="Enter phone number (Required)" 
         id="phone">
      </div>

      <div class="form-control">
         <label for="reservation" class="inputBox">Reservation</label>
         <p class="inform">Choose reservation date</p>
         <input type="date" 
         id="reservation">
      </div>
         <input type="submit" name="do_send" value="Send booking" class="btn">
      </div>

   </form>
   </div>

   <?php endif; ?>
</section>

<!-- Booking section ends -->