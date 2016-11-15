-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2016 at 11:41 AM
-- Server version: 5.5.42-37.1-log
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `jeehtove_flist`
--

-- --------------------------------------------------------

--
-- Table structure for table `flist`
--

DROP TABLE IF EXISTS `flist`;
CREATE TABLE IF NOT EXISTS `flist` (
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
