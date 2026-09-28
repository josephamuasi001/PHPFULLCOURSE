<?php

$name = "Joseph";
$age = 20;

if($age >= 60) {
    $category = "Senior";
} elseif ($age >= 18) {
    $category = "Adult";
} elseif ($age >= 13) {
    $category = "Teenager";
} elseif ($age >= 0) {
    $category = "Child";
} else {
    $category = "Invalid Age (negative)";
}


echo "==================".PHP_EOL;
echo "AGE CATEGORY".PHP_EOL;
echo "==================".PHP_EOL;

echo "Name: ".$name .PHP_EOL;
echo "Age: ".$age .PHP_EOL;
echo "Category: ".$category .PHP_EOL;
echo "==================".PHP_EOL;

