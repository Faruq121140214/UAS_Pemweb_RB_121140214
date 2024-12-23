<?php
include 'db_connect.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Cek apakah username sudah ada
    $checkQuery = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Username sudah digunakan.";
        exit();
    }

    // Simpan data ke database
    $query = "INSERT INTO users (first_name, last_name, country, gender, email, username, password)
              VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssss", $firstName, $lastName, $country, $gender, $email, $username, $hashedPassword);

    if ($stmt->execute()) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Terjadi kesalahan, silakan coba lagi.";
    }

    $stmt->close();
    $conn->close();
}
?>
