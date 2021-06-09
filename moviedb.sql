-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 11:52 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: ` moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `act_id` int(11) NOT NULL,
  `act_name` varchar(20) DEFAULT NULL,
  `act_gender` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dir`
--

CREATE TABLE `dir` (
  `dir_id` int(11) NOT NULL,
  `dir_name` varchar(20) DEFAULT NULL,
  `dir_phone` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mov`
--

CREATE TABLE `mov` (
  `mov_id` int(11) NOT NULL,
  `mov_title` varchar(25) DEFAULT NULL,
  `mov_year` date DEFAULT NULL,
  `mov_lang` varchar(20) DEFAULT NULL,
  `dir_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `mov_id` int(11) NOT NULL,
  `rev_stars` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `dir`
--
ALTER TABLE `dir`
  ADD PRIMARY KEY (`dir_id`);

--
-- Indexes for table `mov`
--
ALTER TABLE `mov`
  ADD PRIMARY KEY (`mov_id`),
  ADD KEY `dir_id` (`dir_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`mov_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mov`
--
ALTER TABLE `mov`
  ADD CONSTRAINT `mov_ibfk_1` FOREIGN KEY (`dir_id`) REFERENCES `dir` (`dir_id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`mov_id`) REFERENCES `mov` (`mov_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
