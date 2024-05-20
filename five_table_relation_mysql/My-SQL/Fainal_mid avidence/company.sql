-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2024 at 12:24 PM
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_manufacturer` (IN `mname` VARCHAR(50), IN `maddress` VARCHAR(100), IN `contact` VARCHAR(100))   BEGIN
INSERT INTO
manufacturer(name,address,contact_no)VALUES(mname,maddress,contact);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_product` (IN `pname` VARCHAR(50), IN `pprice` DOUBLE(10,2), IN `manufac` INT(10))   BEGIN
INSERT INTO
product(name,price,manufacturer_id)VALUES(pname,pprice,manufac);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(76, 'LG', 'savar', '01719877455'),
(77, 'Rangs', 'savar', '01957682985');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `manufac_id` AFTER DELETE ON `manufacturer` FOR EACH ROW BEGIN
DELETE FROM product WHERE manufacturer_id = old.id;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL,
  `manufacturer_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(201, 'Frize', 5000.00, 76),
(202, 'Frize', 45000.00, 77);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_product`
-- (See below for the actual view)
--
CREATE TABLE `view_product` (
`id` int(11)
,`name` varchar(50)
,`address` varchar(100)
,`contact_no` varchar(50)
,`pid` int(11)
,`pname` varchar(50)
,`price` double(10,2)
,`manufacturer_id` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_product1`
-- (See below for the actual view)
--
CREATE TABLE `view_product1` (
`id` int(11)
,`name` varchar(50)
,`price` double(10,2)
,`manme` varchar(50)
,`contact_no` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `view_product`
--
DROP TABLE IF EXISTS `view_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_product`  AS SELECT `m`.`id` AS `id`, `m`.`name` AS `name`, `m`.`address` AS `address`, `m`.`contact_no` AS `contact_no`, `p`.`id` AS `pid`, `p`.`name` AS `pname`, `p`.`price` AS `price`, `p`.`manufacturer_id` AS `manufacturer_id` FROM (`manufacturer` `m` join `product` `p`) WHERE `m`.`id` = `p`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `view_product1`
--
DROP TABLE IF EXISTS `view_product1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_product1`  AS SELECT `p`.`id` AS `id`, `p`.`name` AS `name`, `p`.`price` AS `price`, `m`.`name` AS `manme`, `m`.`contact_no` AS `contact_no` FROM (`product` `p` join `manufacturer` `m`) WHERE `m`.`id` = `p`.`manufacturer_id` ;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
