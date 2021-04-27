-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 10:42 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `uid`, `date`, `message`) VALUES
(1, 'rahulratusaria18@gmail.com', '0000-00-00 00:00:00', 'HLOTHERE'),
(2, 'priyaratusaria18@gmail.com', '0000-00-00 00:00:00', 'YOU MAKE THE DAY'),
(3, 'ghgf@gmail.com', '0000-00-00 00:00:00', 'fdbdghb'),
(4, 'rahulratusaria18@gmail.com', '0000-00-00 00:00:00', 'fkvnmg'),
(5, 'priyaratusaria18@gmail.com', '0000-00-00 00:00:00', 'qwerty'),
(6, 'wdw@gmail.com', '0000-00-00 00:00:00', 'efef'),
(7, 'efc@gmail.com', '0000-00-00 00:00:00', 'fefe'),
(8, 'rahulratusaria18@gmail.com', '0000-00-00 00:00:00', 'vgkvhkbnbggyfyufghvhbvmghfhgfhgfhgkfhvjhgyufgfhgvhjgh'),
(9, 'ncennnn@gmail.com', '0000-00-00 00:00:00', 'good one');

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE `recruiter` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `companyname` varchar(20) NOT NULL,
  `contactnumber` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cityname` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `jobtype` varchar(30) NOT NULL,
  `personquality` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`id`, `name`, `companyname`, `contactnumber`, `email`, `cityname`, `description`, `jobtype`, `personquality`) VALUES
(1, 'rahul', 'sggve', 2147483647, 'dgvw@gamail.com', 'rvr', 'fewgvf', 'befewg', 'fewggve'),
(2, 'priya', 'dr', 2147483647, 'fgcf@hv.com', 'vgmg', 'jkg,g', 'bh,gj', 'gccgc'),
(3, 'bhbfbe', 'hfssgh', 2147483647, 'vghhvg@gmail.com', 'cgv', 'bvgc', 'bvc', 'v,g'),
(4, 'priya ratusaria', 'kitchenmaster', 2147483647, 'pratusaria93555@gmail.com', 'sirsa', 'A recipe site', 'web designer', 'Best web designer'),
(5, 'gazzal', 'ef34', 2147483647, 'priyaratusaria18@gmail.com', 'dewd3rd', 'efedd`vrf', 'vfv', 'bgftb'),
(6, 'hlo', 'b', 2147483647, 'priyaratusaria18@gmail.com', 'sirsa', 'ghgfgfc', 'gcghc', 'ghcgc'),
(7, 'ecd', 'dcewfc', 2147483647, 'wbjjvhb@bg.com', 'sirashvf', 'hvjh', 'hj', 'hhgb');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Username` char(15) NOT NULL,
  `email` char(40) DEFAULT NULL,
  `Password` char(20) NOT NULL,
  `confirmpassword` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Username`, `email`, `Password`, `confirmpassword`) VALUES
('rahul', 'rahulratusaria18@gmail.com', '987654321', '987654321'),
('priya', 'priyaratusaria18@gmail.com', '123456789', '123456789'),
('', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `recruiter`
--
ALTER TABLE `recruiter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
