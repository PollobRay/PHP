-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2016 at 06:33 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mbstu`
--

-- --------------------------------------------------------

--
-- Table structure for table `cse`
--

CREATE TABLE IF NOT EXISTS `cse` (
  `serial` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45459 ;

--
-- Dumping data for table `cse`
--

INSERT INTO `cse` (`serial`, `name`) VALUES
(45454, '2016-06-12 15:56:11'),
(45455, 'karim'),
(45457, 'Rahim'),
(45458, 'Rahim');

-- --------------------------------------------------------

--
-- Table structure for table `ict`
--

CREATE TABLE IF NOT EXISTS `ict` (
  `st_name` varchar(20) NOT NULL,
  `st_id` varchar(7) NOT NULL,
  `st_age` int(3) NOT NULL,
  `st_email` varchar(25) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ict`
--

INSERT INTO `ict` (`st_name`, `st_id`, `st_age`, `st_email`) VALUES
('Pollob Ray', '194000', 24, 'pollog@gmial.com');

-- --------------------------------------------------------

--
-- Table structure for table `te`
--

CREATE TABLE IF NOT EXISTS `te` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `st_id` varchar(10) NOT NULL,
  `st_name` varchar(20) NOT NULL,
  `st_email` varchar(30) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `te`
--

INSERT INTO `te` (`serial`, `st_id`, `st_name`, `st_email`) VALUES
(1, '194000', 'Chandra', 'pollob@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
