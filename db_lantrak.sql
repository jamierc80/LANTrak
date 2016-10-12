-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2016 at 06:13 PM
-- Server version: 5.1.72-community
-- PHP Version: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_lantrak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE IF NOT EXISTS `tbl_countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_description` varchar(50) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hosts`
--

CREATE TABLE IF NOT EXISTS `tbl_hosts` (
  `host_id` int(11) NOT NULL AUTO_INCREMENT,
  `host_hostname` varchar(50) NOT NULL,
  `host_ip` varchar(50) NOT NULL,
  `host_type` int(11) NOT NULL,
  `host_comments` text NOT NULL,
  `host_enabled` tinyint(1) NOT NULL,
  `host_site` int(11) NOT NULL,
  PRIMARY KEY (`host_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_hosttypes`
--

CREATE TABLE IF NOT EXISTS `tbl_hosttypes` (
  `ht_id` int(11) NOT NULL AUTO_INCREMENT,
  `ht_description` varchar(50) NOT NULL,
  PRIMARY KEY (`ht_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_hosttypes`
--

INSERT INTO `tbl_hosttypes` (`ht_id`, `ht_description`) VALUES
(1, 'Server'),
(2, 'Printer'),
(3, 'Switch'),
(4, 'Router');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE IF NOT EXISTS `tbl_roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_description` varchar(50) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role_description`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sites`
--

CREATE TABLE IF NOT EXISTS `tbl_sites` (
  `site_id` int(11) NOT NULL AUTO_INCREMENT,
  `site_code` varchar(10) NOT NULL,
  `site_description` varchar(50) NOT NULL,
  `site_subnet` varchar(15) NOT NULL,
  `site_gateway` varchar(15) NOT NULL,
  `site_country` int(11) NOT NULL,
  PRIMARY KEY (`site_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_role` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_username`, `user_password`, `user_email`, `user_role`) VALUES
(1, 'admin', 'admin', 'admin@lantrak.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
