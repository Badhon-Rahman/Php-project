-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 07:34 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgrade_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `aname` varchar(20) NOT NULL,
  `apass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`aname`, `apass`) VALUES
('zahid', 'z123'),
('akash', 'a123');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `class` varchar(10) NOT NULL,
  `total_amount` varchar(10) NOT NULL,
  `paid` varchar(10) NOT NULL,
  `due` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `s_name`, `student_id`, `class`, `total_amount`, `paid`, `due`) VALUES
(4, 'dsd', '', 'ds', 'ds', 'ds', 'ds'),
(5, 'akash', '12345', '4', '600', '599', '1');

-- --------------------------------------------------------

--
-- Table structure for table `s_gradesub`
--

CREATE TABLE `s_gradesub` (
  `Id` varchar(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `Bangla` varchar(100) NOT NULL,
  `English` varchar(100) NOT NULL,
  `Math` varchar(100) NOT NULL,
  `Religion` varchar(100) NOT NULL,
  `Physics` varchar(100) NOT NULL,
  `Chemistry` varchar(100) NOT NULL,
  `Biology` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_gradesub`
--

INSERT INTO `s_gradesub` (`Id`, `student_id`, `Bangla`, `English`, `Math`, `Religion`, `Physics`, `Chemistry`, `Biology`) VALUES
('20', '123', '56', '67', '67', 'muslim', '789', '78', '78'),
('23', '12345', '34', '34', '34', 'muslim', '56', '42', '43'),
('255', '12345', '45', '45', '45', 'muslim', '45', '45', '45');

-- --------------------------------------------------------

--
-- Table structure for table `s_registration`
--

CREATE TABLE `s_registration` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `DOB` varchar(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_registration`
--

INSERT INTO `s_registration` (`first_name`, `last_name`, `student_id`, `class`, `password`, `DOB`, `gender`, `phone`) VALUES
('Nadim', 'Anamul', 123456, 8, 'Thegame#159159', '9/5/1993', 'Male', '01716406450'),
('akash', 'sarkar', 14666, 5, '12345', '18/9/1964', 'Male', '54354345343'),
('akash', 'batash', 12345, 4, '123456', '15/6/1967', 'Male', '01754610871'),
('tgf', 'ygyi', 11111, 2, '11111', '16/4/1958', 'Male', '01775456555');

-- --------------------------------------------------------

--
-- Table structure for table `tlogin`
--

CREATE TABLE `tlogin` (
  `T_Name` varchar(100) NOT NULL,
  `T_Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tlogin`
--

INSERT INTO `tlogin` (`T_Name`, `T_Pass`) VALUES
('Bapin', 'bapin123'),
('Akash', '54321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_gradesub`
--
ALTER TABLE `s_gradesub`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
