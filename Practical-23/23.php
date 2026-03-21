<?php
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";

$conn = new mysqli("localhost", "root", "", "test");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SELECT query
$result = $conn->query("SELECT * FROM users");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>";

// Fetch and display data
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
          </tr>";
}

echo "</table>";

// Close connection
$conn->close();
?>