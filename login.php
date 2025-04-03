<?php
$servername = "localhost";
$username = "root"; // or 'cdhh4' if you're using another user
$password = ""; // If you set a password, add it here
$dbname = "student_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
