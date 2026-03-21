<?php
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";

function checkNumber($num) {
    try {
        if ($num < 0) {
            throw new Exception("Number must be positive");
        }

        echo "Number is: $num <br>";

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "<br>";

    } finally {
        echo "Execution completed.<br>";
    }
}

checkNumber(10);
checkNumber(-5);
?>