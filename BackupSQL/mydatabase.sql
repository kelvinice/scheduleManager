-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 07:07 PM
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
-- Table structure for table `msrequest`
--

CREATE TABLE `msrequest` (
  `ScheduleOwner` varchar(255) NOT NULL,
  `ScheduleCoOwner` varchar(255) NOT NULL,
  `Scheduleld` int(255) NOT NULL,
  `ScheduleDate` date NOT NULL,
  `Note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msrequest`
--

INSERT INTO `msrequest` (`ScheduleOwner`, `ScheduleCoOwner`, `Scheduleld`, `ScheduleDate`, `Note`) VALUES
('kelvinices@gmail.com', 'kelvinices@gmail.com', 3, '2018-05-20', 'dassda'),
('kelvinices@gmail.com', 'kelvinices@gmail.com', 4, '2018-05-27', 'sdasda'),
('mar@mar.com', 'kelvinices@gmail.com', 7, '2018-05-19', 'apaaja'),
('', 'kelvinices@gmail.com', 8, '1970-01-01', ''),
('', 'kelvinices@gmail.com', 9, '1970-01-01', ''),
('', 'kelvinices@gmail.com', 10, '1970-01-01', ''),
('', 'kelvinices@gmail.com', 11, '1970-01-01', ''),
('', 'kelvinices@gmail.com', 12, '1970-01-01', ''),
('', 'kelvinices@gmail.com', 13, '1970-01-01', ''),
('', 'kelvinices@gmail.com', 14, '1970-01-01', ''),
('', 'kelvinices@gmail.com', 15, '1970-01-01', ''),
('', 'kelvinices@gmail.com', 16, '1970-01-01', ''),
('', 'kelvinices@gmail.com', 17, '1970-01-01', ''),
('', 'kelvinices@gmail.com', 18, '1970-01-01', ''),
('', 'kelvinices@gmail.com', 19, '1970-01-01', ''),
('', 'kelvinices@gmail.com', 20, '1970-01-01', ''),
('', 'kelvinices@gmail.com', 21, '1970-01-01', ''),
('', 'kelvinices@gmail.com', 22, '1970-01-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `msschedule`
--

CREATE TABLE `msschedule` (
  `ScheduleOwner` varchar(255) NOT NULL,
  `ScheduleCoOwner` varchar(255) DEFAULT NULL,
  `ScheduleId` int(15) NOT NULL,
  `ScheduleDate` date NOT NULL,
  `Note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msschedule`
--

INSERT INTO `msschedule` (`ScheduleOwner`, `ScheduleCoOwner`, `ScheduleId`, `ScheduleDate`, `Note`) VALUES
('kelvinices@gmail.com', 'kelvinices@gmail.com', 2, '2018-05-18', 'adssdasdasda'),
('kelvinices@gmail.com', 'kelvinices@gmail.com', 3, '2018-05-12', 'test masukin'),
('mar@mar.com', 'kelvinices@gmail.com', 4, '2018-05-17', 'test masukin'),
('mar@mar.com', 'kelvinices@gmail.com', 5, '2018-05-11', 'test masukin'),
('kelvinices@gmail.com', 'kelvinices@gmail.com', 6, '2018-05-03', 'basag'),
('mar@mar.com', 'kelvinices@gmail.com', 8, '2018-05-09', 'test masukin'),
('mar@mar.com', 'kelvinices@gmail.com', 9, '2018-05-09', 'test masukin'),
('mar@mar.com', 'kelvinices@gmail.com', 10, '2018-05-09', 'busug'),
('kelvinices@gmail.com', 'kelvinices@gmail.com', 11, '2018-05-19', 'apaaja'),
('kelvinices@gmail.com', 'kelvinices@gmail.com', 12, '2018-05-13', 'harininote'),
('admin@admin.com', 'kelvinices@gmail.com', 13, '2018-05-11', 'hai');

-- --------------------------------------------------------

--
-- Table structure for table `msuser`
--

CREATE TABLE `msuser` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ProfilePicture` varchar(255) DEFAULT NULL,
  `Role` varchar(30) NOT NULL,
  `Dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msuser`
--

INSERT INTO `msuser` (`Username`, `Password`, `Email`, `ProfilePicture`, `Role`, `Dob`) VALUES
('AtsukoMaeda', 'ats', 'achan@gmail.com', 'achan@gmail.com.jpg', 'Member', '2018-05-11'),
('admin', 'adm', 'admin@admin.com', 'admin@admin.com.png', 'Member', '2018-05-02'),
('ajax', 'aja', 'ajax@a.com', 'ajax@a.com.png', 'Member', '2018-05-11'),
('kelvinice', 'ice', 'kelvinices@gmail.com', 'kelvinices@gmail.com.jpg', 'Admin', '2018-05-18'),
('user', 'mar', 'mar@mar.com', 'mar@mar.com.png', 'Member', '2018-05-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msrequest`
--
ALTER TABLE `msrequest`
  ADD PRIMARY KEY (`Scheduleld`);

--
-- Indexes for table `msschedule`
--
ALTER TABLE `msschedule`
  ADD PRIMARY KEY (`ScheduleId`);

--
-- Indexes for table `msuser`
--
ALTER TABLE `msuser`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msrequest`
--
ALTER TABLE `msrequest`
  MODIFY `Scheduleld` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `msschedule`
--
ALTER TABLE `msschedule`
  MODIFY `ScheduleId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
