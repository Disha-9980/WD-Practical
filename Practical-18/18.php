<?php
session_start();

$_SESSION["name"] = "Dhrumil";
$_SESSION["role"] = "Student";

echo "Name: " . $_SESSION["name"] . "<br>";
echo "Role: " . $_SESSION["role"] . "<br>";

if (isset($_SESSION["name"])) {
    echo "Session 'name' exists.<br>";
}

$_SESSION["role"] = "Developer";
echo "Updated Role: " . $_SESSION["role"] . "<br>";

session_unset();
session_destroy();

echo "Session destroyed.";
?>