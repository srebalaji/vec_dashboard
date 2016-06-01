-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2015 at 04:38 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vec`
--

-- --------------------------------------------------------

--
-- Table structure for table `pt_exams`
--

CREATE TABLE IF NOT EXISTS `mech_pt_exams` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `rollno` int(7) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `marks` varchar(10) NOT NULL,
  `marks2` varchar(10) NOT NULL,
  `marks3` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rollno_subject` (`rollno`,`subject`),
  KEY `rollno` (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pt_exams`
--
ALTER TABLE `mech_pt_exams`
  ADD CONSTRAINT `pt_exams` FOREIGN KEY (`rollno`) REFERENCES `mech_master` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
