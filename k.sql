-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2016 at 09:13 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `k`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_1`
--

CREATE TABLE IF NOT EXISTS `comment_1` (
  `Name` varchar(15) DEFAULT NULL,
  `Mail` varchar(15) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_1`
--

INSERT INTO `comment_1` (`Name`, `Mail`, `comment`) VALUES
('BALA', 'balampbv007@gma', 'nice to have u'),
('Mohan', 'mohan@gmail.com', 'nice...'),
('Prabu', 'prabu@gmail.com', 'WOW'),
('Dave', 'David@gmail.com', 'Damn Good');

-- --------------------------------------------------------

--
-- Table structure for table `comment_2`
--

CREATE TABLE IF NOT EXISTS `comment_2` (
  `Name` varchar(15) DEFAULT NULL,
  `Mail` varchar(15) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_2`
--

INSERT INTO `comment_2` (`Name`, `Mail`, `comment`) VALUES
('BALA', 'balampbv007@gma', 'Superb!!!'),
('balampbv', 'mohan@gmail.com', 'GOOd'),
('sriram s', 'sam@gmail.copm', 'checl'),
('selva', 'samarun234@gmai', 'gooood'),
('krishnakrish', 'kumar@gmail.com', 'Jjj');

-- --------------------------------------------------------

--
-- Table structure for table `comment_3`
--

CREATE TABLE IF NOT EXISTS `comment_3` (
  `Name` varchar(15) DEFAULT NULL,
  `Mail` varchar(15) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_3`
--

INSERT INTO `comment_3` (`Name`, `Mail`, `comment`) VALUES
('BALA', 'balampbv007@gma', 'Check'),
('BALA', 'balampbv007@gma', 'Check');

-- --------------------------------------------------------

--
-- Table structure for table `comment_4`
--

CREATE TABLE IF NOT EXISTS `comment_4` (
  `Name` varchar(15) DEFAULT NULL,
  `Mail` varchar(15) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_4`
--

INSERT INTO `comment_4` (`Name`, `Mail`, `comment`) VALUES
('Kumar', 'kumar@gmail.com', 'Goood...');

-- --------------------------------------------------------

--
-- Table structure for table `comment_5`
--

CREATE TABLE IF NOT EXISTS `comment_5` (
  `Name` varchar(15) DEFAULT NULL,
  `Mail` varchar(15) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_5`
--

INSERT INTO `comment_5` (`Name`, `Mail`, `comment`) VALUES
('mohanraj', 'edf@gmail.com', 'damn good\r\n'),
('Uma', 'uuu', 'ujdfh');

-- --------------------------------------------------------

--
-- Table structure for table `comment_6`
--

CREATE TABLE IF NOT EXISTS `comment_6` (
  `Name` varchar(15) DEFAULT NULL,
  `Mail` varchar(15) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_6`
--

INSERT INTO `comment_6` (`Name`, `Mail`, `comment`) VALUES
('balampbv', 'balampbv007@gma', 'check');

-- --------------------------------------------------------

--
-- Table structure for table `comment_7`
--

CREATE TABLE IF NOT EXISTS `comment_7` (
  `Name` varchar(15) DEFAULT NULL,
  `Mail` varchar(15) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_7`
--

INSERT INTO `comment_7` (`Name`, `Mail`, `comment`) VALUES
('balampbv', 'balampbv007@gma', 'Damn'),
('Kumar', 'kumar@gmail.com', 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `comment_8`
--

CREATE TABLE IF NOT EXISTS `comment_8` (
  `Name` varchar(15) DEFAULT NULL,
  `Mail` varchar(15) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_8`
--

INSERT INTO `comment_8` (`Name`, `Mail`, `comment`) VALUES
('Bala Sekar', 'balampbv007@gma', 'Good\r\n'),
('Bala Sekar', 'balampbv007@gma', 'Good\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `comment_9`
--

CREATE TABLE IF NOT EXISTS `comment_9` (
  `Name` varchar(15) DEFAULT NULL,
  `Mail` varchar(15) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_9`
--

INSERT INTO `comment_9` (`Name`, `Mail`, `comment`) VALUES
('jj', 'j@mail.com', 'jjjj'),
('kk', 'kumar@gmail.com', 'jkk');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `post` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post`) VALUES
(1, 'Need an easy way to get data into XML, or transform XML to another format? MapForce lets you map XML data to/from any combination of XML, database, flat file, Excel 2007, XBRL, or Web services data. Then it transforms data instantly or auto-generates royalty-free code for recurrent conversions. New features in Version 2011!\r\n'),
(2, 'It is also possible to order by more than one column. When ordering by more than one column, the second column is only used if the values in the first column are equal:\r\n'),
(3, 'PHP 5+: MySQL is not enabled by default, so the php_mysql.dll must be enabled inside of php.ini. Also, PHP needs access to the MySQL client library. A file named libmysql.dll is included in the Windows PHP distribution, and in order for PHP to talk to MySQL this file needs to be available to the Windows systems PATH.'),
(4, 'When you are working with an application, you open it, do some changes and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server....'),
(5, 'sessions work by creating a unique id (UID) for each visitor and store variables based on this UID. The UID is either stored in a cookie or is propagated in the URL.'),
(6, 'When you are working with an application, you open it, do some changes and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server....'),
(7, 'The most important thing to notice when dealing with HTML forms and PHP is that any form element in an HTML page will automatically be available to your PHP scripts.\r\n\r\nExample'),
(8, 'Variables are used for storing values, like text strings, numbers or arrays.\r\n\r\nWhen a variable is declared, it can be used over and over again in your script.\r\n\r\nAll variables in PHP start with a $ sign symbol.\r\n\r\nThe correct way of declaring a variable in PHP:'),
(9, 'he built-in $_POST function is used to collect values from a form sent with method="post".\r\n\r\nInformation sent from a form with the POST method is invisible to others and has no limits on the amount of information to send.\r\n\r\nNote: However, there is an 8 Mb m');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
