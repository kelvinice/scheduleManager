-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 05:13 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `msSchedule`
--

CREATE TABLE `msschedule` (
  `ScheduleOwner` varchar(255) NOT NULL,
  `ScheduleCoOwner` varchar(255) DEFAULT NULL,
  `ScheduleId` int(15) NOT NULL,
  `ScheduleDate` date NOT NULL,
  `Note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msSchedule`
--

INSERT INTO `msSchedule` (`ScheduleOwner`, `ScheduleCoOwner`, `ScheduleId`, `ScheduleDate`, `Note`) VALUES
('kelvinices@gmail.com', NULL, 1, '2018-05-15', 'cuman tes aja'),
('kelvinices@gmail.com', 'kelvinices@gmail.com', 2, '2018-05-18', 'test masukin'),
('kelvinices@gmail.com', 'kelvinices@gmail.com', 3, '2018-05-12', 'test masukin'),
('mar@mar.com', 'kelvinices@gmail.com', 4, '2018-05-17', 'test masukin'),
('mar@mar.com', 'kelvinices@gmail.com', 5, '2018-05-11', 'test masukin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msSchedule`
--
ALTER TABLE `msSchedule`
  ADD PRIMARY KEY (`ScheduleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msSchedule`
--
ALTER TABLE `msSchedule`
  MODIFY `ScheduleId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
