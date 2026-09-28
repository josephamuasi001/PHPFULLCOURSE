<?php

$students = [
    "Joseph",
    "Roland",
    "Sebastian",
    "Obed",
    "Cephas"
];

echo "\n=============================";
echo "\nSTUDENTS";
echo "\n=============================";
foreach ($students as $student) {
    echo "\nStudent: ". $student;
}
echo "\n=============================";
echo "\nTotal Students: " . count($students);