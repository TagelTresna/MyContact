-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 07:51 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_phone`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_contact`
--

CREATE TABLE `t_contact` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Phone_Number` varchar(15) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Photo` varchar(100) DEFAULT NULL,
  `Gender` enum('Laki-laki','Perempuan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_contact`
--

INSERT INTO `t_contact` (`ID`, `First_Name`, `Last_Name`, `Phone_Number`, `Email`, `Photo`, `Gender`) VALUES
(1, 'Elis', 'Saraswati', '085369147258', 'elis@gmail.com', 'https://jepriana.stikom-bali.ac.id/ws/images/ava_girl.png', 'Perempuan'),
(2, 'Agus', 'Sutejo', '085274196355', 'agus@gmail.com', 'https://jepriana.stikom-bali.ac.id/ws/images/ava_boy.png', 'Laki-laki'),
(3, 'Bayu', 'Samudra', '0852147360', 'bayu@gmail.com', 'https://jepriana.stikom-bali.ac.id/ws/images/ava_boy.png', 'Laki-laki'),
(4, 'Citra', 'Darmika', '08123456789', 'citra@gmail.com', 'https://jepriana.stikom-bali.ac.id/ws/images/ava_girl.png', 'Perempuan'),
(5, 'Dedy', 'Budiharta', '085214714700', 'dedy@gmail.com', 'https://jepriana.stikom-bali.ac.id/ws/images/ava_boy.png', 'Laki-laki'),
(6, 'Febri', 'Iswara', '089123456987', 'febri@gmail.com', 'https://jepriana.stikom-bali.ac.id/ws/images/ava_boy.png', 'Laki-laki'),
(7, 'Gita', 'Sinaga', '081369258147', 'gita@gmail.com', 'https://jepriana.stikom-bali.ac.id/ws/images/ava_girl.png', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_contact`
--
ALTER TABLE `t_contact`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_contact`
--
ALTER TABLE `t_contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
