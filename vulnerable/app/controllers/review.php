<?php
require "../db/config.php";

if (isset($_POST['delete_comment'])) {
    $comment_id = $_POST['comment_id'];

    // Delete comments from Database
    $delete_sql = "DELETE FROM comments WHERE comment_id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $comment_id);
    $stmt->execute();

    header("Location: ../controllers/review.php");
    exit();
}

// $sender ='';
$message = '';
$commentIsSent = isset($_POST['post_comment']);

if ($commentIsSent) {

    // $sender = $_POST['sender'];

    if (isset($_SESSION['admin_name'])) $sender = $_SESSION['admin_name'] ;
    elseif (isset($_SESSION['user_name'])) $sender = $_SESSION['user_name'] ;

    $message = $_POST['message'] ;

    $sql ="INSERT INTO comments (sender, message)
    VALUES ('$sender', '$message')";

    if ($conn->query($sql) === TRUE) {
        header('location:../controllers/review.php');
    }
  

}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>review</title>
      <?php require "../models/inc/_style.php" ?>
   </head>

    <body>
        <?php require "../models/inc/_header.php" ?>

        <div class="main">
            <div><h1>Review</h1></div>
        </div>

        <section class="review">
        <!-- For non-users -->
        <!--  Unauthorized users see Login page , Register Page -->
        <?php if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_name']) ): ?>

            <p class="nonuser">If you want to leave a review, 
                log into your account.
            </p>
            <?php else:?>

        <!-- For USERS -->

            <!--  Authorized users see Log Out page -->

            <!-- Import review form from PHP file -->
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

            <div class="delete-button">
                <!-- For Admins "Delete" -->
                <?php if (isset($_SESSION['admin_name'])): ?>
                    <form 
                    method="POST" 
                    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                        <input type="hidden" name="comment_id" 
                        value="<?php echo $row['comment_id']; ?>">

                        <button type="submit" name="delete_comment" 
                        id="delete_comment">Delete</button>
                    </form>
                <?php endif; ?>

            </div>

        <?php }} ?> 

        <?php require "../models/inc/_footer.php" ?>

    </body>
</html>