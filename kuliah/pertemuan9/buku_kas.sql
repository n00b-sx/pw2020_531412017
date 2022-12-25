-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 03:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_kas`
--

-- --------------------------------------------------------

--
-- Table structure for table `dana_bos_masuk`
--

CREATE TABLE `dana_bos_masuk` (
  `id` int(11) NOT NULL,
  `tahap` varchar(8) NOT NULL,
  `bulan_msk` varchar(8) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_msk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saldo_awal`
--

CREATE TABLE `saldo_awal` (
  `id` int(11) NOT NULL,
  `saldo_bank` int(20) DEFAULT NULL,
  `saldo_tunai` int(20) DEFAULT NULL,
  `saldo_awl_pph21` int(20) DEFAULT NULL,
  `saldo_awl_pph22` int(20) DEFAULT NULL,
  `saldo_awl_pb1` int(20) DEFAULT NULL,
  `saldo_awl_ppn` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saldo_awal`
--

INSERT INTO `saldo_awal` (`id`, `saldo_bank`, `saldo_tunai`, `saldo_awl_pph21`, `saldo_awl_pph22`, `saldo_awl_pb1`, `saldo_awl_ppn`) VALUES
(15, 3758, 298171, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kas`
--

CREATE TABLE `tbl_kas` (
  `id_kas` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_bukti` varchar(20) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `kas_masuk` int(25) NOT NULL,
  `kas_keluar` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dana_bos_masuk`
--
ALTER TABLE `dana_bos_masuk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tahap` (`tahap`);

--
-- Indexes for table `saldo_awal`
--
ALTER TABLE `saldo_awal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kas`
--
ALTER TABLE `tbl_kas`
  ADD PRIMARY KEY (`id_kas`),
  ADD UNIQUE KEY `no_bukti` (`no_bukti`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dana_bos_masuk`
--
ALTER TABLE `dana_bos_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saldo_awal`
--
ALTER TABLE `saldo_awal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_kas`
--
ALTER TABLE `tbl_kas`
  MODIFY `id_kas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
