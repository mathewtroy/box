<?php
// DB connection
require "../db/config.php";

// import Validation from PHP file
require "../models/lib/validate_comment.php";
   
    // $sender ='';
    $message = '';

    $commentIsSent = isset($_POST['post_comment']);

    if ($commentIsSent) {

        // $sender = $_POST['sender'];

        if (isset($_SESSION['expert_name'])) $sender = $_SESSION['expert_name'] ;

        elseif (isset($_SESSION['user_name'])) $sender = $_SESSION['user_name'] ;

        $message = $_POST['message'] ;
        
        $validateReviewMin = valReviewMin($message);
        $validateReviewMax = valReviewMax($message);
        $validateReviewPattern = valReviewPattern($message);


        if ($validateReviewMin && $validateReviewMax && $validateReviewPattern) {
            $sql ="INSERT INTO comments (sender, message)
            VALUES ('$sender', '$message')";

            if ($conn->query($sql) === TRUE) {
                header('location:../controllers/review.php');
            }
        } else {
            //error
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Review</title>

      <!-- Import CSS section from PHP file -->
      <?php require "../models/inc/_style.php" ?>

   </head>

   <body>

      <!-- Import header section from PHP file -->
      <?php require "../models/inc/_header.php" ?>

      <div class="main">
        
         <!-- background of about -->
         <div class="review-home"> 
            
            <h1>Review</h1>
         
         </div>
      </div>

      <section class="review">


      <?php if (isset($_SESSION['user_name']) || isset($_SESSION['admin_name']) ): ?>

      <!-- Import register form from PHP file -->
      <?php require "../views/review_form.php" ?>

      <?php endif; ?>   

      </section>

      <h2 class="comments">Comments of users</h2>

      <?php
        $sql = "SELECT * FROM comments";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        
        ?>
        <h4 class="date-name"><?php echo $row['date'];?> </h4>
        <p class="sender-name"><?php echo 'user: ',$row['sender'];?></p>
        <p class="message-name"><?php echo $row['message'];?></p>

      <?php }} ?>


      <!-- Import footer section from PHP file -->
      <?php require "../models/inc/_footer.php" ?>

   </body>
</html>