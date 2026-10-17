<?php 
require 'database.php';
if($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST["id"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $score = $_POST["score"];
    $subject = $_POST["subject"];
    
    $stmt = $pdo->prepare(" INSERT INTO students(id, name, age, score, subject) VALUES (:id, :name, :age, :score, :subject)");

    $stmt->execute([
        "id" => $id,
        "name" => $name,
        "age" => $age,
        "score" => $score,
        "subject" => $subject
]);

header("Location: ../public/index.php");

}




?>