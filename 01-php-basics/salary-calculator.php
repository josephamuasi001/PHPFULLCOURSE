<?php

$employeeName = "Joseph";
$basicSalary = 14000.99;
$bonus = 2000.89;
$tax = 200.90;

$grossSalary = $basicSalary + $bonus;

$netSalary = $grossSalary - $tax ;


echo "========================================="  . PHP_EOL;
echo "SALARY CALCULATOR"  . PHP_EOL;
echo "========================================="  . PHP_EOL;
echo "Employee: " . $employeeName . PHP_EOL;
echo "Basic Salary: " . $basicSalary . PHP_EOL;
echo "Bonus: " . $bonus . PHP_EOL;
echo "Gross Salary: " . $grossSalary . PHP_EOL;
echo "Tax: " . $tax . PHP_EOL;
echo "Net Salary: " . $netSalary . PHP_EOL;
echo "=========================================";