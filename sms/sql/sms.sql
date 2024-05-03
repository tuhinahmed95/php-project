-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 09:42 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `info` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `info`, `date`, `user_id`) VALUES
(1, 'ASUS', 'aus international ltd.', '2018-07-11 00:00:00', 1),
(2, 'Lenovo', 'lenovo international ltd.', '2018-07-11 00:00:00', 1),
(3, 'Apple', 'Apple Int Inc.', '2018-07-11 00:00:00', 1),
(4, 'Samsung', 'World Best Manufacturer.', '2018-07-13 13:48:29', 1),
(5, 'Alcatel', '', '2018-07-13 22:20:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `p_info` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `manufac_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `p_info`, `date`, `manufac_id`, `user_id`) VALUES
(1, 'Mouse', 'Most powerfull mouse in the world', '2018-07-08 00:00:00', 1, 1),
(2, 'Monitor', 'This is Monitor', '2018-06-10 00:00:00', 4, 1),
(3, 'Monitor', 'This is Monitor', '2018-06-10 00:00:00', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(10) UNSIGNED NOT NULL,
  `price` double(12,2) NOT NULL,
  `qty` double(12,2) NOT NULL,
  `date` datetime NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `manufac_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `p_inv_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `price`, `qty`, `date`, `product_id`, `manufac_id`, `user_id`, `p_inv_id`) VALUES
(1, 240.00, 5.00, '2018-07-14 00:04:11', 1, 1, 1, 2347395027),
(2, 2500.00, 2.00, '2018-07-14 00:27:19', 2, 4, 1, 2347395027),
(3, 650.00, 4.00, '2018-07-14 00:43:18', 2, 2, 1, 43182306),
(4, 3500.00, 5.00, '2018-07-14 00:43:36', 2, 4, 1, 43182306),
(5, 45000.00, 4.00, '2018-07-14 01:12:44', 1, 3, 1, 1122725),
(6, 3500.00, 5.00, '2018-07-14 01:13:09', 3, 4, 1, 1122725);

-- --------------------------------------------------------

--
-- Table structure for table `p_invoice`
--

CREATE TABLE `p_invoice` (
  `id` int(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `hole_seller` varchar(45) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_invoice`
--

INSERT INTO `p_invoice` (`id`, `date`, `hole_seller`, `user_id`) VALUES
(1122725, '2018-07-14 01:13:12', 'nul', 1),
(43182306, '2018-07-14 00:43:38', 'nul', 1),
(2147483647, '2018-07-14 00:42:42', 'nul', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `date`) VALUES
(1, 'admin', 'admin', 'admin@email.com', '2018-07-09 08:15:05'),
(2, 'demo', 'demo', 'demo@email.com', '2018-07-09 08:15:05'),
(3, 'sumon', 'sumon', 'sumon@email.com', '2018-07-09 08:15:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_invoice`
--
ALTER TABLE `p_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
