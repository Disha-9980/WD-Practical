<?php
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    // Unsafe output
    echo "Hello " . $name;
}
?>

<form method="post">
    Enter Name: <input type="text" name="name">
    <button name="submit">Submit</button>
</form>