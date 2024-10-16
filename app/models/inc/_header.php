<!-- Header section starts -->

<section class="header">
<!-- <header>    -->

   <!-- Button Darkmode -->
   <!-- <a href="?theme=<?php echo $themeToggle; ?>"><strong>Darkmode</strong></a> -->

   <!-- <a><button class="btn">Darker</button></a> -->

   <a href="../models/home.php" class="logo"> 
      <h2>BOXING</h2></a>
   
   <!-- <div class="darkmode"><button class="btn">Dark</button></div> -->
         
   <nav class="navbar">
      <a href="../models/home.php">Home</a>
      <a href="../models/about.php">About</a>
      <a href="../controllers/review.php"> Review</a>
      <a href="../controllers/booking.php">Booking</a>

      <!-- 
      Unauthorized users see Login page , Register Page
      -->
      <?php if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_name']) ): ?>
      <a href="../controllers/login.php">Login</a>
      <a href="../controllers/register.php">Register</a>
      
      <?php else:?>

      <!-- 
      Authorized users see Log Out page
      -->
      <a href="../controllers/logout.php">Log out</a>

               <?php if(isset($_SESSION['admin_name'])): ?>

               <a href="../models/admin_page.php">Personal account</a>
               
               <?php else: ?>
                  
                  <!-- if(isset($_SESSION['user_name'])): -->
                  <a href="../models/user_page.php">Personal account</a>
               
               <?php endif; ?>
         
      <?php endif; ?>

   </nav>
  
   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<!-- Header section ends -->