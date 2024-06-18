-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2023 at 09:15 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `filmhall`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` int(11) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bookedseats`
--

CREATE TABLE IF NOT EXISTS `bookedseats` (
  `ticketid` int(11) NOT NULL,
  `seatNB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL,
  `imagecover` varchar(100) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `image`, `imagecover`, `duration`, `description`) VALUES
(2, 'JOHN WICK CHAPTER 4', 'j4.jpg', 'Jwick.jpg', '150 min', ''),
(3, 'FAST X', 'fast_x.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movieID` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateBooked` date NOT NULL,
  `seats` int(11) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `location` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `movieID`, `date`, `dateBooked`, `seats`, `amount`, `location`, `userid`) VALUES
(3, 0, '2023-06-11 08:27:24', '2023-06-13', 0, 0.00, 1, 0),
(4, 0, '2023-06-11 08:27:31', '2023-06-14', 1, 800.00, 1, 0),
(5, 0, '2023-06-11 08:32:21', '2023-06-10', 1, 800.00, 1, 0),
(6, 0, '2023-06-11 08:33:15', '2023-06-13', 1, 800.00, 1, 1),
(7, 0, '2023-06-11 08:33:30', '2023-06-13', 0, 0.00, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` int(11) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `contact`, `email`, `password`) VALUES
(1, 0, 'sandeepa', '0766001614', 'usachithauk@gmail.com', 'sachi'),
(2, 0, '', 'sdf@jasd.coc', '', 'dfg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
