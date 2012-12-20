-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2011 at 02:06 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hyves`
--

-- --------------------------------------------------------

--
-- Table structure for table `hy_users`
--

CREATE TABLE IF NOT EXISTS `hy_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lon` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hy_users`
--

INSERT INTO `hy_users` (`user_id`, `name`, `username`, `password`, `address`, `city`, `country`, `zipcode`, `lat`, `lon`) VALUES
(1, 'Sanz', 'sanz', 'sanz', '', 'Flevoland', 'Netherlands', '', '52.5279781', '5.5953508'),
(2, 'Test User', 'user', 'www', 'terst', 'Coimbatore', 'India', '123456', '45.6535567', '13.7784665'),
(4, 'Hyves', 'hyves', 'hyves', '1000', 'amsterdam', 'Netherlands', '', '52.3677551', '4.8999753');
