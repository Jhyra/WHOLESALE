-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 11:57 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'aa', 'aa', 1, 'aa'),
(4, 'ee', 'ee', 0, 'ee');

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
(1, 'jaeq', 'qqq', 'mqq'),
(2, 'wwqqqaaaaa', '0222aaaa', 'wwwwaaa'),
(3, 'dd', 'dd', 'dd'),
(5, 'JAY', 'sd', 'SAB'),
(6, 'u', 'u', 'u'),
(7, 'y', 'y', 'y'),
(55, 'JAY', 'sd', 'w'),
(33333, 'rrr', 'rr', 'rr');

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
(0, 'q', 'q', 'jess@gmail.com', 'qq', '099b3b060154898840f0ebdfb46ec78f');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `product`, `quantity`, `unit`, `price`, `login_id`) VALUES
(16, 'dfdgf', 'eretr', 'tdfgfg', '43345.00', 7),
(17, 'rrrrr', 'rrrr', 'rrrr', '33333.00', 7),
(20, 'aaa', 'aaa', '111', '22.00', 7),
(24, 'aaww', 'aaww', 'aa22', '33.00', 8),
(27, 'sss', 'ss', 'ss', '22.00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `salary` decimal(6,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cus_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_item`
--

CREATE TABLE `sales_item` (
  `sales_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
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
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
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
  ADD KEY `item_id` (`item_id`);

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
-- Constraints for table `sales_item`
--
ALTER TABLE `sales_item`
  ADD CONSTRAINT `sales_item_ibfk_1` FOREIGN KEY (`sales_id`) REFERENCES `sales` (`sales_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
