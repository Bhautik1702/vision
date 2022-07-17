-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 03:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemId` int(10) DEFAULT NULL,
  `itemName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemId`, `itemName`) VALUES
(1, 'Supta Baddha Konasan'),
(2, 'Ardha Matsyendrasana'),
(3, 'Baddha Konasana'),
(4, 'Hast-padasana'),
(5, 'Utkatasana'),
(6, 'Utthita Parsvakonasana'),
(7, 'Bharadvajasana'),
(8, 'Paschimottanasana'),
(9, 'Setu Bandha Sarvangasana'),
(10, 'Ananda Balasan'),
(11, 'Garudasana'),
(12, 'Gomukhasana');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(60) NOT NULL,
  `joinDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `firstName`, `lastName`, `email`, `phone`, `password`, `joinDate`) VALUES
(3, 'golsrushti1', 'srushti', 'gol', 'golsrushti1@gmail.com', 2147483647, '$2y$10$8', '2022-05-12'),
(4, 'uhi', 'joj', 'jojk;', 'joljln@gmail.com', 1234567890, '$2y$10$H', '2022-05-12'),
(5, 'rushi gandhi', '', '', 'rushigandhi14@gmail.com', 0, '$2y$10$P', '2022-05-12'),
(6, 'rushi_0508', '', '', 'rushigandhi14@gmail.com', 0, '$2y$10$k', '2022-05-12'),
(7, 'qwerty', '', '', 'rushigandhi0@gmail.com', 0, '$2y$10$b', '2022-05-12'),
(9, 'gandhirushi', '', '', 'lkfjfjk@gmail.com', 0, '$2y$10$L', '2022-05-12'),
(10, 'manan', '', '', 'bhavsarmanan21@gmail.com', 0, '$2y$10$K', '2022-05-12'),
(11, 'rcg', '', '', 'rcg@ddu.in', 0, '$2y$10$d', '2022-05-12'),
(12, 'dhruv', '', '', 'dhruv@gmail.com', 0, '$2y$10$jg9Ww1AIsphSQz0NUBsY3eMhx64i5p43p83w51kkh9.Gi.tZpmkU2', '2022-05-13'),
(13, 'rushi123', '', '', 'rushigandhi14@gmail.com', 0, '$2y$10$VpvLRPXFfVupVjkoSniPhuIt5kuQQGrxBoSpeqL/jbARlYbYxdcPK', '2022-05-13'),
(15, 'mihirpatel05', '', '', 'mihir@ddu.ac.in', 0, '$2y$10$aaiVNPDQj1s9ZmxJ8kBHRuVWRCIh7Is/QpDQmm/yNB50DsERvPX0m', '2022-05-14'),
(16, 'try', '', '', 'rushigandhi14@gmail.com', 0, '$2y$10$0mJwzDUpEKDvmTeffpelpunNqdhszIZsVJVvEloJTWRuZPjxbGllu', '2022-05-14'),
(17, 'vaibhav', '', '', 'vaibhav@gmail.com', 0, '$2y$10$zmjdFX/mvlhXz8mKEMMfEepq/odc2XM8JLBTAG/ZkU8.6izZpGAji', '2022-05-17'),
(18, 'dev', '', '', 'dev@gmail.com', 0, '$2y$10$KfuedoFfStYLUe2O8RfjROx0fmlETSy0CMLCnS74bMOw7JvYDVcZm', '2022-05-18'),
(19, 'srushti', '', '', 'golsrushti1@gmail.com', 0, '$2y$10$fjyi0x4H1BsUEN6F.BI31.O5YkrH9O.7hWmLILKPuHd4g43HWyvdq', '2022-05-19'),
(20, 'isha', '', '', 'isha@gmail.com', 0, '$2y$10$hcdrVS9eNdXmA9axDEXi/Ou3DStI/DZWt9pYxm2HCJLi6cu80RjB2', '2022-07-16'),
(21, 'srushti3', '', '', 'golsrushti1@gmail.com', 0, '$2y$10$fZ5kLs9iKshIkKOmZ0WwTeMtIXGHOJNcQMpc8DFHIA9rXNscs0gdS', '2022-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `viewfavourite`
--

CREATE TABLE `viewfavourite` (
  `cartItemId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
