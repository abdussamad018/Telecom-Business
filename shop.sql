-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 08:29 PM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `nine` int(10) DEFAULT NULL,
  `nineteen` int(10) DEFAULT NULL,
  `twentynine` int(10) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `nine`, `nineteen`, `twentynine`, `date`) VALUES
(2, 10, 20, 5, '2022-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE `cash` (
  `id` int(11) NOT NULL,
  `cash` decimal(10,2) DEFAULT NULL,
  `cashin` decimal(10,0) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`id`, `cash`, `cashin`, `date`) VALUES
(1, '12000.00', '0', '2022-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_name`, `phone`, `address`) VALUES
(1, NULL, 1845891962, 'Chandpur');

-- --------------------------------------------------------

--
-- Table structure for table `due`
--

CREATE TABLE `due` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `due`
--

INSERT INTO `due` (`id`, `customer_name`, `purpose`, `amount`, `date`) VALUES
(1, NULL, 'Mobile load', NULL, '2022-04-19'),
(2, NULL, 'Mobile load', NULL, '2022-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `purpose`, `amount`, `date`) VALUES
(1, 'Nasa Cost', '120.00', '2022-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `mobilebanking`
--

CREATE TABLE `mobilebanking` (
  `id` int(11) NOT NULL,
  `bkash` decimal(10,2) DEFAULT NULL,
  `nagad` decimal(10,2) DEFAULT NULL,
  `rocket` decimal(10,2) DEFAULT NULL,
  `upay` decimal(10,2) DEFAULT NULL,
  `tap` decimal(10,2) DEFAULT NULL,
  `desco` decimal(10,2) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobilebanking`
--

INSERT INTO `mobilebanking` (`id`, `bkash`, `nagad`, `rocket`, `upay`, `tap`, `desco`, `date`) VALUES
(1, '1200.00', '890.00', '780.00', '890.00', '789.00', '0.00', '2022-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `telecom`
--

CREATE TABLE `telecom` (
  `id` int(11) NOT NULL,
  `gp` decimal(10,2) DEFAULT NULL,
  `robi` decimal(10,2) DEFAULT NULL,
  `banglalink` decimal(10,2) DEFAULT NULL,
  `airtel` decimal(10,2) DEFAULT NULL,
  `teletalk` decimal(10,2) DEFAULT NULL,
  `paywell` decimal(10,2) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telecom`
--

INSERT INTO `telecom` (`id`, `gp`, `robi`, `banglalink`, `airtel`, `teletalk`, `paywell`, `date`) VALUES
(1, '100.00', '200.00', '300.00', '400.00', '500.00', '600.00', '2022-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `status`) VALUES
(1, 'Ahsan Habib', 'Admin', 'habib@gmail.com', '123456', 'Active'),
(2, 'Abdur Rahim', 'Manager', 'ripon@gmail.com', '123456', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `website_setting`
--

CREATE TABLE `website_setting` (
  `id` int(11) NOT NULL,
  `shopname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website_setting`
--

INSERT INTO `website_setting` (`id`, `shopname`) VALUES
(1, 'Maa Telecom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash`
--
ALTER TABLE `cash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `due`
--
ALTER TABLE `due`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobilebanking`
--
ALTER TABLE `mobilebanking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telecom`
--
ALTER TABLE `telecom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_setting`
--
ALTER TABLE `website_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cash`
--
ALTER TABLE `cash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `due`
--
ALTER TABLE `due`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mobilebanking`
--
ALTER TABLE `mobilebanking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `telecom`
--
ALTER TABLE `telecom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `website_setting`
--
ALTER TABLE `website_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
