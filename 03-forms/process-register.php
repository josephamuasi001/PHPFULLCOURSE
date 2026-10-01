<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Process</title>
</head>
<body>
    <?php
        $name = trim($_POST["name"]);
        $age = $_POST["age"];
        $message = $_POST["message"];

        if(empty($name)) {
            echo "Name is required";
        } else {
            echo "Name: " . $name;
        }

        if($age > 0 && $age <= 800) {
            echo "Age: " . $age;
        }

        
    ?>
</body>
</html>