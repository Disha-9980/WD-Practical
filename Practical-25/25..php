<?php
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";

$conn = new mysqli("localhost", "root", "", "test");

if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    // Secure query
    $stmt = $conn->prepare("SELECT * FROM userss WHERE username=? AND password=?");
    $stmt->bind_param("ss", $u, $p);
    $stmt->execute();
    $res = $stmt->get_result();

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