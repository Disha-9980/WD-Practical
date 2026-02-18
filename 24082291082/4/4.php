<?php
echo "Write a PHP script using switch-case to implement a simple menu-driven or calculator system.<br>";
echo "Name : Disha Panchal <br>";
echo "Enrollment Number : 24082291082 <br>";
echo "------------------------------------------<br><br>";

$num1 = 20;
$num2 = 10;

$choice = 3;

echo "Menu-Driven Calculator:<br>";
echo "1. Addition<br>";
echo "2. Subtraction<br>";
echo "3. Multiplication<br>";
echo "4. Division<br><br>";

switch ($choice) {
    case 1:
        echo "Addition: " . ($num1 + $num2);
        break;

    case 2:
        echo "Subtraction: " . ($num1 - $num2);
        break;

    case 3:
        echo "Multiplication: " . ($num1 * $num2);
        break;

    case 4:
        echo "Division: " . ($num1 / $num2);
        break;

    default:
        echo "Invalid Choice";
}
?>