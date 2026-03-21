<?php
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";
echo "This is secured with CSRF token <br><br>";

session_start();

// Generate token
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

if (isset($_POST['change'])) {
    // Verify token
    if ($_POST['token'] === $_SESSION['token']) {
        $new_pass = $_POST['password'];
        echo "Password changed to: " . $new_pass;
    } else {
        echo "Invalid CSRF Token!";
    }
}
?>

<form method="post">
    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
    New Password: <input type="text" name="password">
    <button name="change">Change Password</button>
</form>