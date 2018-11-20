-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 11:06 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_login`
--

INSERT INTO `t_login` (`uid`, `email`, `password`) VALUES
(22, 'anju@gmail.com', '9abfae448bc00ea3214033a3086e6539'),
(7, 'f@gmail.com', 'fd2cc6c54239c40'),
(8, 'hima@gmail.com', '514b0024591fa5b'),
(9, 'fg@j.jhk', 'eea3877c54230f9'),
(10, 'gg@jk.ggh', '2e65f2f2fdaf6c6'),
(11, 'gg@hh.hh', '22c276a05aa7c90'),
(12, 'h@th.dfg', '4eae18cf9e54a0f'),
(13, 'd@gmail.com', '1c1d4df596d01da'),
(14, 's@gg.ff', '7815696ecbf1c96'),
(15, 'a@g.j', '76d80224611fc91'),
(16, 'a@g.c', '2e65f2f2fdaf6c6'),
(17, 'ad@hh.ff', '2e65f2f2fdaf6c6'),
(18, 'd@d,f', '5ec91aac30eae62'),
(19, 'a@w.k', 'a1d33d0dfec820b'),
(20, 'fara@gmail.com', 'a67d56672f2b5fb'),
(21, 'junu@gmail.com', 'b145cadb8fd87a0e664b8f10cde496dc');

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
(8, 'hima', '1996-03-01', 'Female', 'pala', 'pala', 'Kerala', 'hima@gmail.com', '514b0024591fa5b'),
(7, 'hki', '2014-06-02', 'Male', 'f', 'g', 'Orissa', 'f@gmail.com', 'fd2cc6c54239c40'),
(6, 'geetha', '2018-11-05', 'Female', 'tgn', 'ujn', 'Haryana', 'sdr@gmail.com', 'd8578edf8458ce0'),
(5, 'arya', '2018-11-07', 'Female', 'fghj', 'hjkl', 'Manipur', 'ar@gmail.com', '9ed1c7f5119e63b'),
(9, 'arta', '2018-11-06', 'Female', 'ghjk', 'tyu', 'Madya Pradesh', 'fg@j.jhk', 'eea3877c54230f9'),
(10, 'fghj', '2018-11-08', 'Female', 'ghj', 'ghj', 'Karnataka', 'gg@jk.ggh', '2e65f2f2fdaf6c6'),
(11, 'pl', '1996-08-05', 'Male', 'hj', 'j', 'Haryana', 'gg@hh.hh', '22c276a05aa7c90'),
(12, 'fg', '1990-04-05', 'Male', 'jk', 'ewr', 'Goa', 'h@th.dfg', '4eae18cf9e54a0f'),
(13, 'okm', '2010-05-05', 'Male', 'kk', 'jj', 'Jharkhandr', 'd@gmail.com', '1c1d4df596d01da'),
(14, 'lk', '2000-04-05', 'Male', 'g', 'd', 'Haryana', 's@gg.ff', '7815696ecbf1c96'),
(15, 'ok', '1999-09-08', 'Male', 'j', 'j', 'Nagaland', 'a@g.j', '76d80224611fc91'),
(16, 'ijjnn', '1999-05-08', 'Male', 'g', 'h', 'Haryana', 'a@g.c', '2e65f2f2fdaf6c6'),
(17, '123', '2018-11-01', 'Female', 'df', 'hh', 'Karnataka', 'ad@hh.ff', '2e65f2f2fdaf6c6'),
(18, 'ff', '1999-08-05', 'Male', 'gg', 'aa', 'Goa', 'd@d,f', '5ec91aac30eae62'),
(19, 'pl', '1999-06-07', 'Male', 'gg', 'as', 'Sikkim', 'a@w.k', 'a1d33d0dfec820b'),
(20, 'fara', '1991-11-11', 'Female', 'p', 't', 'Haryana', 'fara@gmail.com', 'a67d56672f2b5fb'),
(21, 'junu', '2001-02-05', 'Male', 'ju', 'nu', 'Kerala', 'junu@gmail.com', 'b145cadb8fd87a0'),
(22, 'anju', '2018-11-30', 'Female', 'tvm', 'nedumangadu', 'Kerala', 'anju@gmail.com', '9abfae448bc00ea');

-- --------------------------------------------------------

--
-- Table structure for table `t_test`
--

CREATE TABLE `t_test` (
  `testid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `date` date NOT NULL,
  `outbox` varchar(20) NOT NULL,
  `ear` varchar(20) NOT NULL,
  `125Hz` varchar(20) NOT NULL,
  `250Hz` varchar(20) NOT NULL,
  `500Hz` varchar(20) NOT NULL,
  `1KHz` varchar(20) NOT NULL,
  `2KHz` varchar(20) NOT NULL,
  `4KHz` varchar(20) NOT NULL,
  `8KHz` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_test`
--

INSERT INTO `t_test` (`testid`, `uid`, `date`, `outbox`, `ear`, `125Hz`, `250Hz`, `500Hz`, `1KHz`, `2KHz`, `4KHz`, `8KHz`) VALUES
(31, 21, '2018-11-14', 'Speaker', '', '', '', '', '', '', '', ''),
(29, 21, '2018-11-14', 'Speaker', '', '', '', '', '', '', '', ''),
(21, 22, '2018-11-12', 'Speaker', 'Right', '40', '20', '30', '', '', '', ''),
(22, 22, '2018-11-12', 'Speaker', 'Right', '40', '20', '30', '', '', '', ''),
(23, 22, '2018-11-12', 'Speaker', 'Right', '40', '20', '30', '', '', '', ''),
(24, 22, '2018-11-12', 'Headphone', 'Right', '40', '20', '30', '', '', '', ''),
(25, 22, '2018-11-12', 'Headphone', 'Right', '40', '20', '30', '', '', '', ''),
(30, 21, '2018-11-14', 'Speaker', '', '', '', '', '', '', '', ''),
(26, 21, '2018-11-12', 'Speaker', 'Left', '0', '', '', '', '', '', ''),
(27, 21, '2018-11-14', 'Speaker', 'Left', '0', '', '', '', '', '', ''),
(28, 22, '2018-11-14', 'Headphone', 'Right', '40', '20', '30', '', '', '', '');

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
  ADD PRIMARY KEY (`testid`);

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
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `t_test`
--
ALTER TABLE `t_test`
  MODIFY `testid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
