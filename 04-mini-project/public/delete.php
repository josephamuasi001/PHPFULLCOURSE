<?php
    require '../config/database.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);

        if ($id !== false && $id !== null && $id > 0) {
            $stmt = $pdo->prepare(
                "DELETE FROM students
                WHERE id = :id"
            );

            $stmt->execute(["id" => $id]);
        }
    }

    header("Location: index.php");
    exit;

