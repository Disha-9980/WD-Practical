<?php
echo "Write a PHP script to demonstrate the use of while, do-while and foreach loops.<br>";
echo "Name : Disha Panchal <br>";
echo "Enrollment Number : 24082291082 <br>";
echo "------------------------------------------<br><br>";

echo "While Loop Example:<br>";
$i = 1;
while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}
echo "<br>";

echo "Do-While Loop Example:<br>";
$j = 1;
do {
    echo $j . "<br>";
    $j++;
} while ($j <= 5);
echo "<br>";

echo "Foreach Loop Example:<br>";
$colors = array("Red", "Green", "Blue", "Yellow");
foreach ($colors as $color) {
    echo $color . "<br>";
}
?>