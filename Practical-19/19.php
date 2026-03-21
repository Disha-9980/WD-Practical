<?php
setcookie("user", "Dhrumil", time() + 3600);

if (isset($_COOKIE["user"])) {
    echo "User: " . $_COOKIE["user"] . "<br>";
}

if (isset($_COOKIE["user"])) {
    echo "Cookie exists.<br>";
}

setcookie("user", "Developer", time() + 3600);
echo "Cookie modified.<br>";

setcookie("user", "", time() - 3600);
echo "Cookie deleted.";
?>