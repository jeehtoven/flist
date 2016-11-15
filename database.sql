-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2016 at 06:16 PM
-- Server version: 5.5.51-38.2-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `jeehtove_flist`
--
CREATE DATABASE IF NOT EXISTS `jeehtove_flist` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jeehtove_flist`;

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
