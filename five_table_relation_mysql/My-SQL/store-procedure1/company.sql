-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2024 at 11:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `pro_manufacturer` (IN `mname` VARCHAR(25), IN `mcontact` INT(25))   BEGIN
  INSERT INTO 
   manufacturer(name,contact)
   values(mname,mcontact);

 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pro_product` (IN `pname` VARCHAR(25), IN `pprice` DOUBLE(10,3), IN `PmfName` VARCHAR(25))   BEGIN
  INSERT INTO 
   product(name,price,manufacturer_name)
   values(pname,pprice,PmfName);

 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `contact` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `contact`) VALUES
(17, 'jakir hosain', 2147483647),
(18, 'LG', 2147483647),
(19, 'samsung', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` double(10,3) DEFAULT NULL,
  `manufacturer_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_name`) VALUES
(17, 'Asrafuzzaman', 5666.000, '16'),
(18, 'phone', 5666.000, '18'),
(19, 'Ab Rohim', 68472.000, '19');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_companydata`
-- (See below for the actual view)
--
CREATE TABLE `view_companydata` (
`id` int(11)
,`name` varchar(25)
,`contact` int(25)
,`pid` int(11)
,`pname` varchar(30)
,`price` double(10,3)
,`Manufacturer_Name` varchar(25)
);

-- --------------------------------------------------------

--
-- Structure for view `view_companydata`
--
DROP TABLE IF EXISTS `view_companydata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_companydata`  AS SELECT `manufacturer`.`id` AS `id`, `manufacturer`.`name` AS `name`, `manufacturer`.`contact` AS `contact`, `product`.`id` AS `pid`, `product`.`name` AS `pname`, `product`.`price` AS `price`, `product`.`manufacturer_name` AS `Manufacturer_Name` FROM (`manufacturer` join `product`) WHERE `manufacturer`.`id` = `product`.`id` ;

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
