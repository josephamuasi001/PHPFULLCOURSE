<?php

$firstName = "Joseph";
$lastName = "Amuasi";
$country = "Ghana";

echo "====================================".PHP_EOL;
echo "PROFILE".PHP_EOL;
echo "====================================".PHP_EOL;
echo "Full Name: ". $firstName . " " . $lastName .PHP_EOL;
$nameLength = strlen($firstName) + strlen($lastName);
echo "Name Length: " . $nameLength . PHP_EOL;
echo "Country: " . strtoupper($country) . PHP_EOL; 
echo "====================================".PHP_EOL;
