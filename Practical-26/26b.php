<?php
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";
echo "This is secured, and avoid XSS <br><br>";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    // Safe output
    $safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

    echo "Hello " . $safe_name;
}
?>

<form method="post">
    Enter Name: <input type="text" name="name">
    <button name="submit">Submit</button>
</form>