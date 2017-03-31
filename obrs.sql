-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2017 at 12:21 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `obrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `book_id` int(10) NOT NULL AUTO_INCREMENT,
  `reg_id` int(10) DEFAULT NULL,
  `bus_id` int(5) DEFAULT NULL,
  `bus_name` char(20) DEFAULT NULL,
  `f_name` char(15) DEFAULT NULL,
  `l_name` char(15) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` char(15) DEFAULT NULL,
  `pin` int(6) DEFAULT NULL,
  `ph_no` int(10) DEFAULT NULL,
  `seat_no` int(2) DEFAULT NULL,
  `b_date` date DEFAULT NULL,
  `book_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `booking_ava_seats`
--

CREATE TABLE IF NOT EXISTS `booking_ava_seats` (
  `bas_id` int(5) NOT NULL AUTO_INCREMENT,
  `bus_id` int(5) DEFAULT NULL,
  `day` char(3) DEFAULT NULL,
  `date` date NOT NULL,
  `ava_seat` int(2) DEFAULT NULL,
  PRIMARY KEY (`bas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bus_route`
--

CREATE TABLE IF NOT EXISTS `bus_route` (
  `bus_id` int(5) NOT NULL AUTO_INCREMENT,
  `bus_no` varchar(12) DEFAULT NULL,
  `bus_name` varchar(20) NOT NULL,
  `dep_time` varchar(10) NOT NULL,
  `arr_time` varchar(10) NOT NULL,
  `bus_type` char(10) DEFAULT NULL,
  `total_seat` int(2) DEFAULT NULL,
  `price_per_seat` int(3) NOT NULL,
  `mon` tinyint(1) NOT NULL DEFAULT '0',
  `tue` tinyint(1) NOT NULL DEFAULT '0',
  `wed` tinyint(1) NOT NULL DEFAULT '0',
  `thu` tinyint(1) NOT NULL DEFAULT '0',
  `fri` tinyint(1) NOT NULL DEFAULT '0',
  `sat` tinyint(1) NOT NULL DEFAULT '0',
  `sun` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bus_id`),
  UNIQUE KEY `bus_name` (`bus_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bus_route`
--

INSERT INTO `bus_route` (`bus_id`, `bus_no`, `bus_name`, `dep_time`, `arr_time`, `bus_type`, `total_seat`, `price_per_seat`, `mon`, `tue`, `wed`, `thu`, `fri`, `sat`, `sun`) VALUES
(1, 'mh 04 1234', 'delhi express', '2:30 pm', '10:00pm', 'ac', 40, 200, 1, 0, 1, 1, 0, 0, 1),
(2, 'MH 04 3434', 'swargate express', '10:30 am', '1:30 pm', 'ac', 30, 500, 1, 1, 1, 1, 1, 1, 1),
(3, 'mh 04 2342', 'PUNE EXPRESS', '03:00 am', '06:00am', 'ac', 40, 1000, 1, 1, 1, 1, 1, 1, 1),
(4, 'MH 04 3434', 'swargate', '4:30 am', '5:50 pm', 'ac', 40, 250, 1, 1, 1, 1, 0, 0, 0),
(5, 'mh 04 2342', 'delhi beli express', '4:50 am', '5:50 pm', 'ac', 60, 700, 0, 1, 1, 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bus_route_place`
--

CREATE TABLE IF NOT EXISTS `bus_route_place` (
  `place_id` int(5) DEFAULT NULL,
  `bus_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_route_place`
--

INSERT INTO `bus_route_place` (`place_id`, `bus_id`) VALUES
(1, 1),
(2, 2),
(2, 3),
(2, 4),
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feed_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` char(15) DEFAULT NULL,
  `feedback` varchar(120) DEFAULT NULL,
  `fdate` date DEFAULT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `user_name`, `feedback`, `fdate`) VALUES
(2, 'AKSHAY', 'bus time service is very good', '2017-03-02'),
(3, 'AKSHAY', 'your service is very good', '2017-03-16'),
(4, 'prajyot', 'your service is very good', '2017-03-01'),
(5, 'AKSHAY', 'good', '2017-03-03'),
(6, 'aksm', 'kjanoq', '2010-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `login_attemp`
--

CREATE TABLE IF NOT EXISTS `login_attemp` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) DEFAULT NULL,
  `attemp` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `login_attemp`
--

INSERT INTO `login_attemp` (`id`, `email`, `attemp`) VALUES
(1, 'akshaydeoghare8@gmail.com', 0),
(2, 'smitayadav1997@gmail.com', 0),
(3, 'prajyot1708@gmail.com', 0),
(4, '25987z@gmail.com', 0),
(5, 'singhguneesh@gmail.com', 0),
(6, 'pawan@gmail.com', 0),
(7, 'akshaydevghare8@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_record`
--

CREATE TABLE IF NOT EXISTS `login_record` (
  `email` varchar(30) NOT NULL,
  `user_name` char(15) DEFAULT NULL,
  `pass_key` char(16) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0',
  `account_state` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_record`
--

INSERT INTO `login_record` (`email`, `user_name`, `pass_key`, `type`, `account_state`) VALUES
('25987z@gmail.com', 'amol', 'amol', 0, 0),
('akshaydeoghare8@gmail.com', 'akshay', '12345', 1, 0),
('akshaydevghare8@gmail.com', 'akshay', 'akshay', 0, 0),
('pawan@gmail.com', 'pawan', 'pawan', 0, 0),
('prajyot1708@gmail.com', 'prajyot', 'prajyot', 0, 0),
('singhguneesh@gmail.com', 'guneesh', 'guneesh', 0, 0),
('smitayadav1997@gmail.com', 'smita', 'smita', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `src` char(10) NOT NULL,
  `des` char(10) NOT NULL,
  `place_id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`src`,`des`),
  UNIQUE KEY `place_id` (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`src`, `des`, `place_id`) VALUES
('mumbai', 'delhi', 1),
('Mumbai', 'Pune', 2),
('mumbai', 'goa', 3),
('mumbai', 'satara', 4),
('mumbai', 'kolkatta', 7);

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE IF NOT EXISTS `registered_user` (
  `reg_id` int(10) NOT NULL AUTO_INCREMENT,
  `f_name` char(15) DEFAULT NULL,
  `l_name` char(15) DEFAULT NULL,
  `email_id` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(50) DEFAULT NULL,
  `city` char(15) DEFAULT NULL,
  `pin` int(6) DEFAULT NULL,
  `ph_no` int(10) DEFAULT NULL,
  PRIMARY KEY (`reg_id`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`reg_id`, `f_name`, `l_name`, `email_id`, `address`, `city`, `pin`, `ph_no`) VALUES
(1, 'smita', 'yadav', 'smitayadav1997@gmail.com', 'mankhurd', 'mumbai', 400094, 12345678),
(2, 'prajyot', 'ahire', 'prajyot1708@gmail.com', 'chalisgaun', 'dulhe', 500003, 2147483647),
(3, 'amol', 'jaybhaye', '25987z@gmail.com', 'ghatkopar', 'mumbai', 400075, 2147483647),
(4, 'guneesh', 'bhatia', 'singhguneesh@gmail.com', 'cbd', 'NAVI MUMBAI', 400614, 2147483647),
(5, 'pawan', 'gururaj', 'pawan@gmail.com', 'dombilivi', 'mumbai', 40059, 243363),
(6, 'akshay', 'deoghare', 'akshaydevghare8@gmail.com', 'nerul', 'navi mumbai', 400706, 132425263);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
