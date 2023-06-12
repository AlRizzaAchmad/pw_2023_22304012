-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 12:03 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2023_223040123`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_layanan`
--

CREATE TABLE `daftar_layanan` (
  `id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `spesialis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nomor_telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `daftar_layanan`
--

INSERT INTO `daftar_layanan` (`id`, `nama`, `gambar`, `spesialis`, `nomor_telepon`, `email`) VALUES
(1, 'Asep kurniadi', 'bayi.png', 'Kesehatan Bayi', '08889145265248', 'asepk@gmail.com'),
(2, 'Mira rahmawati\r\n\r\n', 'diabetes.png', 'Spesialis Penyakit dalam. ', '08889145265248', 'Rahmawati11@gmail.com '),
(3, 'La Hau\r\n', 'kanker.png', 'Spesialis radiologi. ', '08889145265476', 'Hauhau03@gmail.com '),
(4, 'Hidayatulah\r\n', 'kesehatanmulut.png', 'Spesialis gigi. ', '08889145265476', 'hidayatul3@gmail.com '),
(5, 'Agung\r\n', 'mata.png', 'Spesialis mata.', '08889145278518', 'agungi23@gmail.com '),
(6, 'Trilaksana\r\n', 'diabetes.png', 'Spesialis Penyakit dalam. ', '08889145265418', 'Laksana97@gmail.com '),
(43, 'a.d', '64857057bf12a.png', 'ac', 'ac', 'ac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_layanan`
--
ALTER TABLE `daftar_layanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_layanan`
--
ALTER TABLE `daftar_layanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
