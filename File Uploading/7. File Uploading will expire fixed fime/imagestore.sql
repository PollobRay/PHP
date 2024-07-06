-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2016 at 10:43 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imagestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `animaldata`
--

CREATE TABLE IF NOT EXISTS `animaldata` (
  `ano` int(5) NOT NULL AUTO_INCREMENT,
  `aname` varchar(200) NOT NULL,
  `adetails` text NOT NULL,
  `aphoto` blob NOT NULL,
  `file_type` varchar(15) NOT NULL,
  `file_size` int(15) NOT NULL,
  `submission_date` datetime NOT NULL,
  PRIMARY KEY (`ano`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT=' Animal Information Table' AUTO_INCREMENT=50 ;

--
-- Dumping data for table `animaldata`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
