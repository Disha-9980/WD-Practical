<?php
echo "Write a PHP script to demonstrate important File Handling and File System Functions including file opening, reading, writing, checking, deleting, renaming files and directory handling operations in PHP.<br>";
echo "Name : Dhrumil Patel <br>";
echo "Enrollment Number : 24082291088 <br>";
echo "------------------------------------------<br><br>";

$file = "sample.txt";

$handle = fopen($file, "w");
fwrite($handle, "Hello, this is a test file.\n");
fclose($handle);

$handle = fopen($file, "r");
echo "File Content:<br>";
echo fread($handle, filesize($file));
fclose($handle);

if (file_exists($file)) {
    echo "<br><br>File exists.";
}

rename($file, "new_sample.txt");
$file = "new_sample.txt";

$dir = "testDir";

if (!is_dir($dir)) {
    mkdir($dir);
    echo "<br><br>Directory created.";
}

if (is_dir($dir)) {
    echo "<br><br>Directory exists.";
}

rmdir($dir);
echo "<br><br>Directory removed.";

unlink($file);
echo "<br><br>File deleted.";
?>