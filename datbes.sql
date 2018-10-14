-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 05:30 PM
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
-- Database: `datbes`
--

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `Cerita` varchar(20) NOT NULL,
  `Gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ta6`
--

CREATE TABLE `ta6` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `NIM` int(20) NOT NULL,
  `Kelas` enum('D3MI41-01','D3MI41-02','D3MI41-03','D3MI41-04') NOT NULL,
  `Jenis_Kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `Hobbi` varchar(20) NOT NULL,
  `Fakultas` enum('FIT','FKB','FEB','INFORMATIKA','FIF','FIK') NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ta6`
--

INSERT INTO `ta6` (`Username`, `Password`, `Nama`, `NIM`, `Kelas`, `Jenis_Kelamin`, `Hobbi`, `Fakultas`, `Alamat`) VALUES
('sriharyatini', 'sembilanjuni', 'sharyatini', 4092, 'D3MI41-02', 'Perempuan', 'Bermain', 'FKB', 'Ciparay'),
('sri', '999', 'sriharyatini', 7888, 'D3MI41-02', 'Perempuan', 'Berenang', 'FKB', 'Bandung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ta6`
--
ALTER TABLE `ta6`
  ADD PRIMARY KEY (`Nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
