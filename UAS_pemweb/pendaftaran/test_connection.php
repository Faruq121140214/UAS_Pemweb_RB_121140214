<?php
$host = "localhost";
$username = "root"; // Sesuaikan dengan user Anda
$password = "";     // Sesuaikan dengan password Anda
$database = "users"; // Nama database Anda

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
