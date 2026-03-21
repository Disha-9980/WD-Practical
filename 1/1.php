<?php
echo "Write a PHP script to display a simple message using echo/print and demonstrate variables and data types using the var_dump() function.<br>";
echo "Name : Disha Panchal <br>";
echo "Enrollment Number : 24082291082 <br>";
echo "------------------------------------------<br><br>";

echo "Hello!<br>";

$name = "Disha";
$age = 20;

echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br><br>";

echo "<b>use var_dump() function :-</b> <br>";

var_dump($name);
echo "<br>";

var_dump($age);
echo "<br>";

?>