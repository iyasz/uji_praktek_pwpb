-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 04:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_admin_ilyasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adm`
--

CREATE TABLE `tbl_adm` (
  `id_adm` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telepon` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_adm`
--

INSERT INTO `tbl_adm` (`id_adm`, `nama`, `username`, `password`, `telepon`) VALUES
(1, 'iyasz', 'aw', 'awd', '08'),
(7, 'iyasz', 'aw', 'awd', '083933'),
(8, 'iyasz', 'awdawd', 'awd', '9393939'),
(9, 'elainawd', 'awdawd', 'awdawd', '23243'),
(10, 'awdawd', '3edwdw', 'awdawd', '23232'),
(11, 'qwdqd', '232d3d2', 'adawd', '32d2'),
(12, 'kakak', 'iyas', '232d2d2', 'addad'),
(13, 'awdad', 'qwdqd', 'adawd', 'adawd'),
(14, 'awdawd', '2d323d', 'dawdad', 'dawdawd'),
(15, 'awdad', '23d2d23vrv2', '23cr2c', 'c2r23cr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_adm`
--
ALTER TABLE `tbl_adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_adm`
--
ALTER TABLE `tbl_adm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
