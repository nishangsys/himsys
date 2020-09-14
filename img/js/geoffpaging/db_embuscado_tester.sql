-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2012 at 04:56 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_embuscado_tester`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `designation` varchar(150) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `designation`, `salary`) VALUES
(1, 'Geoff', 'Pasig', 4012.75),
(2, 'Rose', 'Quzeon', 12000),
(3, 'Alan', 'Pasay City', 19000.75),
(4, 'Ronna', 'Iloilo City', 10925.75),
(5, 'Mandez', 'Pasay City', 19000.25),
(6, 'Yui', 'Pasay City', 19000.5),
(7, 'Yuna', 'Pasig City', 13550.75),
(8, 'Weiler', 'Albay City', 9000),
(9, 'Lacus', 'Cebu City', 98000),
(10, 'Manni', 'Mindoro City', 9100.75),
(11, 'Kon', 'Bohol City', 10025.75),
(12, 'Ronald', 'Mindoro City', 10100.75);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
