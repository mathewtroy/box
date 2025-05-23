<?php
require "../db/config.php";
require "../models/lib/validate_data.php";

$login = '';
$firstname = '';
$email = '';
$formIsSent =  isset($_POST['do_reg']);

if($formIsSent) {
   
   $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $login = mysqli_real_escape_string($conn, $_POST['login']);
   
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   
   $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

   $select = " SELECT * FROM users WHERE email = '$email' ";
   $select_login = " SELECT * FROM users WHERE login = '$login' ";
   $result = mysqli_query($conn, $select);
   $result_login = mysqli_query($conn, $select_login);

   $validateLoginMin = valLoginMin($login);
   $validateLoginMax = valLoginMax($login);
   $validateLoginPattern = valLoginPattern($login);
   $validateNameMin = valNameMin($firstname);
   $validateNameMax = valNameMax($firstname);
   $validateNamePattern = valNamePattern($firstname);
   $validateEmailAll = valEmailAll($email);
   $validatePasswordMin = valPasswordMin($pass);
   $validatePasswordMax = valPasswordMax($pass);

   // Check unique email address
   if(mysqli_num_rows($result) > 0){
      $error = 'This email is already used!';

   // Check unique login
   }else if(mysqli_num_rows($result_login) > 0){
      $error = 'This login is already used!';

   }else{
      // Check password
      if($pass != $cpass){
         $error = 'Password is not matched!';
      } else
         if (($validateLoginMin && $validateLoginMax && $validateLoginPattern
            && $validateNameMin && $validateNameMax && $validateNamePattern
            && $validateEmailAll && $validatePasswordMin && $validatePasswordMax)) {
         
            $insert = "INSERT INTO users(login, firstname, email, password, user_type) 
            VALUES('$login','$firstname','$email','$hashed_password','$user_type')";

            mysqli_query($conn, $insert);
            // everything is OK, I can work with data
            // perhaps create a new user in the DB
            header('location:../controllers/login.php');
            // exit;
         }
         else {
            // echo ("Error");
            // error, I stop at the form and display errors
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