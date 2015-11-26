-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2015 at 10:10 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `psoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `coverage1`
--

CREATE TABLE IF NOT EXISTS `coverage1` (
  `club_id` varchar(20) NOT NULL,
  `eventName` varchar(50) NOT NULL DEFAULT '-',
  `venue` varchar(50) NOT NULL DEFAULT '-',
  `startDate` date NOT NULL,
  `startTime1` varchar(50) NOT NULL,
  `endTime1` varchar(50) NOT NULL,
  `endDate` date DEFAULT NULL,
  `startTime` varchar(50) DEFAULT NULL,
  `endTime` varchar(50) DEFAULT NULL,
  `video` varchar(50) DEFAULT 'NO',
  `payment` varchar(50) DEFAULT 'Corpus',
  `contactName` varchar(50) NOT NULL,
  `number` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `covered` int(2) NOT NULL DEFAULT '0',
  `coverageIncharge` varchar(50) NOT NULL DEFAULT '-',
  `phNumber` bigint(10) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Being Edited',
  `hub` varchar(50) DEFAULT '-',
  `nick` varchar(50) DEFAULT '-',
  `folder` varchar(50) NOT NULL DEFAULT '-',
`eventId` int(8) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coverage1`
--

INSERT INTO `coverage1` (`club_id`, `eventName`, `venue`, `startDate`, `startTime1`, `endTime1`, `endDate`, `startTime`, `endTime`, `video`, `payment`, `contactName`, `number`, `email`, `covered`, `coverageIncharge`, `phNumber`, `status`, `hub`, `nick`, `folder`, `eventId`, `timestamp`) VALUES
('naps', 'Paper Launch', 'LH 2', '2015-10-10', '10:00:00', '19:00:00', '0000-00-00', '', '', 'YES', NULL, 'ygk', 8002224162, 'kumaryuvraj118@gmail.com', 3, 'anjanesh', 8002224162, 'Uploaded', 'Huslter''s/DC', 'iamyuvi', 'naps', 13, '2015-08-30 00:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `club_id` varchar(20) NOT NULL,
  `password` mediumtext NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`club_id`, `password`, `id`) VALUES
('danceclub', 'dance_123', 3),
('ecesoc', 'ecesoc_123', 20),
('litsoc', 'litsoc_123', 4),
('naps', 'naps_123', 2),
('psoc', 'psoc_123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coverage1`
--
ALTER TABLE `coverage1`
 ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`club_id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coverage1`
--
ALTER TABLE `coverage1`
MODIFY `eventId` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
