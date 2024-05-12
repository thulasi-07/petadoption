<?php
require '../config.php';

// Check if the POST data is set
if (isset($_POST["p_submit"])) {
    // Sanitize user input
    $petname = filter_var($_POST['petname'], FILTER_SANITIZE_STRING);
    $userid = $_POST['userid'];
    $species = filter_var($_POST['species'], FILTER_SANITIZE_STRING);
    $breed = filter_var($_POST['breed'], FILTER_SANITIZE_STRING);
    $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
    $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
    $description = addslashes(htmlspecialchars($_POST['description']));

    // File upload handling
    if (isset($_FILES['image'])) {
        // File uploaded successfully
        $img_path = "uploads/" . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $img_path)) {
            // echo "File uploaded successfully.";
        } else {
            // echo "Failed to upload file.";
        }
    } else {
        // 'q_pic' file was not uploaded
        $img_path = ""; // Set default or handle accordingly
    }


    // Insert pet details into the database
    $stmt = $admin->cud("INSERT INTO `pets` (`petname`, `species`, `breed`, `age`, `gender`, `description`, `image`,`user_id`,`petstatus`) VALUES ('$petname', '$species', '$breed', $age, '$gender', '$description', '$img_path','$userid','false')", "saved");

    if ($stmt) {
        echo "<script>alert('Pet details added successfully'); window.location='../petlisting.php'; </script>";
        exit(); // Terminate script execution after redirecting
    } else {
        // Handle database error
        echo "<script>alert('Error adding pet details to the database'); window.location='../petform.php'; </script>";
        exit(); // Terminate script execution after redirecting
    }

} else {
    // Redirect user to the pet form page if the required fields are not provided
    header('Location: ' . BASE_URL . 'petform.php');
    exit();
}
