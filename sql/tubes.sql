-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 04:24 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `kontak_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` int(11) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`kontak_id`, `nama`, `email`, `telp`, `pesan`) VALUES
(2, 'jajang', 'jajang@gmail.com', 8123141, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `img` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `jenis`, `jumlah`, `img`, `img2`) VALUES
(24, 'SKUNK DARK BLUE S/S 19', 600000, 'Jackets', 10, 'Skunk_Dark_Blue_1.PNG', 'Skunk_Dark_Blue_2.PNG'),
(25, 'CHRONIC CARGO SHORT BLUE S/S 19', 450000, 'Pants', 10, 'Chronic_Cargo_Short_Blue_1.PNG', 'Chronic_Cargo_Short_Blue_2.PNG'),
(26, 'CHRONIC CARGO SHORT RED S/S 19', 450000, 'Pants', 10, 'Chronic_Cargo_Short_Red_1.PNG', 'Chronic_Cargo_Short_Red_2.PNG'),
(27, 'FATTY FATIQUE MAROON S/S 19', 550000, 'Pants', 10, 'Fatty_Fatique_Pant_Maroon_1.PNG', 'Fatty_Fatique_Pant_Maroon_2.PNG'),
(28, 'FATTY FATIQUE CHARCOAL S/S 19', 550000, 'Pants', 10, 'Fatty_Fatique_Pant_Charcoal_1.PNG', 'Fatty_Fatique_Pant_Charcoal_2.PNG'),
(29, 'THAISTICK INDIGO S/S 19', 600000, 'Pants', 10, 'Thaistick_Indigo_1.PNG', 'Thaistick_Indigo_2.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`kontak_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `kontak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
