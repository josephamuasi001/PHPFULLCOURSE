<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
</head>
<body>
    <div class="header">
        <h1>View Student Details</h1>
        <p>Take a loot at student details</p>
    </div>

    <?php

    require '../config/database.php';

    $stmt = $pdo->prepare(
        "SELECT *
        FROM students 
        WHERE id = :id
    ");

    $id = $_GET["id"];

    $stmt->execute([
        "id" => $id
    ]);

    $student = $stmt->fetch();
    ?>

    <div class="view-card">
        <h3>Name: </h3> 
        <p id="name"><?= $student["first_name"];?>   <?= $student["last_name"] ?> </p>
        <h3>Email: </h3> 
        <p id="name"><?= $student["email"] ?></p>
        <h3>Date of Birth: </h3> 
        <p id="name"><?= $student["date_of_birth"] ?></p>
        <h3>Enrollment Date:</h3> 
        <p id="name"><?= $student["enrollment_date"] ?></p>
    </div>

    <div class="actions">
        <a href="edit.php?id=<?= $student["id"] ?>"> Edit </a>
        <form action="delete.php" method="POST" style="display: inline;">
            <input type="hidden" name="id" value="<?= $student["id"] ?>">
            <button type="submit">Delete</button>
        </form>
        <a href="index.php"> Back</a>
    </div>

</body>
</html>