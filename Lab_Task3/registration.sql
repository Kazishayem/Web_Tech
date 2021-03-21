-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 12:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `firstname` varchar(128) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `birthdate` varchar(128) DEFAULT NULL,
  `gender` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `firstname`, `username`, `email`, `password`, `birthdate`, `gender`) VALUES
(1, 'Sayem', 'chowdhury', 'sayem@gmail.com', '12345678', '12-12-12', 'male'),
(2, 'Mohammad Sayem', 'chowdhury', 'sayem@gmail.com', '12345678', '12-12-12', 'male'),
(3, 'Mohammad Sayem', 'chowdhury', 'sayem@gmail.com', '12345678', '12-12-12', 'male'),
(4, 'Mohammad Sayem', 'sssr3f4r3f', 'sayem@', '12345678', '12-12-12', 'male'),
(5, 'Mohammad Sayem', 'sssr3f4r3f', 'sayem@', '12345678', '12-12-12', ''),
(6, 'Mohammad Sayem', 'sssr3f4r3f', 'sayem@', '12345678', '', ''),
(7, 'Mohammad Sayem', 'sssr3f4r3f', 'sayem@', '12345678', '', ''),
(8, 'Mohammad Sayem', 'sssr3f4r3f', 'sayem@', '12345678', '', ''),
(9, 'Mohammad Sayem', 'sssr3f4r3f', 'sayem@', '12345678', '2021-03-17', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
