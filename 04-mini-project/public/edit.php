<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Details</title>
    <link rel="stylesheet" href="../src/edit.css">
</head>
<body>
    <h1>Edit Student Details</h1>

    <?php 
    require '../config/database.php';

    $stmt = $pdo->query(
        "SELECT *
        FROM students
    ");

    $student = $stmt->fetch();


    if($_SERVER["REQUEST_METHOD"] === "POST") {

        $stmt = $pdo->prepare(
            "UPDATE students 
            SET 
                first_name = :first_name,
                last_name = :last_name,
                email = :email,
                date_of_birth = :date_of_birth
            WHERE id = :id"
        );
        $id = $_POST["id"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $date_of_birth = $_POST["date_of_birth"];
       
    
        $stmt->execute([
            "id" => $id,
            "first_name" => $first_name,
            "last_name" => $last_name,
            "email" => $email,
            "date_of_birth" => $date_of_birth
        ]);

        header("Location: index.php");
    }

    ?>

    <form action="edit.php" method="POST">
        <input type="hidden" name="id" required value="<?= $student["id"] ?>">
        <label>First Name: 
            <input type="text" name="first_name" required value="<?= $student["first_name"] ?>">
        </label>
        <br> <br>
        <label>Last Name: 
            <input type="text" name="last_name" required value="<?= $student["last_name"] ?>">
        </label>
        <br> <br>
        <label>Email:  
            <input type="email" name="email" required value="<?= $student["email"] ?>">
        </label>
        <br> <br>
        <label>Date of Birth: 
            <input type="date" name="date_of_birth" required value="<?= $student["date_of_birth"] ?>">
        </label>
        <br> <br>
        <button type="submit">
            Save
        </button>
        <a href="index.php">
            Back
        </a>
    </form>
</body>
</html>