-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2018 at 06:09 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ebanking`
--
CREATE DATABASE IF NOT EXISTS `ebanking` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ebanking`;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `Last_name` text NOT NULL,
  `email` text NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `password` text NOT NULL,
  `home_no` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` text NOT NULL,
  `ph_no` int(11) NOT NULL,
  `mob_no` int(11) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`cust_id`, `first_name`, `Last_name`, `email`, `birthdate`, `age`, `password`, `home_no`, `street`, `city`, `ph_no`, `mob_no`) VALUES
(1, '', '', '', '0000-00-00', 17, '', 'tcyc', 'dfrfgr', '', 2147483647, 2147483647),
(2, '', '', '', '2018-01-01', 17, '', 'tcyc', 'dfrfgr', '', 2147483647, 2147483647),
(3, '', '', '', '2018-01-11', 18, '', 'dfewfer', 'vfvfver', 'jharkhand', 2147483647, 2147483647),
(4, 'rajeev', 'ranjan', 'rranja11n@gmail.com', '2018-01-02', 20, '', 'dcdfvfv', 'd df f  ', 'bihar', 2147483647, 2147483647),
(5, 'rajeev', 'ranjan', 'sdwedf@gmail.com', '2018-01-02', 21, '1234567890', 'dscfvfgb', 'fgfbgfb', 'jharkhand', 1234567890, 1234567890);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
