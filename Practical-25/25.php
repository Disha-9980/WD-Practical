<?php
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";

$conn = new mysqli("localhost", "root", "", "test");

if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    // Vulnerable query
    $sql = "SELECT * FROM userss WHERE username='$u' AND password='$p'";
    $res = $conn->query($sql);

    if ($res->num_rows > 0)
        echo "Login Successful";
    else
        echo "Invalid Login";
}
?>

<form method="post">
Username: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
<button name="login">Login</button>
</form>