-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Bulan Mei 2018 pada 14.53
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5753235_mydatabase`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `msrequest`
--

CREATE TABLE `msrequest` (
  `ScheduleOwner` varchar(255) NOT NULL,
  `ScheduleCoOwner` varchar(255) NOT NULL,
  `Scheduleld` int(255) NOT NULL,
  `ScheduleDate` date NOT NULL,
  `Note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `msrequest`
--

INSERT INTO `msrequest` (`ScheduleOwner`, `ScheduleCoOwner`, `Scheduleld`, `ScheduleDate`, `Note`) VALUES
('mar@mar.com', 'kelvinices@gmail.com', 1, '2018-05-09', 'test masukin'),
('cobak@gmail.com', 'cobak@gmail.com', 3, '2018-05-15', 'adsasd'),
('kelvinices@gmail.com', 'kelvinices@gmail.com', 4, '2018-05-04', 'Zhsbxhxh'),
('kelvinices@gmail.com', 'popok@op.com', 6, '2018-05-01', 'bobo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `msschedule`
--

CREATE TABLE `msschedule` (
  `ScheduleOwner` varchar(255) NOT NULL,
  `ScheduleCoOwner` varchar(255) DEFAULT NULL,
  `ScheduleId` int(15) NOT NULL,
  `ScheduleDate` date NOT NULL,
  `Note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `msschedule`
--

INSERT INTO `msschedule` (`ScheduleOwner`, `ScheduleCoOwner`, `ScheduleId`, `ScheduleDate`, `Note`) VALUES
('kelvinices@gmail.com', NULL, 1, '2018-05-15', 'cuman tes aja'),
('kelvinices@gmail.com', 'kelvinices@gmail.com', 2, '2018-05-18', 'test masukin'),
('kelvinices@gmail.com', 'kelvinices@gmail.com', 3, '2018-05-12', 'test masukin'),
('mar@mar.com', 'kelvinices@gmail.com', 4, '2018-05-17', 'test masukin'),
('mar@mar.com', 'kelvinices@gmail.com', 5, '2018-05-11', 'test masukin'),
('kelvinices@gmail.com', 'kelvinices@gmail.com', 6, '2018-05-03', 'test masukin'),
('cobak@gmail.com', 'cobak@gmail.com', 7, '2018-05-14', 'hai'),
('popok@op.com', 'kelvinices@gmail.com', 8, '2018-05-15', 'Makan di 76'),
('kelvinices@gmail.com', 'admin@admin.com', 9, '2018-05-23', 'binus festival');

-- --------------------------------------------------------

--
-- Struktur dari tabel `msuser`
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
-- Dumping data untuk tabel `msuser`
--

INSERT INTO `msuser` (`Username`, `Password`, `Email`, `ProfilePicture`, `Role`, `Dob`) VALUES
('admin', 'admin', 'admin@admin.com', 'admin@admin.com.png', 'Admin', '2018-05-02'),
('asd', 'asd', 'asd@asd.com', 'asd@asd.com.png', 'Member', '2018-05-01'),
('coba', 'coba', 'coba@gmail.com', 'coba@gmail.com.jpg', 'Member', '2018-05-10'),
('cobab', 'cobab', 'cobab@gmail.com', 'cobab@gmail.com.jpg', 'Member', '2018-05-11'),
('cobah', 'cobah', 'cobah@gmail.com', 'cobah@gmail.com.jpg', 'Member', '2018-05-11'),
('cobaj', 'cobaj', 'cobaj@gmail.com', 'cobaj@gmail.com.png', 'Member', '2018-05-11'),
('cobak', 'cobak', 'cobak@gmail.com', 'cobak@gmail.com.png', 'Member', '2018-05-02'),
('cobas', 'cobas', 'cobas@gmail.com', 'cobas@gmail.com.jpg', 'Member', '2018-05-09'),
('jaga', 'jaga', 'jaga@gmail.com', 'jaga@gmail.com.png', 'Member', '2018-05-16'),
('kelvinice', 'ice', 'kelvinices@gmail.com', 'kelvinices@gmail.com.jpg', 'Admin', '2018-05-18'),
('user', 'mar', 'mar@mar.com', 'mar@mar.com.png', 'Member', '2018-05-11'),
('member', 'member', 'member@member.com', 'member@member.com.png', 'Member', '2018-05-17'),
('popok', 'popok', 'popok@op.com', 'popok@op.com.jpg', 'Member', '2018-05-01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `msrequest`
--
ALTER TABLE `msrequest`
  ADD PRIMARY KEY (`Scheduleld`);

--
-- Indeks untuk tabel `msschedule`
--
ALTER TABLE `msschedule`
  ADD PRIMARY KEY (`ScheduleId`);

--
-- Indeks untuk tabel `msuser`
--
ALTER TABLE `msuser`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `msrequest`
--
ALTER TABLE `msrequest`
  MODIFY `Scheduleld` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `msschedule`
--
ALTER TABLE `msschedule`
  MODIFY `ScheduleId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
