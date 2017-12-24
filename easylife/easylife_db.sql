-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 03:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `Invoice_Code` varchar(8) NOT NULL,
  `Member_ID` varchar(8) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(15) NOT NULL DEFAULT 'Pending',
  `Payment_Status` varchar(10) NOT NULL DEFAULT 'Not Paid',
  `Payment_Method` varchar(100) NOT NULL,
  `Shipping_Address` varchar(10000) NOT NULL,
  `Billing_Address` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Member_ID` varchar(8) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Type` int(1) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Active',
  `Member_Since` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Last_Logged_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Total_Purchase` int(8) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Member_ID`, `Password`, `Name`, `Email`, `Type`, `Status`, `Member_Since`, `Last_Logged_in`, `Total_Purchase`) VALUES
('1', '123', 'Rajesh saha', 'r@gmail.com', 1, 'Active', '2017-12-23 16:01:03', '2017-12-23 16:01:03', 0),
('2', '123', 'Rajesh', 'r4@gmail.com', 4, 'Active', '2017-12-23 16:01:50', '2017-12-23 16:01:50', 0),
('3', '123', 'efti', 'e@gmail.com', 1, 'Active', '2017-12-24 11:46:51', '2017-12-24 11:46:51', 0),
('4', '123', 'Rakib', 'rakib@gmail.com', 1, 'Active', '2017-12-24 11:48:07', '2017-12-24 11:48:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `Order_Code` varchar(8) NOT NULL,
  `Product_Code` varchar(8) NOT NULL,
  `Quantity` int(8) NOT NULL,
  `Invoice_Code` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product _Code` varchar(8) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Quantity` int(8) NOT NULL,
  `Total_Sells` int(8) NOT NULL DEFAULT '0',
  `Price` float NOT NULL,
  `Last_Sold` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Image` varchar(8) NOT NULL,
  `Catagory` varchar(30) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Size` varchar(10) NOT NULL,
  `Description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product _Code`, `Name`, `Quantity`, `Total_Sells`, `Price`, `Last_Sold`, `Image`, `Catagory`, `Brand`, `Size`, `Description`) VALUES
('P-000001', 'kakashi tshirt', 100, 0, 640, NULL, 'P-000001', 'Gents Winter Collection', 'Esctasy', 'L', '');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_Code` varchar(8) NOT NULL,
  `Report_Title` varchar(30) NOT NULL,
  `Member_ID` varchar(8) NOT NULL,
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
  ADD PRIMARY KEY (`Invoice_Code`),
  ADD KEY `invoice_of_member` (`Member_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Member_ID`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`Order_Code`),
  ADD KEY `order_of_product` (`Product_Code`),
  ADD KEY `order_of_invoice` (`Invoice_Code`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product _Code`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Report_Code`),
  ADD KEY `report_of_member` (`Member_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_of_member` FOREIGN KEY (`Member_ID`) REFERENCES `member` (`Member_ID`) ON DELETE NO ACTION;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_of_invoice` FOREIGN KEY (`Invoice_Code`) REFERENCES `invoice` (`Invoice_Code`) ON DELETE NO ACTION,
  ADD CONSTRAINT `order_of_product` FOREIGN KEY (`Product_Code`) REFERENCES `product` (`Product _Code`) ON DELETE NO ACTION;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_of_member` FOREIGN KEY (`Member_ID`) REFERENCES `member` (`Member_ID`) ON DELETE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
