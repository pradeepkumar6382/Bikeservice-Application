-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 04:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikeservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `ownerid` int(100) NOT NULL,
  `username` varchar(122) NOT NULL,
  `password` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `phonenumber` varchar(111) NOT NULL,
  `services` varchar(111) NOT NULL,
  `description` varchar(111) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`ownerid`, `username`, `password`, `email`, `phonenumber`, `services`, `description`, `price`) VALUES
(15, 'a', '1', 'pradeepkumar17301@gmail.com', '46454  ', 'oilchange,general,brake', 'Type somethingQWQEQ', 21320),
(16, 'g', '23897', 'erl;olsjd', '2394729834', 'oilchange,general,maintanence', 'Type something', 50000),
(17, 'test', 'test', 'pradeepkumar17301@gmail.com', '65654665 ', 'oilchange,general,maintanence,brake', 'Type something', 28272),
(18, 'z', '1', 'tihazyhoz@mailinator.com', '5', 'oilchange,maintenance,brake,waterwash', 'Vel adipisci et ea t', 917),
(19, 'n', '12', 'xokyfyc@mailinator.com', '2', 'maintenance,waterwash,engine', 'Molestiae voluptatum', 634),
(21, 'a', 'hhvhgvmh', 'pradeepkumar17301@gmail.com', '5156161123', 'oilchange,general,maintenance,brake,waterwash', 'Type something', 213324);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`ownerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `ownerid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
