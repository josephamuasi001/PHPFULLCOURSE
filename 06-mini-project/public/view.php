<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

require '../config/database.php';

$id = $_GET['id'] ?? null;

$stmt = $pdo->prepare("SELECT * FROM students WHERE id = :id");
$stmt->execute(["id" => $id]);
$student = $stmt->fetch();

?>
    <h1>View Student Info</h1>
    <p>Manage your student details here</p>
    <p>ID: <?= $student["id"] ?></p>
    <p>NAME: <?= $student["name"] ?></p>
    <p>AGE: <?= $student["age"] ?></p>
    <p>SCORE: <?= $student["score"] ?></p>
    <p>SUBJECT: <?= $student["subject"] ?></p>
    <a href="edit.php?id=<?= $student["id"] ?>">Edit</a>
    <form action="delete.php" method="post">
        <input type="hidden" value="<?= $student["id"] ?>" name="id">
        <button type="submit">Delete</button>
    </form>
    <a href="index.php">Back</a>

</body>
</html>