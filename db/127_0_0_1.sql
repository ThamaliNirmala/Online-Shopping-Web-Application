-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 08:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vip`
--
CREATE DATABASE IF NOT EXISTS `vip` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vip`;

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `adminID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`adminID`, `Name`, `password`) VALUES
('VIP1', 'Kasun', 'kasun1234'),
('VIP2', 'Sahan', 'sahan1234'),
('VIP3', 'Mithila', 'mithila1234'),
('VIP4', 'Thamali', 'thamali1234');

-- --------------------------------------------------------

--
-- Table structure for table `beveragedb`
--

CREATE TABLE `beveragedb` (
  `itemCode` varchar(20) NOT NULL,
  `itemName` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `offer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beveragedb`
--

INSERT INTO `beveragedb` (`itemCode`, `itemName`, `price`, `stock`, `offer`) VALUES
('B001', 'coca cola', 600, 50, '5%'),
('B002', 'pepsi', 400, 70, 'N/A'),
('B003', 'minute maid', 500, 65, '5%'),
('B005', 'wine', 1200, 36, 'N/A'),
('B006', 'high juice', 4500, 50, '7%'),
('S004', '7up', 800, 50, '7%');

-- --------------------------------------------------------

--
-- Table structure for table `deliverydb`
--

CREATE TABLE `deliverydb` (
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobileNumber` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliverydb`
--

INSERT INTO `deliverydb` (`firstName`, `lastName`, `address`, `mobileNumber`, `type`) VALUES
('Kasun', 'Tharaka', 'Galgamuwa', 717581993, '');

-- --------------------------------------------------------

--
-- Table structure for table `knifedb`
--

CREATE TABLE `knifedb` (
  `itemCode` varchar(20) NOT NULL,
  `itemName` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `offer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knifedb`
--

INSERT INTO `knifedb` (`itemCode`, `itemName`, `price`, `stock`, `offer`) VALUES
('K001', 'paring knife', 250, 50, '15%'),
('K003', 'carving knife', 460, 65, '5%'),
('K004', 'cleaver knife', 326, 78, 'N/A'),
('K005', 'boning knife', 637, 36, '7%'),
('K006', 'filleting knife', 480, 41, 'N/A'),
('L002', 'bread knife', 650, 14, 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `laundrydb`
--

CREATE TABLE `laundrydb` (
  `itemCode` varchar(5) NOT NULL,
  `itemName` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `offer` varchar(20) DEFAULT 'N/A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laundrydb`
--

INSERT INTO `laundrydb` (`itemCode`, `itemName`, `price`, `stock`, `offer`) VALUES
('L001', 'vim dishwash liquid', 250, 25, 'N/A'),
('L002', 'sunlight soap', 55, 103, 'buy 5 free 1'),
('L003', 'dove shampoo', 355, 79, 'N/A'),
('L004', 'sponge', 20, 45, 'N/A'),
('L005', 'hand sanitizer', 600, 13, 'N/A'),
('L006', 'toilet cleaner', 250, 25, 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `platedb`
--

CREATE TABLE `platedb` (
  `itemCode` varchar(20) NOT NULL,
  `itemName` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `offer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `platedb`
--

INSERT INTO `platedb` (`itemCode`, `itemName`, `price`, `stock`, `offer`) VALUES
('P001', 'dinner plate', 600.75, 55, '5%'),
('P002', 'dessert plate', 750.25, 50, 'N/A'),
('P003', 'soup plate', 500, 41, 'N/A'),
('P004', 'butter plate', 1500.21, 50, 'N/A'),
('P005', 'appetizer plate', 2500.1, 65, '5%'),
('P006', 'bread plate', 450.24, 50, '7%');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobileNumber` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `rePassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstName`, `lastName`, `gender`, `mobileNumber`, `email`, `address`, `password`, `rePassword`) VALUES
('Mithila ', 'Dilshan', 'Male', 711888933, 'mithiladilshan2000@gmail.com', '19 B/1 , Makulgaswewa , Dewahuwa.', 'mithila1234', 'mithila1234'),
('Kasun', 'Tharaka', 'Male', 717581993, 'k.tharakadharmapriya@gmail.com', 'Galgamuwa road, Nawagaththegama', 'kasun1234', 'kasun1234'),
('Thamali', 'Nirmala', '', 770113437, 'tnirmalaadasooriya@gmail.com', 'wattegedara,\r\nbamunakotuwa', 'thamali123', 'thamali123'),
('Sahan', 'Kumarasiri', 'Male', 776135690, 'kumarasirisahan@gmail.com', 'No 465/B ,Makulgolla , Kudawewa road , Galewela', 'sahan1234', 'sahan1234');

-- --------------------------------------------------------

--
-- Table structure for table `skindb`
--

CREATE TABLE `skindb` (
  `itemCode` varchar(20) NOT NULL,
  `itemName` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `offer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skindb`
--

INSERT INTO `skindb` (`itemCode`, `itemName`, `price`, `stock`, `offer`) VALUES
('S001', 'herbivor face wash', 1600, 50, 'N/A'),
('S002', 'lapis tansy oil', 1400, 65, '5%'),
('S003', 'even out tone', 800, 41, '7%'),
('S004', 'tatcha skin mask', 800, 55, 'N/A'),
('S005', 'glow facial', 200, 78, 'N/A'),
('S006', 'bakuchiol serum', 4500, 50, 'N/A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindb`
--
ALTER TABLE `admindb`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `beveragedb`
--
ALTER TABLE `beveragedb`
  ADD PRIMARY KEY (`itemCode`);

--
-- Indexes for table `deliverydb`
--
ALTER TABLE `deliverydb`
  ADD PRIMARY KEY (`mobileNumber`);

--
-- Indexes for table `knifedb`
--
ALTER TABLE `knifedb`
  ADD PRIMARY KEY (`itemCode`);

--
-- Indexes for table `laundrydb`
--
ALTER TABLE `laundrydb`
  ADD PRIMARY KEY (`itemCode`);

--
-- Indexes for table `platedb`
--
ALTER TABLE `platedb`
  ADD PRIMARY KEY (`itemCode`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`mobileNumber`);

--
-- Indexes for table `skindb`
--
ALTER TABLE `skindb`
  ADD PRIMARY KEY (`itemCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
