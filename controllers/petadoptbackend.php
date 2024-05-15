<?php
require '../config.php';
if (isset($_SESSION['user_id'])) {
    $uid = $_SESSION['user_id'];
}

// Check if the POST data is set
if (isset($_GET["pid"])) {
    // Sanitize user input
    $petid = $_GET["pid"];

    // Insert new record into the petcart table
    $stmt = $admin->cud("INSERT INTO `petcart`(`user_id`, `petid`) VALUES ('$uid','$petid')", "saved");
    if ($stmt) {
        // Update petstatus in pets table to true
        $updateStmt = $admin->cud("UPDATE `pets` SET `petstatus` = 'true' WHERE `petid` = '$petid'", "updated");

        if ($updateStmt) {
            echo "<script>alert('Pet adopted successfully'); window.location='../adoptpets.php'; </script>";
            exit(); // Terminate script execution after redirecting
        } else {
            // echo "<script>alert('Failed to update pet status'); window.location='../petlisting.php'; </script>";
            exit(); // Terminate script execution after redirecting
        }
    } else {
        echo "<script>alert('Failed to adopt pet'); window.location='../petlisting.php'; </script>";
        exit(); // Terminate script execution after redirecting
    }
} else {
    // Redirect user to the petlisting page if the required fields are not provided
    header('Location: ' . BASE_URL . 'petlisting.php');
    exit();
}
