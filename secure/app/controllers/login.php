<?php
require "../db/config.php";
require "../models/lib/validate_data.php";

$loginFormIsSent =  isset($_POST['do_login']);
$login = '';

if($loginFormIsSent) {
      
   $login = mysqli_real_escape_string($conn, $_POST['login']);
   $pass = ($_POST['password']);

   // take login from Database
   $select = " SELECT * FROM users WHERE login = '$login' ";

   // take password from Database
   $select_password = " SELECT * FROM users WHERE password = '$pass' ";

   // check True или False (login) 
   $result_login = mysqli_query($conn, $select);
 
   // check True или False (password)
   $result_password = mysqli_query($conn, $select_password);
 
   $num = mysqli_num_rows($result_login);
   $num_pass = mysqli_num_rows($result_password);

   $validateLoginMin = valLoginMin($login);
   $validateLoginMax = valLoginMax($login);
   $validateLoginPattern = valLoginPattern($login);
   $validatePasswordMin = valPasswordMin($pass);
   $validatePasswordMax = valPasswordMax($pass);

   if ($validateLoginMin && $validateLoginMax && $validateLoginPattern
      && $validatePasswordMin && $validatePasswordMax) {
      // it is OK
      // I will save the data or something

         // password and login are True    
         if( $num == 1) {

            while ($row = mysqli_fetch_assoc($result_login)) {
               if (password_verify($pass, $row['password'])){
                  $login = true;
      
                  if($row['user_type'] == 'admin') {
                     $_SESSION['admin_name'] = $row['firstname'];
                     header('location:../models/admin_page.php');
            
                  } elseif($row['user_type'] == 'user') {
                     $_SESSION['user_name'] = $row['firstname'];
                     header('location:../models/user_page.php');
                     
                  }
               }
               if ( $num_pass != 1) { $error = 'Incorrect Password!'; }
            }
      
         } else {
            $error = 'Incorrect Login! Try it again';
         }

   } else {
      // an error occurred, I have to show the user an error
   }

   };
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>login form</title>
      <?php require "../models/inc/_style.php" ?>
   </head>

   <body> 
      <!-- Import login form from PHP file -->
      <?php require "../views/login_form.php" ?>
   </body>
</html>