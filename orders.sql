-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2025 at 01:37 PM
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
-- Database: `toko_optik`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--
CREATE DATABASE IF NOT EXISTS `toko_optik` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `toko_optik`;
CREATE TABLE `orders` (
  `no_order` int NOT NULL,
  `no_ref` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `karyawan` varchar(50) NOT NULL,
  `total_modal` varchar(50) NOT NULL,
  `total_jual` varchar(50) NOT NULL,
  `total_bayar` varchar(50) NOT NULL,
  `keuntungan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`no_order`, `no_ref`, `nama`, `telepon`, `tgl_pesan`, `karyawan`, `total_modal`, `total_jual`, `total_bayar`, `keuntungan`) VALUES
(10001, 251001, 'Budi Santoso', '0812355555555', '2025-10-04', 'Citra Putra', '150000', '1853322', '185000', '350222'),
(10002, 251002, 'Dewi Lestari', '085678901234', '2025-10-01', 'Bagus', '250000', '310000', '310000', '60000'),
(10003, 251003, 'Agus Setiawan', '087812345678', '2025-10-02', 'Citra', '80000', '100000', '100000', '20000'),
(10004, 251004, 'Siti Aminah', '081122334455', '2025-10-02', 'Rian', '450000', '550000', '550000', '100000'),
(10005, 251005, 'Eko Prasetyo', '089988776655', '2025-10-03', 'Bagus', '320000', '400000', '400000', '80000'),
(10007, 251007, 'Iwan Gunawan', '083811223344', '2025-10-04', 'Rian', '75000', '95000', '95000', '20000'),
(10008, 251008, 'Rina Marlina', '085755667788', '2025-10-04', 'Citra', '600000', '725000', '725000', '125000'),
(10009, 251009, 'Hadi Wijaya', '081314151617', '2025-10-05', 'Bagus', '210000', '260000', '260000', '50000'),
(10011, 251011, 'Dedi Kurniawan', '081928374655', '2025-10-06', 'Citra', '180000', '220000', '220000', '40000'),
(10013, 251013, 'Bambang Susilo', '081299887766', '2025-10-07', 'Rian', '40000', '55000', '55000', '15000'),
(10014, 251014, 'Nurul Hidayah', '085812131415', '2025-10-07', 'Citra', '110000', '140000', '140000', '30000'),
(10015, 251015, 'Joko Purnomo', '087856575859', '2025-10-08', 'Bagus', '275000', '350000', '350000', '75000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`no_order`),
  ADD UNIQUE KEY `no_ref` (`no_ref`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
