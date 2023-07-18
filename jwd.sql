-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 11:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha') NOT NULL,
  `sekolah_asal` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nim`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(1, 'Akhmad Fiqri', '2002016', 'Simpang Kawat', 'Laki-laki', 'Islam', 'SMKN 3 KOTA JAMBI'),
(2, 'Rinaldi Putra', '2002055', 'Kasang Pudak', 'Laki-laki', 'Hindu', 'SMKN 4 KOTA JAMBI'),
(3, 'Jodi Arianto', '2002068', 'Kota Baru', 'Laki-laki', 'Budha', 'SMK PGRI 1'),
(4, 'M.Dudan Ariansyah', '2002004', 'Pasir Putih', 'Laki-laki', 'Hindu', 'SMKN 2 KOTA JAMBI'),
(7, 'Widya Lanti', '2002078', 'Sengeti', 'Laki-laki', 'Islam', 'SMKN 3 KOTA JAMBI'),
(8, 'Lala Eka Putri', '2002072', 'Thehok', 'Perempuan', 'Kristen', 'SMK NUSANTARA'),
(9, 'Yuliani', '2002096', 'Talang Banjar', 'Perempuan', 'Islam', 'SMKN 2 KOTA JAMBI'),
(10, 'Noel', '2002046', 'Pal Merah', 'Laki-laki', 'Hindu', 'SMA 8 KOTA JAMBI'),
(11, 'Ranto', '2002025', 'Jalan Lampung', 'Laki-laki', 'Budha', 'SMA 10 KOTA JAMBI'),
(12, 'Aninda', '2002006', 'Pasar', 'Perempuan', 'Islam', 'SMK 1 MUARO JAMBI'),
(13, 'Mega Mustika', '2002052', 'Mandiangin', 'Perempuan', 'Hindu', 'SMA AL FALAH KOTA JAMBI'),
(14, 'Beta Bernadeta', '2002008', 'Solok Sipin', 'Perempuan', 'Kristen', 'SMK XAVERIUS KOTA JAMBI'),
(15, 'Dela Puspita', '2002020', 'Pal 13', 'Perempuan', 'Islam', 'SMK SATRIA KOTA JAMBI'),
(16, 'Nofita Handayani', '2002014', 'Pucuk', 'Perempuan', 'Islam', 'SMA 11 KOTA JAMBI'),
(17, 'Husni Mubarok', '2002035', 'Bagan Pete', 'Laki-laki', 'Islam', 'SMK1 KOTA JAMBI'),
(19, 'Agustian Lumbang Tobing', '2002098', 'Kebun Kopi', 'Laki-laki', 'Kristen', 'SMK YADIKA KOTA JAMBI'),
(20, 'Ahmad Sodikin', '2002078', 'Sengeti', 'Laki-laki', 'Islam', 'SMK 4 MUARO JAMBI'),
(21, 'Fajri Mubarog', '2002054', 'Sipin', 'Laki-laki', 'Islam', 'SMK 1 MUARO JAMBI'),
(23, 'Adzi Purnomo', '2002001', 'Permata Lend', 'Laki-laki', 'Islam', 'SMK1 KOTA JAMBI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
