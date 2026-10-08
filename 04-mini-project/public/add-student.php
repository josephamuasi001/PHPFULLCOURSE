<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="../src/add.css">
</head>
<body>
    <div class="header">
        <h1>Create student details</h1>
        <p>Add student details</p>
    </div>

    <form action="add-student.php" method="POST">
        <label>First name
            <input type="text" name="first_name" required>
        </label>
        <br> <br>
        <label>Last name
            <input type="text" name="last_name" required>
        </label>
        <br> <br>
        <label>Email
            <input type="email" name="email" required>
        </label>
        <br> <br>
        <label>Date of Birth
            <input type="date" name="date_of_birth" required>
        </label>
        <br> <br>
        <button type="submit">Add Student</button>
    </form>
    <a href="index.php">Back</a>

    <?php 
        require '../config/database.php';

        if($_SERVER["REQUEST_METHOD"] === "POST") {

            $stmt = $pdo->prepare(
                "INSERT INTO students (first_name, last_name, email, date_of_birth)
                VALUES 
                (:first_name, :last_name, :email, :date_of_birth)
            "); 
    
    
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $date_of_birth = $_POST["date_of_birth"];
    
            $stmt->execute(
                [
                    "first_name" => $first_name,
                    "last_name" => $last_name,
                    "email" => $email,
                    "date_of_birth" => $date_of_birth,
                ]
            );
    
            header("Location: index.php");
            exit;
        }
    ?>
</body>
</html>