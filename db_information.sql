-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 07:15 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `I_ID` tinyint(4) NOT NULL,
  `I_name` varchar(50) NOT NULL,
  `I_detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`I_ID`, `I_name`, `I_detail`) VALUES
(4, 'เปิดรับสมัคร', '--'),
(5, 'เปิดรับสมัครอีกรอบสิ', '--'),
(6, 'เปิดรับสมัคร12', '--');

-- --------------------------------------------------------

--
-- Table structure for table `picinfo`
--

CREATE TABLE `picinfo` (
  `P_ID` tinyint(4) NOT NULL,
  `P_name` varchar(50) NOT NULL,
  `I_ID` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `picinfo`
--

INSERT INTO `picinfo` (`P_ID`, `P_name`, `I_ID`) VALUES
(1, 'TAR_6372.jpg', 4),
(2, 'TAR_6487.jpg', 4),
(3, 'images.jpg', 5),
(4, 'images (1).jpg', 5),
(5, '3bb-flashfly.jpg', 6),
(6, 'ดาวน์โหลด.jpg', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`I_ID`);

--
-- Indexes for table `picinfo`
--
ALTER TABLE `picinfo`
  ADD PRIMARY KEY (`P_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `I_ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `picinfo`
--
ALTER TABLE `picinfo`
  MODIFY `P_ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
