-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 05:40 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `school` varchar(20) NOT NULL,
  `programId` varchar(20) NOT NULL,
  `intakeYear` year(4) NOT NULL,
  `enrolled_count` int(11) NOT NULL,
  `graduationYear` year(4) NOT NULL,
  `graduated_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `school`, `programId`, `intakeYear`, `enrolled_count`, `graduationYear`, `graduated_count`) VALUES
(3, 'Infocoms', 'Informatics', '2016', 70, '2020', 40),
(4, 'Infocoms', 'Informatics', '2017', 50, '2021', 24),
(5, 'Infocoms', 'Informatics', '2018', 60, '2022', 20),
(6, 'Infocoms', 'Informatics', '2019', 30, '2023', 24),
(7, 'Education', 'EDA', '2016', 700, '2019', 500),
(8, 'Education', 'EDA', '2017', 475, '2021', 450),
(9, 'Education', 'EDA', '2018', 560, '2022', 400),
(10, 'Education', 'EDA', '2019', 426, '2023', 350),
(11, 'Education', 'EDS', '2019', 400, '2023', 340),
(12, 'Education', 'EDS', '2018', 407, '2022', 303),
(13, 'Education', 'EDS', '2017', 300, '2021', 270),
(14, 'Education', 'EDS', '2016', 220, '2020', 218),
(15, 'Education', 'SNE', '2016', 380, '2020', 218),
(16, 'Education', 'SNE', '2017', 380, '2021', 300),
(17, 'Education', 'SNE', '2018', 421, '2022', 367),
(18, 'Education', 'SNE', '2019', 421, '2023', 390),
(20, 'SSAES', 'comp_science', '2019', 57, '2023', 30),
(21, 'SSAES', 'comp_science', '2016', 35, '2020', 15),
(23, 'SSAES', 'comp_science', '2018', 25, '2022', 15),
(24, 'SSAES', 'comp_science', '2019', 30, '2023', 27),
(25, 'SSAES', 'AGED', '2019', 300, '2023', 270),
(26, 'SSAES', 'AGED', '2018', 430, '2022', 390),
(27, 'SSAES', 'AGED', '2017', 220, '2021', 197),
(28, 'SSAES', 'AGED', '2016', 180, '2020', 140),
(29, 'Infocoms', 'INS', '2016', 180, '2020', 140),
(30, 'Infocoms', 'INS', '2017', 70, '2021', 45),
(31, 'Infocoms', 'INS', '2018', 36, '2022', 29),
(32, 'Infocoms', 'INS', '2019', 33, '2023', 20),
(33, 'Infocoms', 'BCJ', '2019', 270, '2023', 256),
(34, 'Infocoms', 'BCJ', '2018', 137, '2022', 100),
(35, 'Infocoms', 'BCJ', '2017', 90, '2021', 88),
(36, 'Infocoms', 'BCJ', '2016', 112, '2020', 76),
(37, 'SSAES', 'FDT', '2016', 100, '2020', 76),
(38, 'SSAES', 'FDT', '2017', 0, '2021', 0),
(39, 'SSAES', 'FDT', '2018', 40, '2022', 36),
(40, 'SSAES', 'FDT', '2019', 56, '2023', 36),
(41, 'SASSB', 'Public_relations', '2019', 56, '2023', 36),
(42, 'SASSB', 'Public_relations', '2019', 50, '2023', 45),
(43, 'SASSB', 'Public_relations', '2018', 37, '2022', 24),
(44, 'SASSB', 'Public_relations', '2017', 43, '2021', 20),
(45, 'SASSB', 'Public_relations', '2016', 40, '2020', 29),
(46, 'SASSB', 'Political_science', '2016', 57, '2020', 33),
(47, 'SASSB', 'Political_science', '2017', 60, '2021', 40),
(48, 'SASSB', 'Political_science', '2018', 75, '2021', 67),
(49, 'SASSB', 'Political_science', '2018', 75, '2022', 67),
(50, 'SASSB', 'Political_science', '2019', 83, '2023', 67),
(51, 'SASSB', 'Pure_geography', '2019', 427, '2023', 412),
(52, 'SASSB', 'Pure_geography', '2018', 376, '2022', 340),
(53, 'SASSB', 'Pure_geography', '2017', 217, '2021', 200),
(54, 'SASSB', 'Pure_geography', '2016', 176, '2020', 140);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
