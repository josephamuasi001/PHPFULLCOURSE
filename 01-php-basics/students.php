<?php

$students = [
    [
        "name" => "Joseph",
        "age" => 20,
        "programme" => "Computer Science"
    ],
    [
        "name" => "Roland",
        "age" => 21,
        "programme" => "Information Technology"
    ],
    [
        "name" => "Sebastian",
        "age" => 20,
        "programme" => "Computer Engineering"
    ]
];

echo "\n===================================";
echo "\nSTUDENTS";
echo "\n===================================";
foreach ($students as $student) {
    echo "\nName: " . $student["name"];
    echo "\nAge: " . $student["age"];
    echo "\nProgramme: " . $student["programme"];
    echo "\n \n";
}
echo "\n===================================";