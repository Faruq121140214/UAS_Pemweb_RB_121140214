<?php
$host = "localhost";
$username = "root"; // Ganti dengan user database Anda
$password = "";     // Ganti dengan password database Anda
$database = "users"; // Ganti dengan nama database Anda

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} else {
    echo "Debug: Connected to database successfully!";
}
?>
