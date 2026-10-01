<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>

<body>

    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $name = $_POST["name"];
        $age = $_POST["age"];
        $programme = $_POST["programme"];

        echo "Name: " . $name . PHP_EOL;
        echo "Age: " . $age . PHP_EOL;
        echo "Programme: " . $programme . PHP_EOL;
    }
    ?>

    <h1>Student Registration</h1>

    <form action="index.php" method="POST">

        <label>Name:</label>
        <input type="text"
        name="name">

        <br><br>

        <label>Age:</label>
        <input type="number"
        name="age" >

        <br><br>

        <label>Programme:</label>
        <input type="text"
        name="programme">

        <br><br>

        <button>Register</button>

    </form>

</body>
</html>