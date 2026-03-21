<?php
echo "Write a PHP script to demonstrate basic string functions such as strlen(), substr(), trim(), and strpos().<br>";
echo "Name : Disha Panchal <br>";
echo "Enrollment Number : 24082291082 <br>";
echo "------------------------------------------<br><br>";

$str = " Hello World  ";

echo "Length: " . strlen($str) . "<br>";
echo "Trimmed: " . trim($str) . "<br>";
echo "Substring: " . substr($str, 2, 5) . "<br>";
echo "Position of 'World': " . strpos($str, "World");
?>