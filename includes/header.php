<?php
include 'config.php';

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $uid = $_SESSION['user_id'];
    $stmt = $admin->ret("SELECT * FROM `users` WHERE `user_id`='$uid'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<nav style="padding-right:40px;padding:10px">
    <ul>
        <!-- <li><a href="Adoptpets.php">ADOPT PETS</a></li> -->
        <li><a href="petlisting.php"> All Pets</a></li>
        <li><a href="index.php">Home</a></li>

        <?php if (isset($row['user_id'])): ?>
            <li class="right">
                <a class="login"><?php echo $row['username']; ?></a>
            </li>
            <li class="right">
                <a href="controllers/u_logout.php" class="signup">Log Out</a>
            </li>
            <li class="right">
                <a href="petdetailsform.php" class="signup">Add Pet Details</a>
            </li>

        <?php else: ?>
            <li class="right">
                <a href="login.php" class="login">Login</a>
            </li>
            <li class="right">
                <a href="signup.php" class="signup">Sign Up</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>