-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2019 at 12:20 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
CREATE TABLE IF NOT EXISTS `complaints` (
  `reference` varchar(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `type` varchar(10) NOT NULL,
  `company` varchar(40) NOT NULL,
  `complaint` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`reference`, `Name`, `type`, `company`, `complaint`) VALUES
('LPG1', 'sharma.shaksham01@gmail.com', 'public', 'TATA BIRLA', 'Refund amount not received after policy withdraw.'),
('LPG1', 'rakshitsinha40@gmail.com', 'public', 'reliance', 'poor quality network.'),
('LPG2', 'rakshitsinha40@gmail.com', 'public', 'jio', 'NO NETWORK'),
('LPG3', 'rakshitsinha40@gmail.com', 'public', 'TATA BIRLA', 'no communication with staff'),
('LPG1', 'sharma.shaksham01@gmail.com', 'public', 'Jio', 'Network Issue');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Name` varchar(40) NOT NULL,
  `Gender` varchar(11) NOT NULL,
  `Address` text NOT NULL,
  `Country` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `PhoneNumber` varchar(11) DEFAULT NULL,
  `MobileNumber` varchar(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Ex` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Name`, `Gender`, `Address`, `Country`, `State`, `Pincode`, `PhoneNumber`, `MobileNumber`, `Email`, `Ex`) VALUES
('KRISHNA', 'male', 'NEAR TAGORE ACADEMY SCHOO', 'India', 'Haryana', 121004, '', '8860777221', 'sharma.shaksham01@gmail.com', 'no'),
('KRISHNA', 'male', 'NEAR TAGORE ACADEMY SCHOO', 'India', 'Haryana', 121004, '0112345678', '8860777221', 'sharma.shaksham01@gmail.com', 'yes'),
('KRISHNA', 'male', 'NEAR TAGORE ACADEMY SCHOO', 'India', 'Haryana', 121004, '0112345678', '8860777221', 'sharma.shaksham01@gmail.com', 'yes'),
('KRISHNA', 'male', 'NEAR TAGORE ACADEMY SCHOO', 'India', 'Haryana', 121004, '0112345678', '8860777221', 'sharma.shaksham01@gmail.com', 'yes'),
('KRISHNA', 'male', 'NEAR TAGORE ACADEMY SCHOO', 'India', 'Haryana', 121004, '', '8860777221', 'sharma.shaksham01@gmail.com', 'no'),
('Jivjot Singh', 'male', 'VIT University', 'India', 'Tamil Nadu', 632014, '', '8860777221', 'jsgmail.com', 'no'),
('Rakshit Sinha', 'male', 'vit', 'India', 'Tamil Nadu', 632007, '', '8368039128', 'rakshitsinha40@gmail.com', 'no'),
('Saksham Sharma', 'male', 'NEAR TAGORE ACADEMY SCHOO', 'India', 'Haryana', 121004, '', '8860777221', 'sharma.shaksham01@gmail.com', 'no'),
('arun', 'male', '', 'India', 'Delhi', 121004, '', '9003344209', 'royvinay86@gmail.com', 'yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
