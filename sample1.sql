-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 12:58 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `srno` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `apassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`srno`, `username`, `apassword`) VALUES
(1, 'aditya', 'aditya'),
(2, 'siddharth', 'siddharth'),
(3, 'juhi', 'juhi');

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `id` int(11) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `incetype` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('male','female','others') NOT NULL,
  `hdate` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `states` varchar(30) NOT NULL,
  `country` varchar(20) NOT NULL,
  `descp` varchar(100) NOT NULL,
  `person` int(20) NOT NULL,
  `idproof` enum('aadhar','pan','voterid') NOT NULL,
  `idno` int(20) NOT NULL,
  `pfile` varchar(100) NOT NULL,
  `agree` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`id`, `cdate`, `incetype`, `fname`, `lname`, `contact`, `email`, `gender`, `hdate`, `location`, `pincode`, `city`, `states`, `country`, `descp`, `person`, `idproof`, `idno`, `pfile`, `agree`) VALUES
(1, '2020-12-07 21:38:26', 'theft', 'Aditya', 'Sawant', 2147483647, 'a@gmail.com', 'male', '2000-10-17', 'Chembur', 400037, 'mumbai', 'mh', 'india', 'I certify that the information provided by me in above form is accurate and correct as per best of m', 2, 'aadhar', 2147483647, 'abc.jpg', 0),
(2, '2020-12-07 21:39:21', 'theft', 'Aditya', 'Sawant', 2147483647, 'a@gmail.com', 'male', '2000-10-17', 'Chembur', 400037, 'mumbai', 'mh', 'india', 'I certify that the information provided by me in above form is accurate and correct as per best of m', 2, 'aadhar', 2147483647, 'abc.jpg', 0),
(3, '2020-12-08 06:42:33', 'theft', 'Aditya', 'Sawant', 2147483647, 'aditya@gmail.com', 'male', '2020-12-01', 'Chembur', 400037, 'mumbai', 'mh', 'India', ' I certify that the information provided by me in above form is accurate and correct as per best of ', 3, 'aadhar', 2147483647, 'abc.jpg', 0),
(4, '2020-12-09 10:59:41', 'theft', 'pqr', 'xyz', 2147483647, 'pqr@gmail.com', 'male', '2020-12-24', 'street naka', 349755, 'mumbai', 'mh', 'India', 'nformation provided by me in above form is accurate and correct as per best of my knowledge. I under', 2, 'pan', 58465, 'bb.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `policetable`
--

CREATE TABLE `policetable` (
  `srno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pid` int(10) NOT NULL,
  `ppassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policetable`
--

INSERT INTO `policetable` (`srno`, `name`, `pid`, `ppassword`) VALUES
(1, 'sidesh', 4520, '1234'),
(2, 'deepak', 4569, '1234'),
(3, 'rahul', 4578, '1234'),
(4, 'shinde', 4589, '1234'),
(5, 'rithik', 4527, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female','others') NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  `agree` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `dob`, `gender`, `contact`, `email`, `password`, `cpassword`, `agree`) VALUES
(1, 'sdg', '2020-12-02', 'male', 1234567895, 'a@gmail.com', '1234', '1234', 0),
(2, 'sidesh', '2020-12-01', 'male', 7718931947, 'asd@gmail.com', '1234', '1234', 0),
(4, 'Aditya', '2020-12-03', 'male', 7718931947, 'abcdg@gmail.com', '1234', '1234', 0),
(5, 'Aditya Sawant', '2020-12-02', 'male', 7718931947, 'aditya@gmail.com', '1234', '1234', 0),
(6, 'pqr', '2020-12-24', 'male', 9647635864, 'pqr@gmail.com', 'pqr123', 'pqr123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD KEY `srno` (`srno`);

--
-- Indexes for table `fir`
--
ALTER TABLE `fir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policetable`
--
ALTER TABLE `policetable`
  ADD KEY `srno` (`srno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fir`
--
ALTER TABLE `fir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `policetable`
--
ALTER TABLE `policetable`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
