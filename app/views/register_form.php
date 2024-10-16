<div class="form-container" id="registration">

   <form 
   action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" 
   class="form" 
   id="form" 
   method="post">
   
      <h3>Register now</h3>

      <?php
         if(isset($error)) {
               echo '<span class="error-msg">'.$error.'</span>';
         };
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
                  echo '<span class="error">Login must be at least 4 
                  characters</span>';
               }

               if (isset($validateLoginMax) && $validateLoginMax == false) {
                  echo '<span class="error">Login must be no more than 20 
                  characters</span>';
               }

               if (isset($validateLoginPattern) && $validateLoginPattern == false) {
                  echo '<span class="error">Login must contain only Lowercase 
                  Latin alphabets and numbers</span>';
               }
         ?>

      </div>


      <div class="form-control">
         <label for="firstname">Firstname</label>
         <p class="inform">Use only Latin letter, min. 2 characters,
            max. 20 characters</p>
         <input type="text" 
         name="firstname" 
         value="<?= htmlspecialchars($firstname); ?>"
         placeholder="Enter firstname (Required)"
         required pattern ='[A-Za-z].{1,19}'
         id="firstname">
         <span class="error"></span>
          
         <?php
               if (isset($validateNameMin) && $validateNameMin == false) {
                  echo '<span class="error">Firstname must be at least 2 
                  characters</span>';
               }

               if (isset($validateNameMax) && $validateNameMax == false) {
                  echo '<span class="error">Firstname must be no more than 
                  20 characters</span>';
               }

               if (isset($validateNamePattern) && $validateNamePattern == false) {
                  echo '<span class="error">Firstname must contain only Latin 
                  alphabets</span>';
               }    
         ?>

      </div>


      <div class="form-control">
         <label for="email">Email</label>
         <p class="inform">Use an email like - example@mail.cz, do not use special 
            characters</p>
         <input type="email" 
         name="email"  
         value="<?= htmlspecialchars($email); ?>"
         placeholder="Enter email (Required)"
         required pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$'
         id="email">
         <span class="error"></span>
          
         <?php
               if (isset($validateEmailAll) && $validateEmailAll == false) {
                  echo '<span class="error">Provide a valid email address, 
                  please</span>';
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
                  echo '<span class="error">Password must be at least 6 
                  characters</span>';
               }

               if (isset($validatePasswordMax) && $validatePasswordMax == false) {
                  echo '<span class="error">Password must be no more than 60 
                  characters</span>';
               }    
         ?>

      </div>


      <div class="form-control">
         <label for="password">Password check</label>
         <p class="inform">Use the same password</p>
         <input type="password" 
         name="cpassword" 
         placeholder="Confirm password (Required)"
         required pattern = '(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,60}'
         id="cpassword">
         <span class="error"></span>
  
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