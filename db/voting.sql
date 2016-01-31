-- phpMyAdmin SQL Dump
-- version 3.3.7deb5build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2011 at 10:59 AM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-1ubuntu9.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voting`
--


-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE IF NOT EXISTS `polls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poll` text NOT NULL,
  `option1no` int(11) NOT NULL,
  `option1` text NOT NULL,
  `option2no` int(11) NOT NULL,
  `option2` text NOT NULL,
  `option3no` int(11) NOT NULL,
  `option3` text NOT NULL,
  `option4no` int(11) NOT NULL,
  `option4` text NOT NULL,
  `option5no` int(11) NOT NULL,
  `option5` text NOT NULL,
  `option6no` int(11) NOT NULL,
  `option6` text NOT NULL,
  `option7no` int(11) NOT NULL,
  `option7` text NOT NULL,
  `option8no` int(11) NOT NULL,
  `option8` text NOT NULL,
  `timecreated` int(11) DEFAULT '0',
  `timemodified` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `polls`
--


-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oneone` int(11) NOT NULL DEFAULT '100',
  `onetwo` int(11) NOT NULL DEFAULT '100',
  `onethree` int(11) NOT NULL DEFAULT '100',
  `onefour` int(11) NOT NULL DEFAULT '100',
  `onefive` int(11) NOT NULL DEFAULT '100',
  `onesix` int(11) NOT NULL DEFAULT '100',
  `oneseven` int(11) NOT NULL DEFAULT '100',
  `oneeight` int(11) NOT NULL DEFAULT '100',
  `onenine` int(11) NOT NULL DEFAULT '100',
  `oneten` int(11) NOT NULL DEFAULT '100',
  `oneeleven` int(11) NOT NULL DEFAULT '100',
  `onetwelve` int(11) NOT NULL DEFAULT '100',
  `twoone` int(11) NOT NULL DEFAULT '100',
  `twotwo` int(11) NOT NULL DEFAULT '100',
  `twothree` int(11) NOT NULL DEFAULT '100',
  `twofour` int(11) NOT NULL DEFAULT '100',
  `twofive` int(11) NOT NULL DEFAULT '100',
  `twosix` int(11) NOT NULL DEFAULT '100',
  `twoseven` int(11) NOT NULL DEFAULT '100',
  `twoeight` int(11) NOT NULL DEFAULT '100',
  `twonine` int(11) NOT NULL DEFAULT '100',
  `threeone` text,
  `threetwo` text,
  `threethree` text,
  `sex` text,
  `age` text,
  `work` text,
  `ip` text,
  `creation_time` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votes`
--

