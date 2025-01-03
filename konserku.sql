-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2025 at 01:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konserku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `create`) VALUES
(1, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `card_dashboard`
--

CREATE TABLE `card_dashboard` (
  `id_card` int(11) NOT NULL,
  `foto_card` varchar(255) DEFAULT NULL,
  `nama_event` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card_dashboard`
--

INSERT INTO `card_dashboard` (`id_card`, `foto_card`, `nama_event`, `tanggal`, `lokasi`) VALUES
(1, 'https://d3hzxw6fwm263k.cloudfront.net/uploads/events/photos/1732080467-EqBgtdmD12siwfkkFh7RnAPZ0pFjIHVQ.png?width=1024&quality=90&x-oss-process=image/resize,w_1024,m_lfit/quality,q_90', 'Konser Korban Untuk Sakit Hati', '2025-02-22', 'Banjarmasin, Gedung Sultan Suriansyah'),
(2, 'https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/131/2024/10/31/Mendengarkan-MP3-3412521347.jpg', 'Bernadya', '2024-12-21', 'Banjarbaru, Gor Rudy Resnawan'),
(3, 'https://pbs.twimg.com/profile_images/1865288657101541376/7vxUVmdZ_400x400.jpg', 'Liburland', '2025-04-13', 'Amanah Borneo, Banjarbaru'),
(4, 'https://dewatiket.id/blog/wp-content/uploads/2024/08/Konser-Cosmyc-Fest.png', 'Konser Juicy Luicy', '2024-12-21', 'Gor Rudy Resnawan, Banjarbaru');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `foto_poster` varchar(255) DEFAULT NULL,
  `nama_event` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `desk` text DEFAULT NULL,
  `lineup` int(255) NOT NULL,
  `vanue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `card_dashboard`
--
ALTER TABLE `card_dashboard`
  ADD PRIMARY KEY (`id_card`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD UNIQUE KEY `desk` (`id_event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `card_dashboard`
--
ALTER TABLE `card_dashboard`
  MODIFY `id_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
