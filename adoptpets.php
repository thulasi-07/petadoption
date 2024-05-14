<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/petlisting.css">
    <link rel="stylesheet" href="css/header.css">

    <title>Document</title>
</head>

<body>
    <?php include 'includes/header.php' ?>

    <div class="container">
        <?php
        $userid = $_SESSION['user_id'];

        $stmtt = $admin->ret("
            SELECT pets.*, petcart.dateadded 
            FROM pets 
            INNER JOIN petcart ON pets.petid = petcart.petid
            WHERE petcart.user_id = :$uid
        ");



        while ($rowtt = $stmtt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="card">
                <img src="controllers/<?php echo $rowtt['Image'] ?>" alt="Pet Image">
                <div class="card-details">
                    <div class="group-div">
                        <h3>Pet Name: <span class="pet-name"><?php echo $rowtt['petname'] ?></span></h3>
                        <h3>Species: <span class="pet-name"><?php echo $rowtt['species'] ?></span></h3>
                        <h3>Age: <span class="age"><?php echo $rowtt['age'] ?></span></h3>
                    </div>
                    <div class="group-div">
                        <p>Breed: <span class="breed"><?php echo $rowtt['breed'] ?></span></p>
                        <p>Gender: <span class="gender"><?php echo $rowtt['gender'] ?></span></p>
                    </div>
                    <p>Description: <span class="description"><?php echo $rowtt['description'] ?></span></p>
                    <div class="group-div">
                        <p>Pet Status: <span class="pet-status"><?php echo $rowtt['petstatus'] ?></span></p>
                        <p>Date Added: <span class="date-added"><?php echo $rowtt['dateadded'] ?></span></p>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>

</body>

</html>