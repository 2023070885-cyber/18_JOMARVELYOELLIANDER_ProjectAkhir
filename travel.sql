-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 03:49 AM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `kode` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_tujuan` text COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_keberangkatan` text COLLATE utf8mb4_general_ci NOT NULL,
  `metode_transportasi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tingkatan_layanan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `metode_pembayaran` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`kode`, `alamat_tujuan`, `tanggal_keberangkatan`, `metode_transportasi`, `tingkatan_layanan`, `metode_pembayaran`) VALUES
('082137490888', 'asia,china,beijing', '20,12,2025', 'pesawat', 'firstclass', 'credit'),
('241413yy', 'asia,indonesia,jakarta', '1,1,3499', 'pesawat', 'business', 'bank'),
('p0080', 'asia,indonesia,surabaya', '1,1,3489', 'pesawat', 'firstclass', 'bank');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `nama_lengkap` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_telephone` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `negara` text COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`nama_lengkap`, `tanggal_lahir`, `jenis_kelamin`, `nomor_telephone`, `email`, `alamat`, `negara`, `username`, `password`) VALUES
('ALVIN', '1/1/1', '', '6966969', '22133@STUDEN.SCH.ID', 'GRANADA', 'INDIA', '333ALVIN', 123456),
('ALVIN GIGA', '2025-11-13', 'P', '12414', 'a@addd', 'PM bom', 'INDIA', '1342414dsss', 1234567),
('DOWER', '2,25,2920', 'L', '9767736', 'EL@AD', 'PTC', 'AFRICA', 'AFAKLS', 9876);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`nama_lengkap`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `nomor_telephone` (`nomor_telephone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
