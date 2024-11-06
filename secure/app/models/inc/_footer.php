<!-- Footer section starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Main Links</h3>
            <a href="../models/home.php"> <i class="fas fa-home"></i> Home</a>
            <a href="../models/about.php"> <i class="fas fa-info-circle"></i> About</a>
            <a href="../controllers/review.php"> <i class="fas fa-suitcase-rolling"></i> Review</a>
            <a href="../controllers/booking.php"> <i class="far fa-money-bill-alt"></i> Booking</a>
                
            <!-- 
            Unauthorized users see Login page , Register Page
            -->
            <?php if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_name']) ): ?>
            <a href="../controllers/login.php">
                <i class="fas fa-sign-in-alt"></i> Login</a>
            <a href="../controllers/register.php">
                <i class="fas fa-user-plus"></i> Register</a>
            
            <?php else:?>

            <!-- Authorized users see Add review page -->
            <?php if (isset($_SESSION['user_name']) || isset($_SESSION['admin_name']) ):  ?>
                <a href="../controllers/logout.php"><i class="fas fa-power-off"></i> Log out</a>

                <?php if(isset($_SESSION['admin_name'])): ?>

                    <a href="admin_page.php">
                        <i class="far fa-address-card"></i>	Personal account</a>

                <?php else: ?>
                    
                    <!-- if(isset($_SESSION['user_name'])): -->
                    <a href="user_page.php"><i class="far fa-address-card"></i>	Personal account</a>

                <?php endif; ?>
                <?php endif; ?> 
            <?php endif; ?>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="tel:+420776756746"> <i class="fas fa-phone">
            </i> Phone Number </a>
            <a href="mailto:krossale@fel.cvut.cz"> <i class="fas fa-envelope">
            </i> Email </a>
            <a href="https://www.github.com/mathewtroy/">
                <i class="fab fa-github"></i> Github </a>
            <a href="https://t.me/troy102102/"> 
                <i class="fab fa-telegram"></i> Telegram </a>
            <a href="https://www.linkedin.com/in/aleksandrkross/">
                <i class="fab fa-linkedin"></i> Linkedin </a>

        </div>

    </div>

    <div class="credit"> Created by 
        <span>Aleksandr K.</span> 
        <br>
        &copy; 2024. All rights reserved! 
    </div>

</section>

<!-- Footer section ends -->