<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
<?php 
require '../config/add.inc.php';
?>
    <div class="header">
        <h1>Create New Student</h1>
        <p>Add a new students to your database</p>
    </div>

    <form action="add.php" method="post">
        <label>ID:
            <input type="text" name="id" required>
        </label>
        <br><br>
        <label>NAME:
            <input type="text" name="name" required>
        </label>
        <br><br>
        <label>AGE:
            <input min="0" type="number" name="age" required>
        </label>
        <br><br>
        <label>SCORE:
            <input type="text" name="score" min="0" max="100" step="0.5" required>
        </label>
        <br><br>
        <label>SUBJECT:
            <input type="text" name="subject" required>
        </label>
        <br><br>
        <button type="submit">Add Student</button>
    </form>
    <a href="index.php">Back</a>
    
</body>
</html>