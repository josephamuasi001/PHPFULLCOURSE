<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
<?php
require '../config/database.php';
$id = $_GET["id"];
$stmt = $pdo->prepare("SELECT * FROM students WHERE id = :id");
$stmt->execute(["id" => $id]);
$student = $stmt->fetch();

if($_SERVER["REQUEST_METHOD"] === "POST") {
    
            $id = $_POST["id"];
            $name = $_POST["name"];
            $age = $_POST["age"];
            $score = $_POST["score"];
            $subject = $_POST["subject"];
    $stmt = $pdo->prepare(
        "UPDATE students
        SET name = :name,
            age = :age,
            score = :score,
            subject = :subject
        WHERE id = :id");

    $stmt->execute([
        "id" => $id,
        "name" => $name,
        "age" => $age,
        "score" => $score,
        "subject" => $subject,
    ]);

    header("Location: index.php");

}

?>

<div class="header">
    <h1>Edit Student Details</h1>
    <p>Update your student data here</p>
</div>
<form action="edit.php" method="post">
    <label>ID:
        <input type="text" name="id" required value="<?= $student["id"] ?>">
    </label>
    <br><br>
    <label>NAME:
        <input type="text" name="name" required value="<?= $student["name"] ?>">
    </label>
    <br><br>
    <label>AGE:
        <input type="number" name="age" required value="<?= $student["age"] ?>">
    </label>
    <br><br>
    <label>SCORE:
        <input type="number" name="score" required value="<?= $student["score"] ?>">
    </label>
    <br><br>
    <label>SUBJECT:
        <input type="text" name="subject" required value="<?= $student["subject"] ?>">
    </label>
    <br><br>
    <button type="submit">Update</button>
</form>
<a href="index.php">Back</a>

</body>
</html>