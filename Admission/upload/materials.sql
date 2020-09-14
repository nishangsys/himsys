-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2017 at 04:40 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `biakahc_ebiaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `floc` varchar(500) NOT NULL,
  `prog` varchar(200) NOT NULL,
  `fdatein` varchar(23) NOT NULL,
  `class` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `year_id` varchar(20) NOT NULL,
  `allow` varchar(400) NOT NULL,
  `title` varchar(90) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`file_id`, `floc`, `prog`, `fdatein`, `class`, `fname`, `year_id`, `allow`, `title`) VALUES
(3, 'staffs (2).csv', 'BANKING AND FINANCE', '2017-05-09 12:43:57', 200, '', '2016/2017', '2', 'time table'),
(4, 'simple_attendance_record_system.zip', 'BSC MEDICAL LABORATORY', '2017-05-09 12:51:51', 300, '', '2016/2017', '2', 'good news'),
(5, 'tubacouncil (3).docx', 'ENROLLED NURSING', '2017-05-09 12:55:03', 300, '', '2016/2017', '2', 'time table second smester'),
(6, 'tubacouncil.docx', 'ENROLLED NURSING', '2017-05-09 13:17:43', 300, '', '2016/2017', '2', 'my assignments 12'),
(7, '23_MS146 Users Manual.PDF', 'ENROLLED NURSING', '2017-05-09 13:35:30', 300, '', '2016/2017', '2', 'time table first smester');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
