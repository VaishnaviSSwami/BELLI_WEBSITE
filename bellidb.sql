-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 04:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bellidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `rname`, `address`, `email`, `password`, `phone`, `date`) VALUES
(1, 'South Corner', 'Ghatkopar', '7738417056', 'samvidp2@gmail.com', '$2y$04$mDoAz5qm', NULL),
(3, 'North Corner', 'Kurla West', '8652714162', 'thecustomizers2021@gmail.com', '$2y$04$wEx4Hep4', NULL),
(4, 'Real Estate ', 'Kalyan West', '9702981125', 'patilsamvid60@gmail.com', '$2y$04$VMuq/Ryn', '2022-01-19'),
(6, 'Saha Hotel', 'Thane West', '9870221331', 'heet@gmail.com', '$2y$04$y0KA26JA', '2022-01-19'),
(7, 'Heet', 'Thane West', 'gutka@gmail.com', '$2y$04$b.98f3w5N0v7g8VWshuMKeJlFPH9D7W/5cQJwBqgmc/rZ7/9BA5Qu', '7977245526', '2022-01-19'),
(8, 'Gadbad', 'Kalyan West', 'demo@gmail.com', 'Demo@123', '8655579909', '2022-01-19'),
(9, 'Jhula', 'Kahi na kahi', 'kya@gmail.com', 'c6765161d671b1363df1abf580aa2f8f', '7738800710', '2022-01-19'),
(10, 'Road ', 'Mulund West ', 'Good@gmail.com', 'd661b43a6a574e8e26063662e2763b0a', '6456456456', '2022-01-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
