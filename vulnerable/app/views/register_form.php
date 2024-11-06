<div class="form-container" id="registration">

   <form 
   action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" 
   class="form" 
   id="form" 
   method="post">
   
      <h3>Register now</h3>

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
         <label for="firstname">Firstname</label>
         <p class="inform">Use only Latin letter, min. 2 characters,
            max. 20 characters</p>
         <input type="text" 
         name="firstname" 
         placeholder="Enter firstname (Required)"
         id="firstname">
      </div>

      <div class="form-control">
         <label for="email">Email</label>
         <p class="inform">Use an email like - example@mail.cz, do not use special 
            characters</p>
         <input type="text" 
         name="email"  
         placeholder="Enter email (Required)"
         id="email">
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

      <div class="form-control">
         <label for="password">Password check</label>
         <p class="inform">Use the same password</p>
         <input type="password" 
         name="cpassword" 
         placeholder="Confirm password (Required)"
         id="cpassword">
      </div>

      <div class="form-control"> 
         <label>Type of user</label>
         <select name="user_type">
            <option value="user">User</option>
            <option value="admin">Admin</option>
         </select>
      </div>

      <input type="submit" name="do_reg" value="register now" class="form-btn">
      
      <p class="redirect">Already have an account? 
         <a href="../controllers/login.php">
            <i class="fas fa-sign-in-alt"></i> Login</a>
      </p>

      <p class="redirect"> Go to Website
         <a href="../models/home.php">
         <i class="fas fa-home"></i> Home</a>
      </p>
   </form>
</div>