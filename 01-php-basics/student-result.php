<?php 
$name = "Joseph";
$score = 75;
$attendance = 80;

if ($score >= 50 && $attendance >= 75) {
    $result = "Passed";
} else {
    $result = "Failed";
}


echo "===========================".PHP_EOL;
echo "STUDENT RESULT".PHP_EOL;
echo "===========================".PHP_EOL;
echo "Name: " . $name .PHP_EOL;
echo "Score: " . $score . PHP_EOL;
echo "Attendance: " . $attendance .PHP_EOL;
echo "Result : " .$result .PHP_EOL;
echo "===========================".PHP_EOL;
