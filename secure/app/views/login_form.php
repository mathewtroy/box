<div class="form-container">
   <form  
      action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  
      class="login_form"
      id="login_form" 
      method="post"> 

      <h3>login now</h3>

      <?php
         if(isset($error)) { echo '<span class="error-msg">'.$error.'</span>';};
      ?>

      <div class="form-control">
         
         <label for="login">Login</label>
         <p class="inform">Use only Lowercase Latin letter and digits, min. 4 
            characters, max. 20 characters</p>
         <input type="text" 
         name="login"  
         value="<?= htmlspecialchars($login); ?>"
         placeholder="Enter login (Required)" 
         required pattern ='[a-z0-9].{3,19}'
         id="login">
         <span class="error"></span>
        
         <?php
               if (isset($validateLoginMin) && $validateLoginMin == false) {
                  echo '<span class="error">Login must be at least 4 characters</span>';
               }

               if (isset($validateLoginMax) && $validateLoginMax == false) {
                  echo '<span class="error">Login must be no more than 20 characters</span>';
               }

               if (isset($validateLoginPattern) && $validateLoginPattern == false) {
                  echo '<span class="error">Login must contain only Lowercase 
                  Latin alphabets and numbers</span>';
               }
         ?>
      </div>

      <div class="form-control">
         <label for="password">Password</label>
         <p class="inform">Use at least 1 digit, 1 Lowercase and 1 Uppercase 
            Latin letter,min. 6 characters, max. 60 characters</p> 
         <input type="password" 
         name="password" 
         placeholder="Enter password (Required)"
         required pattern = '(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,60}'
         id="password">
         <span class="error"></span>
        
         <?php
               if (isset($validatePasswordMin) && $validatePasswordMin == false) {
                  echo '<span class="error">Password must be at least 6 characters</span>';
               }

               if (isset($validatePasswordMax) && $validatePasswordMax == false) {
                  echo '<span class="error">Password must be no more than 60 characters</span>';
               }
         ?>
      </div>

      <input type="submit" name="do_login" value="login now" class="form-btn">
      
      <p class="redirect">Do not have an account? 
         <a href="../controllers/register.php">
            <i class="fas fa-user-plus"></i> Register</a>
      </p>
      
      <p class="redirect"> Go to Website
         <a href="../models/home.php">
         <i class="fas fa-home"></i> Home</a>
      </p>
   </form>

</div>