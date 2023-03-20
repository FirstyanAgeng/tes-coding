-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 10:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` char(200) NOT NULL,
  `nama` char(200) NOT NULL,
  `nohp` char(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` char(200) NOT NULL,
  `password` char(200) NOT NULL,
  `status` enum('Aktif','Nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `nohp`, `alamat`, `username`, `password`, `status`) VALUES
('22101916121027', 'Wisnu Prasetya', '628923982983', 'Jogjakarta Indonesia', 'wisnu', 'eb707d96d30fd3ed87c1557b1a718e5d901624f7', 'Aktif'),
('22101916162502', 'Harun Nur', '628912837982', 'Purwokerto', 'harun', '27956ca1721ce6db8892f512755306b7985ca5dd', 'Aktif'),
('22101916162536', 'Admin Sistem', '62812222211', '', 'admin', '7b2e9f54cdff413fcde01f330af6896c3cd7e6cd', 'Nonaktif'),
('22102001464249', 'Agung Tri', '6281298398293', 'Baturaden', 'agung', '07159ed607a84c75c58d794eef7d5345a68cf404', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
