<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/petdetailform.css">
    <link rel="stylesheet" href="css/index.css">

    <title>Pet Adoption Form</title>
</head>

<body>
    <?php include 'includes/header.php' ?>

    <div class="container">
        <h2>Pet Adoption Form</h2>
        <form action="controllers/petdetailformbackend.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="petname">Pet Name:</label>
                <input type="text" id="petname" name="petname" required>
            </div>
            <div class="form-group">
                <label for="species">Species:</label>
                <input type="text" id="species" name="species" required>
            </div>
            <div class="form-group">
                <label for="breed">Breed:</label>
                <input type="text" id="breed" name="breed" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" id="age" name="age" required>
                <input type="text" id="userid" value="<?php echo $uid ?>" name="userid" hidden>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" required>
            </div>
            <input type="submit" name="p_submit" value="Submit">
        </form>
    </div>

</body>

</html>