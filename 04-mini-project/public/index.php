<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="../src/index.css"> 
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Student Management System</h1>
            <p>Manage your student records</p>
        </div>
        <a class="add" href="add-student.php">+ Add Student</a>
    </div>


    <?php 
        require '../config/database.php';

        $stmt=$pdo->query(
            "SELECT * 
            FROM students"
        );

        $students = $stmt->fetchAll(); 
    ?>

    <table class="student-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name </th>
                <th>Email</th>
                <th>DOB</th>
                <th>Enrollment Date</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($students as $student): ?>
                <tr>
                    <td><?= $student["id"] ?></td>
                    <td><?= $student["first_name"] ?></td>
                    <td><?= $student["last_name"] ?></td>
                    <td><?= $student["email"] ?></td>
                    <td><?= $student["date_of_birth"] ?></td>    
                    <td><?= $student["enrollment_date"] ?></td>
                    <td>
                        <a href="view.php?id=<?=$student["id"]?>">View</a>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>