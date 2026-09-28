<?php

$student = [
    "Name" => "Joseph",
    "Age" => 20,
    "University" => "University of Ghana",
    "Programme" => "Computer Science",
    "Country" => "Ghana",
    "Goal" => "Full-Stack Developer"
];


echo "\n=============================";
echo "\nSTUDENT PROFILE";
echo "\n=============================";
foreach ($student as $key => $value) {
    echo "\n". $key . ": " . $value ;
}
echo "\n=============================";