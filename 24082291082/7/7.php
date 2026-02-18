<?php
echo "Write a PHP script to demonstrate user-defined functions with parameters and return values.<br>";
echo "Name : Disha Panchal <br>";
echo "Enrollment Number : 24082291082 <br>";
echo "------------------------------------------<br><br>";

function add($a, $b) {
    return $a + $b;
}

$result = add(10, 20);
echo "Sum = " . $result;
?>