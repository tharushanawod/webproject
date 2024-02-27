-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 27, 2024 at 10:59 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enchanted_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Staffid` varchar(255) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Photo` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT 'avatar15.jpg',
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `Staffid`, `UserName`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Photo`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin001', 'admin@jabir001', 'Nihmath', 'Jabir', 756742490, 'mnnjabir@gmail.com', 'pro4.jpg', 'pwd12345', '2024-02-21 10:18:39'),
(2, 'Admin002', 'admin@deemath002', 'Deemath', 'Ishara', 786768882, 'deemath.ish.55@gmail.com', 'avatar15.jpg', 'pwd23456', '2024-02-21 10:24:45'),
(3, 'Admin003', 'admin@tharusha003', 'Tharusha', 'Navodh', 703938863, 'tharushanavodh@gmail.com', 'avatar15.jpg', 'pwd34567', '2024-02-21 18:02:06'),
(4, 'Admin004', 'admin@thiwanga004', 'Thiwanga', 'Liyanage', 750604148, 'thiwaliya@gmail.com', 'avatar15.jpg', 'pwd45678', '2024-02-21 18:04:19'),
(5, 'Admin005', 'uoc', 'Universityof', 'Colombo', 718113301, 'ucsc@cmb.ac.lk', 'avatar15.jpg', 'ucsc', '2024-02-21 18:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

DROP TABLE IF EXISTS `tblbooking`;
CREATE TABLE IF NOT EXISTS `tblbooking` (
  `userId` int(11) DEFAULT NULL,
  `BookingId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `EventDate` varchar(200) DEFAULT NULL,
  `EventStartingtime` varchar(200) DEFAULT NULL,
  `EventEndingtime` varchar(200) DEFAULT NULL,
  `VenueAddress` mediumtext,
  `EventType` varchar(200) DEFAULT NULL,
  `AdditionalInformation` mediumtext,
  `BookingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(200) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`BookingId`),
  KEY `userId` (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=75000014 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbleventtype`
--

DROP TABLE IF EXISTS `tbleventtype`;
CREATE TABLE IF NOT EXISTS `tbleventtype` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `EventType` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `EventType` (`EventType`(191))
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbleventtype`
--

INSERT INTO `tbleventtype` (`ID`, `EventType`, `CreationDate`) VALUES
(1, 'Anniversary', '2024-02-20 07:01:39'),
(2, 'Birthday Party', '2024-02-20 07:02:34'),
(3, 'Charity', '2024-02-20 07:02:43'),
(4, 'Cocktail', '2024-02-20 07:03:00'),
(5, 'College', '2024-02-20 07:03:11'),
(6, 'Concert', '2024-02-20 07:03:35'),
(7, 'Engagement', '2024-02-20 07:03:51'),
(8, 'Get Together', '2024-02-20 07:04:04'),
(9, 'Religious', '2024-02-20 07:05:27'),
(10, 'Wedding', '2024-02-20 07:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

DROP TABLE IF EXISTS `tblusers`;
CREATE TABLE IF NOT EXISTS `tblusers` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text,
  `lname` text,
  `email` varchar(255) DEFAULT NULL,
  `mobileNo` bigint(20) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=1012 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userId`, `fname`, `lname`, `email`, `mobileNo`, `password`) VALUES
(1001, 'Amar', 'Abdhulla', 'amarlareef01@gmail.com', 767839096, '77778888'),
(1002, 'Kokila', 'Disanayaka', 'koki@gmail.com', 712345678, 'pass1234'),
(1003, 'Jayathu', 'Sanka', 'jayaaas75@gmail.com', 702238863, 'secure12'),
(1004, 'Alice', 'Smith', 'alice.smith@example.com', 755512345, 'mypass78'),
(1005, 'Bob', 'Johnson', 'bob.johnson@example.com', 799988777, 'pass5678'),
(1006, 'Eva', 'Miller', 'eva.miller@example.com', 711122233, 'evapass1'),
(1007, 'Mike', 'Davis', 'mike.davis@example.com', 744455666, 'miked789'),
(1008, 'Sarah', 'Clark', 'sarah.clark@example.com', 777888999, 'sarah1234'),
(1009, 'Tom', 'Anderson', 'tom.anderson@example.com', 733322211, 'tompass5'),
(1010, 'Chris', 'Brown', 'chris.brown@example.com', 722233444, 'chris8910');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
