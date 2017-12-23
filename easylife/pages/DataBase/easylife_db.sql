-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2017 at 10:38 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easylife_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Invoice Code` varchar(8) NOT NULL,
  `Member ID` varchar(8) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(15) NOT NULL DEFAULT 'Pending',
  `Payment Status` varchar(10) NOT NULL DEFAULT 'Not Paid',
  `Payment Method` varchar(100) NOT NULL,
  `Shipping Address` varchar(10000) NOT NULL,
  `Billing Address` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Member ID` varchar(8) NOT NULL,
  `User Name` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Type` int(1) NOT NULL,
  `Image` varchar(8) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Active',
  `Member Since` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Last Logged in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Total Purchase` int(8) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Order Code` varchar(8) NOT NULL,
  `Product Code` varchar(8) NOT NULL,
  `Quantity` int(8) NOT NULL,
  `Invoice Code` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product Code` varchar(8) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Quantity` int(8) NOT NULL,
  `Total Sells` int(8) NOT NULL DEFAULT '0',
  `Price` float NOT NULL,
  `Last Sold` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Image` varchar(8) NOT NULL,
  `Catagory` varchar(30) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Size` varchar(10) NOT NULL,
  `Description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report Code` varchar(8) NOT NULL,
  `Report Title` varchar(30) NOT NULL,
  `Member ID` varchar(8) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  `Description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Invoice Code`),
  ADD KEY `invoice_of_member` (`Member ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Member ID`),
  ADD UNIQUE KEY `User Name` (`User Name`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Image` (`Image`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Order Code`),
  ADD KEY `order_of_product` (`Product Code`),
  ADD KEY `order_of_invoice` (`Invoice Code`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product Code`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Report Code`),
  ADD KEY `report_of_member` (`Member ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_of_member` FOREIGN KEY (`Member ID`) REFERENCES `member` (`Member ID`) ON DELETE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_of_invoice` FOREIGN KEY (`Invoice Code`) REFERENCES `invoice` (`Invoice Code`) ON DELETE NO ACTION,
  ADD CONSTRAINT `order_of_product` FOREIGN KEY (`Product Code`) REFERENCES `product` (`Product Code`) ON DELETE NO ACTION;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_of_member` FOREIGN KEY (`Member ID`) REFERENCES `member` (`Member ID`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
