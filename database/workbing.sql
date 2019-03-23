-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 05:41 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workbing`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `url`) VALUES
(1, 'News Paper', 'cat/category/news2.png'),
(2, 'Mechanic', 'cat/category/mechanic2.png'),
(3, 'CCTV Service', 'cat/category/cctv2.png'),
(4, 'Electrician', 'cat/category/electrician2.png'),
(5, 'Carpenter', 'cat/category/carpenter2.png'),
(6, 'Masson', 'cat/category/mason.png'),
(7, 'Plumber', 'cat/category/plumber2.png'),
(8, 'Air-Conditioner Repair', 'cat/category/ac2.png'),
(9, 'Refrigerator Repair', 'cat/category/frij2.png'),
(10, 'Gas Stove Repair', 'cat/category/gas2.png'),
(11, 'Washer Repair', 'cat/category/washer2.png'),
(12, 'Tv Repair', 'cat/category/tv2.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `coid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `wid` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `category` text NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `propic` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `pincode` text NOT NULL,
  `verified` text NOT NULL,
  `rating` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`wid`, `fname`, `mname`, `lname`, `category`, `mobile`, `email`, `dob`, `propic`, `address`, `city`, `pincode`, `verified`, `rating`) VALUES
(4, 'visahl', 'rajeshbhai', 'pankhaniya', 'Plumber', '7621859675', 'vishal@gmail.com', '1998-04-28', '3.jpg', 'rajkot near bhutnath bangloz', 'Rajkot', '360001', 'NO', '0'),
(5, 'vishal', 'rajeshbahi', 'pankhaniya', 'Electrician', '78978979797', 'vishal@gmail.com', '2018-10-09', '3.jpg', 'bgfwjkgbjkwbgkb', 'Dhoraji', '36001', 'NO', '0'),
(6, '', '', '', '--select category--', '', '', '0000-00-00', '', '', '--Select City--', '', 'NO', '0'),
(7, '', '', '', '--select category--', '', '', '0000-00-00', '', '', '--Select City--', '', 'NO', '0'),
(8, '', '', '', '--select category--', '', '', '0000-00-00', '', '', '--Select City--', '', 'NO', '0'),
(9, '', '', '', '--select category--', '', '', '0000-00-00', '', '', '--Select City--', '', 'NO', '0'),
(10, '', '', '', '--select category--', '', '', '0000-00-00', '', '', '--Select City--', '', 'NO', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
