<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>

<?php
require '../config/database.php';
$id = $_GET["id"];
$stmt = $pdo->prepare("SELECT * FROM students WHERE id = :id");
$stmt->execute(["id" => $id]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);


?>
    <div class="header">
        <h1>View Student Details</h1>
        <p>Manage your students details here</p>
    </div>

    <p>ID: <?= htmlspecialchars($student["id"]) ?></p>
    <p>NAME: <?= htmlspecialchars($student["name"]) ?></p>
    <p>AGE: <?= htmlspecialchars($student["age"]) ?></p>
    <p>SCORE: <?= htmlspecialchars($student["score"]) ?></p>
    <p>SUBJECT: <?= htmlspecialchars($student["subject"]) ?></p>
    <a href="edit.php?id=<?= $student["id"] ?>">Edit</a>
    <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?= $student["id"] ?>">
        <button type="submit">Delete</button>
    </form>
    <a href="index.php">Back</a>
    
</body>
</html>