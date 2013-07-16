-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 16, 2013 at 11:54 AM
-- Server version: 5.5.30
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `device_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE IF NOT EXISTS `devices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `device_type_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `device_name` varchar(230) NOT NULL,
  `serial_number` varchar(230) NOT NULL,
  `imei_number` varchar(255) NOT NULL,
  `location_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `purchase _date` date NOT NULL,
  `warranty_date` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `device_type_id`, `employee_id`, `device_name`, `serial_number`, `imei_number`, `location_id`, `comment`, `purchase _date`, `warranty_date`, `created`, `modified`) VALUES
(3, 1, 1, 'Apple iPhone 32GB Black', 'C39JL12JDTWG', '013351007004460', 1, '', '2012-11-06', '2013-11-05', '2013-03-25 23:48:21', '2013-03-25 23:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `device_types`
--

CREATE TABLE IF NOT EXISTS `device_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(95) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `device_types`
--

INSERT INTO `device_types` (`id`, `name`) VALUES
(1, 'Phone/Tablet'),
(2, 'Camera'),
(3, 'Laptop'),
(4, 'Memory Card'),
(5, 'Battery'),
(6, 'Charger'),
(7, 'Tripod'),
(8, 'Lens'),
(9, 'HDD'),
(10, 'Router'),
(11, 'Switch'),
(12, 'Modem'),
(13, 'Adapters');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(230) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`) VALUES
(1, 'Varun Krishnan'),
(2, 'Praveen Kumar'),
(3, 'Siraj Hassan Mohideen'),
(4, 'Srivatsan'),
(5, 'Ayyappan.J'),
(6, 'Dhruv Bhutani'),
(7, 'Vignesh M'),
(8, 'Bharadwaj C'),
(9, 'Shilpa Dhamija'),
(10, 'Yuvaraj Karthick');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`) VALUES
(1, 'Chennai Adyar'),
(2, 'Chennai OMR');
