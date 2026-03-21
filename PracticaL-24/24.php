<?php
/*CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(50)
);

INSERT INTO courses (course_name) VALUES ('PHP'), ('Java'), ('Python');*/

echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";

$conn = new mysqli("localhost", "root", "", "test");

// Fetch data
$result = $conn->query("SELECT * FROM courses");
?>

<form method="post">
    Select Course:
    <select name="course">
        <?php while($row = $result->fetch_assoc()): ?>
            <option value="<?= $row['id'] ?>">
                <?= $row['course_name'] ?>
            </option>
        <?php endwhile; ?>
    </select>

    <button type="submit">Submit</button>
</form>

<?php
// Display selected value
if (isset($_POST['course'])) {
    echo "Selected Course ID: " . $_POST['course'];
}

$conn->close();
?>