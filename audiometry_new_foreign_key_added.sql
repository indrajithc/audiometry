-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2018 at 12:16 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audiometry`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_audiogram`
--

CREATE TABLE `t_audiogram` (
  `aid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pta` varchar(20) NOT NULL,
  `audiogram` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--

CREATE TABLE `t_login` (
  `uid` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_login`
--

INSERT INTO `t_login` (`uid`, `email`, `password`) VALUES
(1, 'mail@mail.com', '666');

-- --------------------------------------------------------

--
-- Table structure for table `t_pta`
--

CREATE TABLE `t_pta` (
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pta` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_register`
--

CREATE TABLE `t_register` (
  `uid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `t_test` (
  `test_id` int(11) NOT NULL,
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
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_audiogram`
--
ALTER TABLE `t_audiogram`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `t_pta`
--
ALTER TABLE `t_pta`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `t_register`
--
ALTER TABLE `t_register`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `t_test`
--
ALTER TABLE `t_test`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_audiogram`
--
ALTER TABLE `t_audiogram`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_pta`
--
ALTER TABLE `t_pta`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_register`
--
ALTER TABLE `t_register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_test`
--
ALTER TABLE `t_test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
