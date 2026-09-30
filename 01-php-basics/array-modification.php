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
    ]
];

$students[] = [
    
    "name" => "Sebastian",
    "age" => 20,
    "programme" => "Computer Engineering"
];



$students[0]["age"] = 21;
$students[0]["country"] = "Ghana";

unset($students[1]);


foreach($students as $student) {
    echo $student["name"];
    echo "\n Age: " . $student["age"];
    echo "\n Programme: " . $student["programme"];
    echo "\n Country: " . $student["country"];
}



