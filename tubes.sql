-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 07:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

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
-- Table structure for table `pemain`
--

CREATE TABLE `pemain` (
  `id_pemain` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `gaji` int(11) NOT NULL,
  `tim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`id_pemain`, `nama`, `usia`, `role`, `gaji`, `tim`) VALUES
(11, 'Paijo', 20, 'Striker', 15000000, 0),
(12, 'Akbariyah', 20, 'Defender', 12000000, 0),
(13, 'Depani', 20, 'Goalkeeper', 10000000, 0),
(14, 'Donu', 20, 'Midfielder', 13000000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pertandingan`
--

CREATE TABLE `pertandingan` (
  `id_pertandingan` int(11) NOT NULL,
  `tim1` int(11) NOT NULL,
  `tim2` int(11) NOT NULL,
  `score1` int(11) NOT NULL,
  `score2` int(11) NOT NULL,
  `date` date NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id_tim` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `poin` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_pemain` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id_tim`, `nama`, `poin`, `lokasi`, `img`, `id_pemain`) VALUES
(0, 'PersiBanten', 100, 'Banten', 'persibanten.png', NULL),
(1, 'Persija', 50, 'Jakarta', 'persija.png', NULL),
(2, 'PSM', 48, 'Makassar', 'psm.png', NULL),
(3, 'Barito Putera', 45, 'Barito', 'barito.png', NULL),
(4, 'Sriwijaya FC', 44, 'Palembang', 'sriwijaya.png', NULL),
(5, 'Persipura', 44, 'Papua', 'persipura.png', NULL),
(6, 'Bali United', 42, 'Bali', 'baliunited.png', NULL),
(7, 'MU', 40, 'Madura', 'mu.jpg', NULL),
(8, 'Bojong Pride', 35, 'Bojongsoang', 'bojong.jpg', NULL),
(9, 'Persib', 2, 'Bandung', 'persib.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(0, '', '0', 'admin', 'admin'),
(5, 'Paijo', 'paijo@gmol.com', 'paijo', 'paijo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
  ADD PRIMARY KEY (`id_pemain`),
  ADD KEY `tim` (`tim`);

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD PRIMARY KEY (`id_pertandingan`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id_tim`),
  ADD KEY `id_pemain` (`id_pemain`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemain`
--
ALTER TABLE `pemain`
  ADD CONSTRAINT `pemain_ibfk_1` FOREIGN KEY (`tim`) REFERENCES `tim` (`id_tim`);

--
-- Constraints for table `tim`
--
ALTER TABLE `tim`
  ADD CONSTRAINT `tim_ibfk_1` FOREIGN KEY (`id_pemain`) REFERENCES `pemain` (`id_pemain`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
