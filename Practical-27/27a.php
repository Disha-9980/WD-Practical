<?php
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";
echo "When you run attacker's file it will redirect to your original file and whenever you change the password it will show that changed password to attacker also. <br><br>";
session_start();

if (isset($_POST['change'])) {
    $new_pass = $_POST['password'];

    // Simulate password change
    echo "Password changed to: " . $new_pass;
}
?>

<form method="post">
    New Password: <input type="text" name="password">
    <button name="change">Change Password</button>
</form>