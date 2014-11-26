-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2014 at 05:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hmwk2147`
--

-- --------------------------------------------------------

--
-- Table structure for table `hw8`
--

CREATE TABLE IF NOT EXISTS `hw8` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `pword` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `prob` varchar(2) DEFAULT NULL,
  `hot` varchar(3) NOT NULL,
  `smart` varchar(3) NOT NULL,
  `beers` varchar(8) NOT NULL,
  `cons` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hw8`
--

INSERT INTO `hw8` (`id`, `name`, `uname`, `pword`, `email`, `prob`, `hot`, `smart`, `beers`, `cons`) VALUES
(1, 'Truong-An Do', 'tado1', '12345', 'tado1@asu.edu', '', 'no', 'yes', 'heineken', 'I''m Super Smart'),
(4, 'Dennis Anderson', 'denade', 'redbull', 'dla@dla34567.com', 'on', 'yes', 'yes', 'heineken', 'I am the best!'),
(5, 'Mark Twayne', 'mtwain', '12345', 'mark.twayne@gmail.com', 'on', 'yes', 'yes', 'becks', 'I wrote that book!'),
(6, 'Andrew Blocklin', 'ABlocklin', '12345', 'andrewaroundtheblockin@gmail.com', 'on', 'yes', 'no', 'pbr', 'Im that guy!'),
(7, 'Danielle Marque', 'DMarque', '12345', 'DaniellyMar@gmail.com', 'on', 'yes', 'no', 'coors', 'Im the pretty one!');
--
-- Database: `tado1`
--

-- --------------------------------------------------------

--
-- Table structure for table `perproj`
--

CREATE TABLE IF NOT EXISTS `perproj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `zip` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `perproj`
--

INSERT INTO `perproj` (`id`, `firstName`, `lastName`, `city`, `state`, `zip`, `email`) VALUES
(8, 'Truong-An', 'Do', 'Mesa', 'AZ', '85201', 'tado1@asu.edu'),
(9, 'Andrew', 'Mark', 'Tempe', 'AZ', '85281', 'test@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
