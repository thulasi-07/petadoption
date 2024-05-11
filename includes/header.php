<?php
include 'config.php';

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $uid = $_SESSION['user_id'];
    $stmt = $admin->ret("SELECT * FROM `users` WHERE `user_id`='$uid'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<nav style="padding-right:40px">
    <ul>
        <li><a href="Adoptorgetinvolved.php">ADOPT OR GET INVOLVED</a></li>
        <li><a href="Dogs&puppies.php">DOGS & PUPPIES</a></li>
        <li><a href="Cats&kittens.php">CATS & KITTENS</a></li>
        <?php if (isset($row['user_id'])): ?>
            <li class="right">
                <a class="login"><?php echo $row['username']; ?></a>
            </li>
            <li class="right">
                <a href="controllers/u_logout.php" class="signup">Log Out</a>
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