<?php
require "../db/config.php";

// $login = '';
// $firstname = '';
// $email = '';
$formIsSent =  isset($_POST['do_reg']);

if($formIsSent) {
   
   $firstname =  $_POST['firstname'];
   $email =  $_POST['email'];
   $login =  $_POST['login'];
   $pass = $_POST['password'];
   $cpass = $_POST['cpassword'];
   $user_type = $_POST['user_type'];
   
   // $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

   $select = " SELECT * FROM users WHERE email = '$email' ";
   $select_login = " SELECT * FROM users WHERE login = '$login' ";
   $result = mysqli_query($conn, $select);
   $result_login = mysqli_query($conn, $select_login);

   // Check unique email address
   if(mysqli_num_rows($result) > 0){
      $error = 'This email is already used!';

   // Check unique login
   }else if(mysqli_num_rows($result_login) > 0){
      $error = 'This login is already used!';

   }else {
      // Check password
      if($pass != $cpass){
         $error = 'Password is not matched!';
      } else {
         
         $insert = "INSERT INTO users(login, firstname, email, password, user_type) 
                    VALUES('$login', '$firstname', '$email', '$pass', '$user_type')";

         // $insert = "INSERT INTO users(login, firstname, email, password, user_type) 
         // VALUES('$login','$firstname','$email','$hashed_password','$user_type')";

         mysqli_query($conn, $insert);
         // everything is OK, I can work with data
         // perhaps create a new user in the DB
         header('location:../controllers/login.php');
         // exit;
         }
        
 
   }

};

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>register form</title>
      <?php require "../models/inc/_style.php" ?>
   </head>

   <body>
         <!-- Import register form from PHP file -->
         <?php require "../views/register_form.php" ?>
   </body>
</html>