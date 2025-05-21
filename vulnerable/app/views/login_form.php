<div class="form-container">
   <form  
      action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  
      class="login_form"
      id="login_form" 
      method="post"> 

      <h3>login now</h3>

      <div class="form-control">
         <label for="login">Login</label>
         <p class="inform">Use only Lowercase Latin letter and digits, min. 4 
            characters, max. 20 characters</p>
         <input type="text" 
         name="login"  
         placeholder="Enter login (Required)" 
         id="login">
      </div>

      <div class="form-control">
         <label for="password">Password</label>
         <p class="inform">Use at least 1 digit, 1 Lowercase and 1 Uppercase 
            Latin letter,min. 6 characters, max. 60 characters</p> 
         <input type="password" 
         name="password" 
         placeholder="Enter password (Required)"
         id="password">
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