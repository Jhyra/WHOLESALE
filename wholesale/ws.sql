-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 10:32 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ws`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contactno` int(11) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `firstname`, `lastname`, `contactno`, `address`) VALUES
(88, 'nn', 'jn', 8888, 'jbn'),
(99, 'hhhkkk', 'njjjj', 909888, 'bbkkk');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `firstname`, `middlename`, `lastname`) VALUES
(77, 'jai', 'l', 'm'),
(89, 'jaeqm', 'k', 'mandaya');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(9) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'dfasd', 'sdf', 'ada@gmail.com', 'earl', 'e6c760b3216a51c656c5861d72d5bf62'),
(2, 'w', 'w', 'gray21@gmail.com', 'w', 'f1290186a5d0b1ceab27f4e77c0c5d68'),
(3, 'bb', 'bb', 'gray21@gmail.com', 'bb', '21ad0bd836b90d08f4cf640b4c298e7c'),
(4, 'jae', 'z', 'gray21@gmail.com', 'Zax', 'f3abb86bd34cf4d52698f14c0da1dc60'),
(5, 'ss', 'ss', 'paloyortiz021@yahoo.com', 'jae', '3691308f2a4c2f6983f2880d32e29c84'),
(6, 'z', 'z', 'sabadoj.522@gmail.com', 'z', 'fbade9e36a3f36d3d676c1b808451dd7'),
(7, 'a', 'a', 'sabadoj.522@gmail.com', 'a', '0cc175b9c0f1b6a831c399e269772661'),
(8, 'wq', 'qw', 'sabadoj.522@gmail.com', 'qq', '099b3b060154898840f0ebdfb46ec78f'),
(0, 'aa', 'aa', 'sabadoj.522@gmail.com', 'aa', '4124bc0a9335c27f086f24ba207a4912'),
(0, 'q', 'q', 'jess@gmail.com', 'qq', '099b3b060154898840f0ebdfb46ec78f'),
(0, 'jae', 'qm', 'jeemandaya@gmail.com', 'jae', '202cb962ac59075b964b07152d234b70'),
(0, 'f', 'f', 'grayortiz1998@gmail.com', 'f', '8fa14cdd754f91cc6554c9e71929cce7'),
(0, 'jae', 'quilab', 'grayortiz1998@gmail.com', 'jai', '421493fa48fc8df84d1f5f3478cf247a'),
(0, 'by', 'by', 'jeemandaya@gmail.com', 'by', 'df3f079de6961496f0460dcfdbf9bca3'),
(0, 'john', 'ortiz', 'paloyortiz021@yahoo.com', 'mecca', 'c20ad4d76fe97759aa27a0c99bff6710');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `description`, `quantity`, `price`, `login_id`) VALUES
(99, 'cvcvckk', 'vbvbkkk', '989.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `emp_id` int(11) NOT NULL,
  `salary` decimal(6,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cus_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_item`
--

CREATE TABLE `sales_item` (
  `sales_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD UNIQUE KEY `emp_id_2` (`emp_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `sales_item`
--
ALTER TABLE `sales_item`
  ADD KEY `sales_id` (`sales_id`),
  ADD KEY `item_id` (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);

--
-- Constraints for table `sales_item`
--
ALTER TABLE `sales_item`
  ADD CONSTRAINT `sales_item_ibfk_1` FOREIGN KEY (`sales_id`) REFERENCES `sales` (`sales_id`),
  ADD CONSTRAINT `sales_item_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
