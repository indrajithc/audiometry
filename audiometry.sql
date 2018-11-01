-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2018 at 10:57 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `audiometry`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_audiogram`
--

CREATE TABLE IF NOT EXISTS `t_audiogram` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pta` varchar(20) NOT NULL,
  `audiogram` blob NOT NULL,
  PRIMARY KEY (`aid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `t_audiogram`
--


-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--

CREATE TABLE IF NOT EXISTS `t_login` (
  `uid` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_login`
--

INSERT INTO `t_login` (`uid`, `email`, `password`) VALUES
(0, 'fgh@dfgh.ghj', 'd8578edf8458ce0'),
(0, 'art@gmail.com', '733d7be2196ff70'),
(0, 'art@gmail.com', 'acc4cfc07736957');

-- --------------------------------------------------------

--
-- Table structure for table `t_pta`
--

CREATE TABLE IF NOT EXISTS `t_pta` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pta` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `t_pta`
--


-- --------------------------------------------------------

--
-- Table structure for table `t_register`
--

CREATE TABLE IF NOT EXISTS `t_register` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `t_register`
--

INSERT INTO `t_register` (`uid`, `name`, `dob`, `gender`, `address`, `city`, `state`, `email`, `password`) VALUES
(1, 'fghj', '2018-10-23', 'Female', 'gh', 'ghjk', 'Karnataka', 'fgh@dfgh.ghj', 'd8578edf8458ce0'),
(2, 'anju', '2018-11-13', 'Female', 'adf', 'ghj', 'Jharkhandr', 'art@gmail.com', '733d7be2196ff70'),
(3, 'anju', '2018-11-13', 'Female', 'adf', 'ghj', 'Jharkhandr', 'art@gmail.com', 'acc4cfc07736957');

-- --------------------------------------------------------

--
-- Table structure for table `t_test`
--

CREATE TABLE IF NOT EXISTS `t_test` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `125Hz` varchar(20) NOT NULL,
  `250Hz` varchar(20) NOT NULL,
  `500Hz` varchar(20) NOT NULL,
  `1KHz` varchar(20) NOT NULL,
  `2KHz` varchar(20) NOT NULL,
  `4KHz` varchar(20) NOT NULL,
  `8KHz` varchar(20) NOT NULL,
  `ear` varchar(20) NOT NULL,
  `output` varchar(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`test_id`),
  KEY `u_id` (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `t_test`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
