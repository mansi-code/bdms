-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 08:33 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `bgroup` varchar(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `fname`, `address`, `city`, `age`, `bgroup`, `email`, `mno`) VALUES
(1, 'ALISHA JAIN', 'bkjbb', 'H. No. 70, Navyug, Sector-9, Rohini', 'Delhi', 18, 'ap', 'alish22@gmail.com', 767298392830),
(14, 'Mansi Jain', 'gjk', 'H. No. 20, Navyug Apartment, Sector-9, Rohini', 'Delhi', 19, 'bp', 'mansijain2225@gmail.com', 8800101021),
(18, 'Sheldon Cooper', 'Harry Cooper', 'HNO 12 Lonavla Mumbai', 'Mumbai', 25, 'op', 'sheldon@gmail.com', 11001100),
(19, 'Amy gupta ', 'Anuj Gupta ', 'D-12,sec-7 Andheri Mumbai', 'Mumbai', 40, 'an', 'amy@gmail.com', 1010101010),
(20, 'Penny Aggarwal', 'Jack Aggarwal', '15, Jblock Saket Delhi', 'Delhi', 32, 'ap', 'penny@gmail.com', 990099);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
