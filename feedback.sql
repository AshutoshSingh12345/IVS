-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 05:46 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivs`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `Appreciation` varchar(120) NOT NULL,
  `Flexibility` varchar(110) NOT NULL,
  `Attitude` varchar(50) NOT NULL,
  `Pro_Active` varchar(50) NOT NULL,
  `Responsibility` varchar(50) NOT NULL,
  `Time` int(10) NOT NULL,
  `Ownership` varchar(100) NOT NULL,
  `Escalation` varchar(100) NOT NULL,
  `Non_Productivity` varchar(100) NOT NULL,
  `Non_Pro_Active` varchar(100) NOT NULL,
  `Non_On_Time` varchar(100) NOT NULL,
  `Followup_Required` varchar(100) NOT NULL,
  `Non_Flexibility` varchar(100) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(1) NOT NULL,
  `IsRead` int(1) NOT NULL,
  `empid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Appreciation`, `Flexibility`, `Attitude`, `Pro_Active`, `Responsibility`, `Time`, `Ownership`, `Escalation`, `Non_Productivity`, `Non_Pro_Active`, `Non_On_Time`, `Followup_Required`, `Non_Flexibility`, `PostingDate`, `Status`, `IsRead`, `empid`) VALUES
(1, '1', '1', '1', '1', '1', 1, '0', '1', '1', '0', '0', '0', '0', '2018-01-27 12:23:54', 0, 0, 721259);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
