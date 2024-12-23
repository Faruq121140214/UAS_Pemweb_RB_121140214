-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 05:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblmahasiswa`
--

CREATE TABLE `tblmahasiswa` (
  `id` int(11) NOT NULL,
  `mahasiswa_nim` varchar(20) NOT NULL,
  `mahasiswa_nama` varchar(255) NOT NULL,
  `universitas` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblmahasiswa`
--

INSERT INTO `tblmahasiswa` (`id`, `mahasiswa_nim`, `mahasiswa_nama`, `universitas`, `jurusan`, `password`) VALUES
(1, '121140001', 'Ahmad Yusuf', 'Universitas Lampung', 'Teknik Informatika', 'password1'),
(2, '121140002', 'Siti Aminah', 'Universitas Gadjah Mada', 'Kedokteran', 'password2'),
(3, '121140003', 'Budi Santoso', 'Universitas Indonesia', 'Hukum', 'password3'),
(4, '121140004', 'Dewi Lestari', 'Universitas Padjadjaran', 'Psikologi', 'password4'),
(5, '121140005', 'Fajar Pratama', 'Universitas Diponegoro', 'Ekonomi', 'password5'),
(6, '121140006', 'Intan Permata', 'Universitas Brawijaya', 'Ilmu Komunikasi', 'password6'),
(7, '121140007', 'Ridho Wahyudi', 'Universitas Airlangga', 'Farmasi', 'password7'),
(8, '121140008', 'Nina Maharani', 'Institut Teknologi Bandung', 'Teknik Mesin', 'password8'),
(9, '121140009', 'Joko Susilo', 'Universitas Sebelas Maret', 'Agribisnis', 'password9'),
(10, '121140010', 'Sri Wahyuni', 'Universitas Andalas', 'Biologi', 'password10'),
(11, '121140011', 'Aulia Rahman', 'Universitas Negeri Malang', 'Pendidikan Bahasa Inggris', 'password11'),
(12, '121140012', 'Rina Sari', 'Universitas Hasanuddin', 'Keperawatan', 'password12'),
(13, '121140013', 'Toni Hartono', 'Institut Pertanian Bogor', 'Teknologi Pangan', 'password13'),
(14, '121140014', 'Dina Setiawati', 'Universitas Sumatera Utara', 'Kesehatan Masyarakat', 'password14'),
(15, '121140015', 'Yoga Prasetyo', 'Universitas Jember', 'Kimia', 'password15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblmahasiswa`
--
ALTER TABLE `tblmahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswa_nim` (`mahasiswa_nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblmahasiswa`
--
ALTER TABLE `tblmahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
