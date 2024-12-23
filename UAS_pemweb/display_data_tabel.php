<?php
// Koneksi ke database
require_once 'koneksi.php';
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Inisialisasi variabel untuk paginasi
$limit = 10; // Jumlah data per halaman
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Halaman aktif
$offset = ($page - 1) * $limit; // Hitung offset untuk query

// Ambil data dari database dengan limit dan offset
$sql = "SELECT * FROM tblMahasiswa LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

// Hitung total data untuk navigasi
$totalSql = "SELECT COUNT(*) as total FROM tblMahasiswa";
$totalResult = $conn->query($totalSql);
$totalData = $totalResult->fetch_assoc()['total'];
$totalPages = ceil($totalData / $limit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: #f9f9f9; /* Warna untuk baris ganjil */
        }
        tr:nth-child(even) {
            background-color: #ffffff; /* Warna untuk baris genap */
        }
        .pagination {
            margin-top: 10px;
            display: flex;
            justify-content: center;
        }
        .pagination button {
            margin: 0 5px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .pagination button:disabled {
            background-color: #cccccc;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = $offset + 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$no}</td>";
                    echo "<td>{$row['mahasiswa_nim']}</td>";
                    echo "<td>{$row['mahasiswa_nama']}</td>";
                    echo "<td>{$row['mahasiswa_prodi']}</td>";
                    echo "</tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Navigasi Paginasi -->
    <div class="pagination">
        <?php if ($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?>">
                <button>Previous</button>
            </a>
        <?php else: ?>
            <button disabled>Previous</button>
        <?php endif; ?>

        <?php if ($page < $totalPages): ?>
            <a href="?page=<?php echo $page + 1; ?>">
                <button>Next</button>
            </a>
        <?php else: ?>
            <button disabled>Next</button>
        <?php endif; ?>
    </div>
</body>
</html>
