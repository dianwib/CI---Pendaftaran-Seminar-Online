-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2019 at 02:19 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `password`, `level`) VALUES
(1, 'dian wibowo', 'admin', 'admin'),
(2, 'wibowo', 'admin', 'panitia');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_acara` int(2) NOT NULL,
  `jam_acara` varchar(15) NOT NULL,
  `keterangan_acara` varchar(255) NOT NULL,
  `pembawa_acara` varchar(255) NOT NULL,
  `penanggungjawab_acara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_acara`, `jam_acara`, `keterangan_acara`, `pembawa_acara`, `penanggungjawab_acara`) VALUES
(2, '07.00-08.00', 'talkshow', 'bill gates', 'sie acara'),
(5, '09.00-13.00', 'talkshow', 'mark zulkenberg', 'sie acaara'),
(6, '08.00-09.00', 'ice breaking', 'tari saman', 'sie acara, sie pdd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `no_rekening` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `level`, `email`, `no_telepon`, `bank`, `no_rekening`) VALUES
('1234567890123456', '1', '1', 'member', '11@c.c', '1', '1', '1'),
('2147483647', 'dian wibowo', 'iwaklele', 'publik', 'dianwib@gmail.com', '081553599580', 'btn', '111222333'),
('23', 'Dian wibowo', '1', 'member', 'sasas@dsds.k', '13188898989330', 'BTN', '22222'),
('29', 'dian', 'dian', 'member', 'akudian@gmail.com', '031222999898', 'BCA', '88988889998998'),
('30', 'dian wibowo', 'dian', 'publik', 'admin@gmail.com', '0311110002', 'BCA', '88888'),
('31', 'diah kriswanti', '2', 'publik', 'weasleydean@gmail.com', '1111', 'btn', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_acara` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
