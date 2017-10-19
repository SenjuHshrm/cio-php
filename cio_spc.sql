-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 04:35 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cio_spc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acct`
--

CREATE TABLE `admin_acct` (
  `id` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_acct`
--

INSERT INTO `admin_acct` (`id`, `admin_username`, `admin_password`) VALUES
('43ec517d68b6edd3015b3edc9a11367b', 'rma_031', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `admin_acct_info`
--

CREATE TABLE `admin_acct_info` (
  `id` varchar(50) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Mname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `bday` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_acct_info`
--

INSERT INTO `admin_acct_info` (`id`, `Fname`, `Mname`, `Lname`, `Gender`, `age`, `bday`, `address`, `contact`, `pic`) VALUES
('43ec517d68b6edd3015b3edc9a11367b', 'Renzo', 'Legaspi', 'Dimasapit', 'male', 20, '1/31/1997', '084, Brgy. Imok, Calauan, Laguna', '09393622566', '/public/imgs/default/default_admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `emp_acct`
--

CREATE TABLE `emp_acct` (
  `id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_acct`
--

INSERT INTO `emp_acct` (`id`, `username`, `password`) VALUES
('43ec517d68b6edd3015b3edc9a11367b', 'rma_031', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `emp_acct_info`
--

CREATE TABLE `emp_acct_info` (
  `id` varchar(50) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Mname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `bday` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_acct_info`
--

INSERT INTO `emp_acct_info` (`id`, `Fname`, `Mname`, `Lname`, `Gender`, `age`, `bday`, `address`, `contact`, `pic`) VALUES
('43ec517d68b6edd3015b3edc9a11367b', 'Renzo', 'Legaspi', 'Dimasapit', 'male', 20, '1/31/1997', '084, Brgy. Imok, Calauan, Laguna', '09396526072', '/public/imgs/default/def_prof_male.png');

-- --------------------------------------------------------

--
-- Table structure for table `lcr_birth`
--

CREATE TABLE `lcr_birth` (
  `id` varchar(10) NOT NULL,
  `bName` varchar(50) NOT NULL,
  `bMid` varchar(50) NOT NULL,
  `bLast` varchar(50) NOT NULL,
  `bDate` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lcr_death`
--

CREATE TABLE `lcr_death` (
  `id` varchar(10) NOT NULL,
  `dName` varchar(50) NOT NULL,
  `dMid` varchar(50) NOT NULL,
  `dLast` varchar(50) NOT NULL,
  `dDate` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lcr_marr`
--

CREATE TABLE `lcr_marr` (
  `id` varchar(10) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `mMid` varchar(50) NOT NULL,
  `mLast` varchar(50) NOT NULL,
  `mDate` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lcr_reqr`
--

CREATE TABLE `lcr_reqr` (
  `ReqName` varchar(50) NOT NULL,
  `ReqMid` varchar(50) NOT NULL,
  `ReqLast` varchar(50) NOT NULL,
  `id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_list` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_list`, `date`, `time`) VALUES
('Oct 16, 2017: Transport Strike; no classes on all levels, government agencies closed.', '10/19/2017', '10:33:05am'),
('Oct 17, 2017: Transport strike extended: no classes and closed government agencies', '10/19/2017', '10:33:40am'),
('Oct 18, 2017: Classes resume; government agencies now available', '10/19/2017', '10:34:31am'),
('Oct 20, 2017: Start of work at the new office', '10/19/2017', '10:45:54am'),
('Nov 2, 2017: Holiday, All Souls Day', '10/19/2017', '10:53:03am');

-- --------------------------------------------------------

--
-- Table structure for table `walk_acct`
--

CREATE TABLE `walk_acct` (
  `id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `walk_acct_info`
--

CREATE TABLE `walk_acct_info` (
  `id` varchar(50) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Mname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `bday` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_acct`
--
ALTER TABLE `admin_acct`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `admin_acct_info`
--
ALTER TABLE `admin_acct_info`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `emp_acct`
--
ALTER TABLE `emp_acct`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `emp_acct_info`
--
ALTER TABLE `emp_acct_info`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `lcr_birth`
--
ALTER TABLE `lcr_birth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `lcr_death`
--
ALTER TABLE `lcr_death`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `lcr_marr`
--
ALTER TABLE `lcr_marr`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `lcr_reqr`
--
ALTER TABLE `lcr_reqr`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD UNIQUE KEY `time` (`time`);

--
-- Indexes for table `walk_acct`
--
ALTER TABLE `walk_acct`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `walk_acct_info`
--
ALTER TABLE `walk_acct_info`
  ADD UNIQUE KEY `id` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
