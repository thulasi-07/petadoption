<?php
require '../config.php';

$userid = $_SESSION['user_id'];
// Check if the POST data is set
if (isset($_GET["pid"])) {
    // Sanitize user input
    $petid = $_GET["pid"]  

        // Insert new user into the database
    $stmt = $admin->cud("INSERT INTO `petcart`(`user_id`, `petid``) VALUES ('$user_id','$petid')", "saved");

    echo "<script>alert('Pet adopted successfully'); window.location='../petdetailsform.php'; </script>";
    exit(); // Terminate script execution after redirecting
    
} else {
    // Redirect user to the signup page if the required fields are not provided
    header('Location: ' . BASE_URL . 'petlisting.php');
    exit();
}


