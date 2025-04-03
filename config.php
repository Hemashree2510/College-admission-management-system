<?php
// Database connection configuration

$servername = "localhost"; // Change if using a remote server
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (leave empty)
$database = "CollegeAdmissionDB"; // Change based on your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
