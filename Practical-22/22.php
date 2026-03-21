<?php
/*Write this in mysql database
CREATE DATABASE test;
USE test;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50)
);*/
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";

$conn = new mysqli("localhost", "root", "", "test");

// CREATE
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO users (name,email) VALUES ('$name','$email')");
}

// DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM users WHERE id=$id");
}

// UPDATE
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
}

// READ
$result = $conn->query("SELECT * FROM users");
?>

<!-- FORM -->
<form method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?? ''; ?>">
    Name: <input type="text" name="name" required>
    Email: <input type="email" name="email" required>

    <button name="add">Add</button>
    <button name="update">Update</button>
</form>

<hr>

<!-- DISPLAY DATA -->
<table border="1">
<tr>
    <th>ID</th><th>Name</th><th>Email</th><th>Action</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td>
        <a href="?id=<?= $row['id'] ?>">Edit</a> |
        <a href="?delete=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>
<?php endwhile; ?>

</table>