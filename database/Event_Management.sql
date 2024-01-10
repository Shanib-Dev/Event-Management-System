-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 06:36 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Event_Management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `email`, `password`, `image`) VALUES
(1, 'admin', '789654125', 'admin@gmail.com', '111111', 'admin2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `allot`
--

CREATE TABLE `allot` (
  `id` int(11) NOT NULL,
  `useid` int(11) NOT NULL,
  `ownerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allot`
--

INSERT INTO `allot` (`id`, `useid`, `ownerid`) VALUES
(2, 1, 1),
(3, 1, 5),
(4, 1, 11),
(5, 1, 11),
(6, 3, 22),
(7, 4, 22);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(3) NOT NULL,
  `work` varchar(30) NOT NULL,
  `reg_id` int(3) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `work`, `reg_id`, `status`) VALUES
(1, 'plumber', 3, '0'),
(2, 'carpenter', 3, '0');

-- --------------------------------------------------------

--
-- Table structure for table `country_state_city`
--

CREATE TABLE `country_state_city` (
  `id` int(11) NOT NULL,
  `country` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_state_city`
--

INSERT INTO `country_state_city` (`id`, `country`, `state`, `city`) VALUES
(1, 'India', 'MP', 'Bhopal'),
(2, 'India', 'MP', 'Indore');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `date_to` varchar(40) NOT NULL,
  `date_from` varchar(40) NOT NULL,
  `time_to` varchar(60) NOT NULL,
  `time_from` varchar(32) NOT NULL,
  `music` varchar(25) NOT NULL,
  `dance` varchar(25) NOT NULL,
  `cartoons` varchar(25) NOT NULL,
  `light` varchar(25) NOT NULL,
  `chair` varchar(25) NOT NULL,
  `stage` varchar(25) NOT NULL,
  `flower` varchar(25) NOT NULL,
  `no_of_chair` varchar(25) NOT NULL,
  `veg` varchar(25) NOT NULL,
  `nonveg` varchar(25) NOT NULL,
  `veg_nonveg` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `userid`, `title`, `date_to`, `date_from`, `time_to`, `time_from`, `music`, `dance`, `cartoons`, `light`, `chair`, `stage`, `flower`, `no_of_chair`, `veg`, `nonveg`, `veg_nonveg`, `address`, `mobile`, `email`, `status`) VALUES
(3, 4, 'Birthday Party', '2021-07-15', '2021-07-15', '08:00', '01:00', 'yes', 'yes', '', 'yes', 'yes', 'yes', '', '25', 'yes', '', '', '304, agarwal buil, sector', '8787678657', 'user@gmail.com', 22);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `team` varchar(30) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `team`, `name`, `mobile`) VALUES
(4, 'Team_a', 'naveed', '752425233'),
(6, 'Team_b', 'sam', '869384231'),
(7, 'Team_C', 'revant', '984657474');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `mobile` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `work_type` varchar(225) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `name`, `mobile`, `address`, `work_type`, `status`) VALUES
(1, 'navneet kour', '8788889996', 'mp nager', 'electician', 0),
(5, 'neelam', '8765456789', 'ashoka garden', 'plumber', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `mobile`, `email`, `password`, `status`) VALUES
(4, 'User', '873527538', 'user@gmail.com', '12345678', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allot`
--
ALTER TABLE `allot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `country_state_city`
--
ALTER TABLE `country_state_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allot`
--
ALTER TABLE `allot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country_state_city`
--
ALTER TABLE `country_state_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
