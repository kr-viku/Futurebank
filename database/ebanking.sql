-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2018 at 03:57 AM
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
-- Table structure for table `balance`
--

CREATE TABLE IF NOT EXISTS `balance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acountno` text NOT NULL,
  `amount` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`id`, `acountno`, `amount`) VALUES
(1, '1193400389', '1500'),
(2, '599432712', '8500');

-- --------------------------------------------------------

--
-- Table structure for table `create_acc`
--

CREATE TABLE IF NOT EXISTS `create_acc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accountno` text NOT NULL,
  `date` text NOT NULL,
  `amount` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `create_acc`
--

INSERT INTO `create_acc` (`id`, `accountno`, `date`, `amount`) VALUES
(1, '1193400389', '29-11-2018 22:41:16', '5000'),
(2, '599432712', '29-11-2018 22:44:28', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `Last_name` text NOT NULL,
  `email` text NOT NULL,
  `birthdate` text NOT NULL,
  `age` text NOT NULL,
  `password` text NOT NULL,
  `home_no` text NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `ph_no` text NOT NULL,
  `mob_no` text NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`cust_id`, `first_name`, `Last_name`, `email`, `birthdate`, `age`, `password`, `home_no`, `street`, `city`, `ph_no`, `mob_no`) VALUES
(1, 'Raj', 'Ranjan', 'rranjangrd@gmail.com', '1998', '21', 'Abcd@1234', 'rrrr', 'kkkk', 'jharkhand', '9931190205', '9430363635'),
(2, 'rajeev', 'ranjan', 'rr@gmail.com', '1999', '14', 'Abcd@1234', 'burdwan', 'golapbagh', 'kolkata', '9430363635', '9064326834');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `f_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Email`, `f_message`) VALUES
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accountno` text NOT NULL,
  `tar_account` text NOT NULL,
  `transferamt` text NOT NULL,
  `rembalance` text NOT NULL,
  `balance` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `accountno`, `tar_account`, `transferamt`, `rembalance`, `balance`, `date`) VALUES
(1, '1193400389', '599432712', '1000', '4000', '6000', '29-11-2018 22:46:37'),
(2, '1193400389', '599432712', '500', '3500', '6500', '29-11-2018 22:50:15'),
(3, '1193400389', '599432712', '500', '3000', '7000', '29-11-2018 22:52:32'),
(4, '1193400389', '599432712', '500', '2500', '7500', '29-11-2018 22:55:51'),
(5, '1193400389', '599432712', '500', '2000', '8000', '29-11-2018 22:57:11'),
(6, '1193400389', '599432712', '500', '1500', '8500', '29-11-2018 23:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE IF NOT EXISTS `transfer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account` text NOT NULL,
  `tar_account` text NOT NULL,
  `amount` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `account`, `tar_account`, `amount`, `date`) VALUES
(1, '1193400389', '599432712', '1000', '29-11-2018 22:46:37'),
(2, '1193400389', '599432712', '500', '29-11-2018 22:50:15'),
(3, '1193400389', '599432712', '500', '29-11-2018 22:52:32'),
(4, '1193400389', '599432712', '500', '29-11-2018 22:55:51'),
(5, '1193400389', '599432712', '500', '29-11-2018 22:57:11'),
(6, '1193400389', '599432712', '500', '29-11-2018 23:00:46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
