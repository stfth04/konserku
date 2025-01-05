-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2025 at 04:30 AM
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
(1, 'https://d3hzxw6fwm263k.cloudfront.net/uploads/events/photos/1732080467-EqBgtdmD12siwfkkFh7RnAPZ0pFjIHVQ.png?width=1024&quality=90&x-oss-process=image/resize,w_1024,m_lfit/quality,q_90', 'Konser Korban Untuk Sakit Hati', '2025-02-22', 'Gedung Sultan Suriansyah, Banjarmasin'),
(2, 'https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/131/2024/10/31/Mendengarkan-MP3-3412521347.jpg', 'Bernadya', '2024-12-21', 'Gor Rudy Resnawan, Banjarbaru'),
(3, 'https://pbs.twimg.com/profile_images/1865288657101541376/7vxUVmdZ_400x400.jpg', 'Liburland', '2025-04-13', 'Amanah Borneo, Banjarbaru'),
(4, 'https://dewatiket.id/blog/wp-content/uploads/2024/08/Konser-Cosmyc-Fest.png', 'Konser Juicy Luicy', '2024-12-21', 'Gor Rudy Resnawan, Banjarbaru'),
(14, 'https://media.megatix.com.au/e/43003/hhDoNEko49y4yyX3VCSfKylUhL0lqvC1eDedfqJe.png', 'STARLAND SESSION - V2', '2025-01-11', 'Amanah Borneo, Banjarbaru'),
(15, 'https://ypassets.yesplis.com/250102/event/d41a25b0-8b60-489e-9ce1-87457cc0e53e.png', 'Kecil Kecilan Suka Cita Teh Desa VOL.1', '2025-01-19', 'Gedung Sultan Suriansyah, Banjarmasin'),
(16, 'https://asset-2.tstatic.net/banjarmasin/foto/bank/images/Flame-Fest-The-Biggest-Music-Festival-on-Tour-2023.jpg', 'Flame Fest', '2025-05-13', 'Amanah Borneo Park, Banjarbaru'),
(17, 'https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/06/02/Konser-Denny-Caknan-liburanland-busurnusacom-2778339498.jpg', 'Liburland', '2025-02-28', 'Amanah Borneo Park, Banjarbaru'),
(18, 'https://dewatiket.id/blog/wp-content/uploads/2024/06/MP3Fest-Vol-3-1068x532.jpg', 'MP3Fest Vol 3 2025', '2025-06-20', 'Banjarbaru');

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

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$24qas3t52/WqKijWZDVfYO7oj.Z.0SY7MVxLowpgqkXR64kwtJ0N2');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_dashboard`
--
ALTER TABLE `card_dashboard`
  MODIFY `id_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
