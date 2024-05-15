<?php
require '../config.php';

$pet_id = $_GET['pid'];

// Fetch the image path from the database before deleting the question
$getImgPath = $admin->ret("SELECT `image` FROM `pets` WHERE `petid`='$pet_id'");
$num_rows = $getImgPath->rowCount();
if ($getImgPath && $num_rows > 0) {
    $row = $getImgPath->fetch(PDO::FETCH_ASSOC);
    $img_path = $row['image'];

    // Delete the image file from the server
    if (!empty($img_path) && file_exists($img_path)) {
        unlink($img_path);
    }
} else {
    echo "<script>alert('Error deleting pet details'); window.location='../userdetails.php' </script>";
}

$petcartitem = $admin->cud("DELETE FROM `pets` WHERE `petid`='$pet_id'", "deleted");
if (!$petcartitem) {
    echo "<script>alert('Error deleting pet details'); window.location='../userdetails.php' </script>";

}
// Delete from the questions table
$ifpetexists = $admin->ret("SELECT `petcartid` FROM `petcart` WHERE `petid`='$pet_id'");
if ($ifpetexists) {

    $petcartitem = $admin->cud("DELETE FROM `petcart` WHERE `petid`='$pet_id'", "deleted");
}

// Check if the delete operations were successful
echo "<script>alert('Pet deatils deleted successfully'); window.location='../userdetails.php' </script>";

