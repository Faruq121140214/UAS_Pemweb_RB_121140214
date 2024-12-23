<?php
require 'pendaftaran/db_connect.php'; // Koneksi database

// Buat tabel jika belum ada
$query = "CREATE TABLE IF NOT EXISTS tblMahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mahasiswa_nama VARCHAR(255) NOT NULL,
    mahasiswa_nim VARCHAR(20) NOT NULL UNIQUE,
    universitas VARCHAR(255) NOT NULL,
    jurusan VARCHAR(255) NOT NULL
)";
$conn->query($query);

// Data dummy
$data = [
    ['John Doe', '121140001', 'Universitas Lampung', 'Teknik Informatika'],
    ['Jane Smith', '121140002', 'Universitas Indonesia', 'Manajemen'],
    ['Alice Johnson', '121140003', 'Universitas Gadjah Mada', 'Hukum'],
    ['Bob Brown', '121140004', 'Institut Teknologi Bandung', 'Teknik Mesin'],
    ['Charlie White', '121140005', 'Universitas Airlangga', 'Psikologi'],
    ['Diana Green', '121140006', 'Universitas Diponegoro', 'Akuntansi'],
    ['Edward Blue', '121140007', 'Universitas Brawijaya', 'Kedokteran'],
    ['Fiona Red', '121140008', 'Universitas Padjadjaran', 'Sastra Inggris'],
    ['George Black', '121140009', 'Universitas Sebelas Maret', 'Pendidikan Matematika'],
    ['Hannah Pink', '121140010', 'Universitas Negeri Jakarta', 'Pendidikan Bahasa Inggris'],
    ['Ian Orange', '121140011', 'Universitas Hasanuddin', 'Teknik Elektro'],
    ['Jack Purple', '121140012', 'Universitas Sumatera Utara', 'Agribisnis'],
    ['Kathy Yellow', '121140013', 'Universitas Negeri Yogyakarta', 'Pendidikan Fisika'],
    ['Leo Cyan', '121140014', 'Universitas Jember', 'Farmasi'],
    ['Mona Grey', '121140015', 'Universitas Andalas', 'Ilmu Komunikasi'],
];

// Masukkan data dummy ke tabel
foreach ($data as $row) {
    $stmt = $conn->prepare("INSERT IGNORE INTO tblMahasiswa (mahasiswa_nama, mahasiswa_nim, universitas, jurusan) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', $row[0], $row[1], $row[2], $row[3]);
    $stmt->execute();
}

echo "Data dummy berhasil dimasukkan.";
?>
