<?php
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$conn->close();
?>