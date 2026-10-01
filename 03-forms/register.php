<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h1>Registration</h1>
    <form method="POST" action="process-register.php">
        <label>Name:
            <input type="text" name="name" required>
        </label>
        <br><br>
        <label>Age:
            <input type="number" name="age" required>
        </label>
        <br><br>
        <label>Message: 
            <textarea required minlength="8" name="message">
            </textarea>
        </label>
        <br><br>
    </form>    


</body>
</html>