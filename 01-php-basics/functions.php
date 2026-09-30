<?php

$students = [ 
    [ 
        "name" => "Ama", 
        "score" => 78 
    ], 
    [ 
        "name" => "Kojo", 
        "score" => 64 
    ], 
    [ 
        "name" => "Yaw", 
        "score" => 82 
    ], 
    [ 
        "name" => "Akosua", 
        "score" => 55 
    ], 
    [
        "name" => "Kofi", 
        "score" => 91
     
    ] 
]; 
    
$totalScore = 0;
foreach($students as $student) {
    $totalScore +=  $student["score"];
    $maxScore = max($student["score"]);
};

echo "\nTotal: " . $totalScore;
$classSize = count($students);
echo "\nNumber of Students: " . $classSize;

function classAverage($totalScore, $classSize) {
    return ($totalScore / $classSize);
};

$averageScore = classAverage($totalScore, $classSize);


echo "\nClass Average: " . $averageScore;

function highScore() {
    
};