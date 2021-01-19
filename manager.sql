-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 08:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminname`, `password`) VALUES
(1, 'ayush', 'rawat'),
(2, 'suresh', 'mistry');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(30) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `gender` varchar(222) NOT NULL,
  `contact` varchar(22) NOT NULL,
  `people` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `name`, `email`, `gender`, `contact`, `people`) VALUES
(16, 'Bavaseer', 'bavaseer@dard.com', 'Male', '7788901211', 4),
(17, 'shubham', 'shubhamdhasmana333@gmail.com', 'Male', '9412347419', 5),
(18, 'ayush', 'ayushrawat11562@gmail.com', 'Male', '7019772385', 2),
(21, 'ayush', 'ayushrawat11562@gmail.com', 'Male', '07019772385', 54),
(24, 'ayush', 'ayushrawat11562@gmail.com', 'Male', '07019772385', 5),
(25, 'james', 'james@pokemon.com', 'Male', '9996688404', 3),
(26, 'admin', 'root', 'Male', '6360583587', 4),
(28, 'Basvaraj', 'basvaraj@gmail.com', 'Male', '9796657698', 3),
(30, 'garima', 'garima@lol.com', 'Other', '9412347419', 12),
(31, 'Ayush', 'ayushrawat11562@gmail.com', 'Male', '07019772385', 0),
(32, 'suresh', 'suresh62@gmail.com', 'Male', '5569772385', 1),
(33, 'Awadhesh', 'awadhesh007@gmail.com', 'Male', '8609486375', 1),
(34, 'ayush', 'ayushrawat11562@gmail.com', 'Male', '07019772385', 1),
(35, 'shubham', 'shubham@gmail.com', 'Male', '123456789', 2),
(36, 'ayush', 'ayushr1562@gmail.com', 'Male', '8019772385', 2),
(37, 'shubham', 'dhasmana333@gmail.com', 'Male', '9412342411', 1),
(38, 'ayush', 'ayushrawat11562@gmail.com', 'Male', '7019772385', 5);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `username` varchar(20) NOT NULL,
  `credit` bigint(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` int(5) NOT NULL,
  `cvv` int(5) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`username`, `credit`, `month`, `year`, `cvv`, `amount`) VALUES
('', 0, '', 0, 0, 0),
('1abhinavrawat@gmail.', 222324141, 'sep', 2134, 432, 0),
('1abhinavrawat@gmail.', 222324141, 'sep', 2134, 432, 0),
('1abhinavrawat@gmail.', 1234567890, 'sep', 2134, 432, 0),
('1abhinavrawat@gmail.', 1234567890, 'sep', 2134, 432, 0),
('Ayush', 0, '', 0, 0, 0),
('Ayush', 16234234234, 'july', 2026, 749, 0),
('Ayush', 16234234234, 'july', 2026, 749, 0),
('Ayush', 16234234234, 'july', 2026, 749, 9050),
('James', 542396835634, 'sep', 2028, 375, 1150),
('admin', 4927405739932, 'oct', 2122, 546, 2900),
('Chandan', 6360583587, 'Jan', 2022, 897, 4550),
('Ayush', 0, '', 0, 0, 2950),
('Ayush', 847575758647, 'july', 2021, 937, 800),
('Ayush', 847575758647, 'july', 2021, 937, 800),
('admin', 124512353223, 'sep', 2022, 853, 3000),
('Ayush', 99752916922, 'asa', 2021, 432, 600);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `Snum` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `single_bed` int(11) NOT NULL,
  `double_bed` int(11) NOT NULL,
  `single_ac` int(11) NOT NULL,
  `double_ac` int(11) NOT NULL,
  `room_price` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`Snum`, `room_id`, `single_bed`, `double_bed`, `single_ac`, `double_ac`, `room_price`) VALUES
(36, 31, 4, 3, 2, 0, 3500),
(37, 31, 1, 3, 2, 1, 3900),
(38, 31, 0, 0, 0, 0, 1000),
(39, 31, 0, 0, 0, 0, 1000),
(40, 31, 0, 0, 0, 0, 1000),
(41, 31, 0, 0, 0, 0, 0),
(42, 31, 0, 0, 0, 0, 0),
(43, 32, 2, 1, 0, 0, 800),
(44, 33, 2, 1, 0, 0, 800),
(45, 33, 2, 1, 0, 0, 800),
(46, 35, 15, 0, 0, 0, 3000),
(47, 36, 1, 1, 0, 0, 600),
(48, 37, 0, 1, 0, 0, 400),
(49, 38, 7, 7, 5, 7, 14950);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `room_id` int(11) NOT NULL,
  `gym` int(11) NOT NULL,
  `ldry` int(11) NOT NULL,
  `msg` int(11) NOT NULL,
  `prk` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`room_id`, `gym`, `ldry`, `msg`, `prk`, `price`) VALUES
(32, 0, 0, 0, 0, 0),
(32, 0, 0, 0, 0, 0),
(32, 0, 0, 0, 0, 0),
(32, 0, 0, 0, 0, 0),
(32, 0, 0, 0, 0, 0),
(32, 0, 0, 0, 0, 0),
(32, 0, 0, 0, 0, 0),
(32, 2, 4, 2, 3, 11000),
(32, 2, 4, 2, 3, 11000),
(33, 0, 0, 1, 0, 1000),
(35, 0, 2, 0, 0, 2000),
(36, 0, 1, 1, 0, 2000),
(37, 2, 1, 1, 0, 4000),
(38, 1, 0, 0, 0, 1000),
(38, 1, 0, 0, 0, 200),
(38, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`Snum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `Snum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
